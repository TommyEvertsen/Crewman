<script setup>
import Employees from "@/Pages/Employees.vue";
</script>

<template>
    <v-app-bar>
        <v-app-bar-title>Crewman</v-app-bar-title>
    </v-app-bar>

    <v-navigation-drawer :width="178">
        <v-list-item
            :href="route('employees.index')"
            link
            title="View Employees"
        ></v-list-item>
        <v-list-item
            :href="route('newEmployee')"
            link
            title="Add employee"
        ></v-list-item>
    </v-navigation-drawer>

   
</template>
