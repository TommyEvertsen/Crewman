<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <v-app>
        <v-app-bar>
            <v-app-bar-title>Crewman</v-app-bar-title>
        </v-app-bar>

        <v-navigation-drawer :width="178">
            <v-list-item
                :href="route('employees')"
                link
                title="View Employees"
            ></v-list-item>
        </v-navigation-drawer>
    </v-app>
</template>
