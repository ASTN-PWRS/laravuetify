<script setup>
import { Head } from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
    <Head title="Welcome"></Head>
    <GuestLayout>
        <v-container class="fill-height" fluid>
            <v-row no-gutters>
                <v-col
                    v-for="n in 3"
                    :key="n"
                    cols="12"
                    sm="4"
                    class="d-flex justify-center"
                >
                    <v-card class="ma-2 pa-2" rounded width="300" height="300">
                        <v-card-title>One of three columns</v-card-title>
                    </v-card>
                </v-col>
                <v-col
                    v-for="n in 3"
                    :key="n"
                    cols="12"
                    sm="4"
                    class="d-flex justify-center"
                >
                    <v-card class="ma-2 pa-2" rounded width="300" height="300">
                        <v-card-title>One of three columns</v-card-title>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </GuestLayout>
</template>
