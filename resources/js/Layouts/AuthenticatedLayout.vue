<script setup></script>

<template>
    <v-app>
        <v-app-bar>
            <v-app-bar-title>Crewman</v-app-bar-title>
            <v-list-item
                prepend-icon="mdi-home"
                :href="route('dashboard')"
                title="Dashboard"
          
            ></v-list-item>
            <v-list-item
                prepend-icon="mdi-account-group"
                :href="route('employees.index')"
                title="View Employees"
            ></v-list-item>
            <v-list-item
                prepend-icon="mdi-account-plus"
                :href="route('newEmployee')"
                title="Add employee"
            ></v-list-item>
        </v-app-bar>

        <main class="my-auto">
            <slot name="main" />
        </main>
    </v-app>
</template>

<style>
.v-app-bar {
    background-color: rgb(54, 162, 235) !important;
    color: azure !important;
}

.v-list-item__spacer {
    width: 5px !important;
}

.v-icon {
    color: aliceblue;
    opacity: 90 !important;
}
</style>
