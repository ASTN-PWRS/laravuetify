<script setup>
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ToggleDarkBtn from "@/Components/ToggleDarkBtn.vue";
import { useTheme } from "vuetify";

const theme = useTheme();
const page = usePage();

const appName = computed(() => page.props.appName);
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
