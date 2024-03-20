<template>
    <v-btn
        density="default"
        @click="toggleTheme"
        icon="mdi-theme-light-dark"
    ></v-btn>
</template>
<script setup>
import { useTheme } from "vuetify";

const theme = useTheme();

const isDark = () => {
    return theme.global.name.value == "dark";
};
const toggleTheme = () => {
    theme.global.name.value = theme.global.current.value.dark
        ? "light"
        : "dark";
};
</script>
