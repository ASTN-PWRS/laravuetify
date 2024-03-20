<script setup>
import { Head } from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
    <Head title="Welcome"></Head>
    <GuestLayout>
        <v-container class="fill-height" fluid>
            <v-row no-gutters>
                <v-col v-for="n in 3" :key="n" cols="12" sm="4">
                    <v-sheet class="ma-2 pa-2"> One of three columns </v-sheet>
                </v-col>
            </v-row>
        </v-container>
    </GuestLayout>
</template>
