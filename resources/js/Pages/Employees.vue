<template>
    <v-card title="Employees" flat>
        <template v-slot:text> </template>
        <p>{{ console.log(employees) }}</p>

        <v-data-table :headers="headers" :items="employees"></v-data-table>
    </v-card>
</template>

<script setup>
defineProps(["employees"]);

const headers = [
    { key: "id", title: "Employee id" },
    { key: "firstName", title: "Employee firstName" },
    { key: "lastName", title: "Employee lastName" },
    { key: "ZID", title: "Employee ZID" },
    { key: "employer.name", title: "Most recent employer" },
];
</script>
