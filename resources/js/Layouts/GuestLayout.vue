<script setup>
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ToggleDarkBtn from "@/Components/ToggleDarkBtn.vue";
import { useTheme } from "vuetify";
import { socket } from "@/Composables/socketio";

const theme = useTheme();
const page = usePage();
const appName = computed(() => page.props.appName);
//socketIOサーバに接続
const sio = socket.connect();
//ユーザのログイン状況集計用の処理
//socket idとユーザ名を紐づけるため接続完了したらユーザ名をサーバに送信
sio.on("connect", async (_socket) => {
    console.log(`connect ${socket.id}`);
    socket.emit("message", "hello");
});
sio.on("error", (reason) => {
    console.log(reason, "Error!");
});
sio.on("reconnect_attempt", (attempt) => {
    console.log("reconnect", attempt);
});
//
window.addEventListener("beforeunload", (event) => {
    //fastapi+socketioサーバ側の例外エラー対策
    //詳細はサーバのmain.py参照
    socket.disconnect();
});
</script>
<template>
    <v-app class="rounded rounded-md app-background">
        <v-app-bar
            :theme="theme.global.name"
            elevation="0"
            density="compact"
            color="background"
        >
            <template v-slot:prepend>
                <v-appbar-title>
                    <v-icon :icon="ApplicationLogo"></v-icon>
                    {{ appName }}
                </v-appbar-title>
            </template>
            <ToggleDarkBtn></ToggleDarkBtn>
            <v-btn icon="mdi-login-variant" :href="route('login')"></v-btn>
        </v-app-bar>
        <v-main>
            <slot></slot>
        </v-main>
    </v-app>
</template>
<style>
.app-background {
    background-color: rgb(var(--v-theme-background));
}
</style>
