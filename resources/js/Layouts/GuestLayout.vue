<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ToggleDarkBtn from "@/Components/ToggleDarkBtn.vue";
import { useTheme } from "vuetify";

const theme = useTheme();
</script>
<template>
    <v-layout class="rounded rounded-md">
        <v-app-bar :theme="theme.global.name" color="header" elevation="0">
            <template v-slot:prepend>
                <v-appbar-title>
                    <v-icon :icon="ApplicationLogo"></v-icon>
                    Title
                </v-appbar-title>
            </template>
            <ToggleDarkBtn></ToggleDarkBtn>
            <v-btn
                icon="mdi-login-variant"
                color="primary"
                :href="route('login')"
            ></v-btn>
        </v-app-bar>
        <v-main>
            <slot></slot>
        </v-main>
    </v-layout>
</template>
