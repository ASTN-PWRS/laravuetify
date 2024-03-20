<script setup>
import { Head, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="Log in"></Head>
    <v-app>
        <v-main>
            <v-container class="fill-height" fluid>
                <v-card width="600px" class="mx-auto mt-5">
                    <v-card-title class="py-3 bg-blue"> Login </v-card-title>
                    <v-card-actions class="py-3">
                        <v-form style="width: 100%" @submit.prevent="submit">
                            <v-text-field
                                prepend-icon="mdi-account-circle"
                                label="e-mail"
                                density="compact"
                                v-model="form.email"
                            />
                            <v-text-field
                                prepend-icon="mdi-lock"
                                append-icon="mdi-eye-off"
                                label="password"
                                density="compact"
                                v-model="form.password"
                            />
                            <v-card-actions>
                                <v-row class="px-5 justify-end">
                                    <v-btn variant="tonal" class="bg-red"
                                        >Login</v-btn
                                    >
                                </v-row>
                            </v-card-actions>
                        </v-form>
                    </v-card-actions>
                </v-card>
            </v-container>
        </v-main>
    </v-app>
</template>
