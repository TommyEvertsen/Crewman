<template>
    <v-app>
        <v-app-bar>
            <v-app-bar-title>Crewman</v-app-bar-title>
            <v-list-item
                :href="route('employees.index')"
                link
                title="View Employees"
            ></v-list-item>
            <v-list-item
                :href="route('newEmployee')"
                link
                title="Add employer"
            ></v-list-item>
        </v-app-bar>

        <v-sheet flat class="my-auto">
            <v-data-table 
                :headers="headers"
                :items="employees"
                @click:row="showEmployee"
            >
            </v-data-table>
        </v-sheet>
    </v-app>
    <p>{{ console.log(employees) }}</p>
</template>

<script setup>
defineProps(["employees"]);

function showEmployee(event, row) {
    const url = route("showEmployment", { employee: row.item });
    window.location.href = url;
}

const headers = [
    { key: "firstName", title: "First name" },
    { key: "lastName", title: "Last name" },
    { key: "ZID", title: "ZID" },
    { key: "employer.name", title: "Most recent employer" },
];
</script>

<style>
.v-app-bar {
    background-color: rgb(54, 162, 235) !important;
    color: azure !important;
}
</style>
