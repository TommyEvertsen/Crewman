<template>
    <v-card title="Employees" flat>
        <template v-slot:text> </template>
        <p>{{ console.log(employees) }}</p>
        <v-data-table :headers="headers" :items="employees"></v-data-table>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="blue-darken-1" variant="text" @click="close">
                Cancel
            </v-btn>
            <v-btn color="blue-darken-1" variant="text" @click="save">
                Save
            </v-btn>
        </v-card-actions>
    </v-card>
</template>

<script setup>
defineProps(["employees"]);

const headers = [
    { key: "firstName", title: "First name" },
    { key: "lastName", title: "Last name" },
    { key: "ZID", title: "ZID" },
    { key: "employer.name", title: "Current employer" },
    {
        key: "past_and_future_employer[0].name",
        title: "Past and future employer",
    },
    { key: "employer.assignments[0].name", title: "Assignments" },
    {
        key: "employer.assignments[0].assignmentleaves[0].name",
        title: "leaves",
    },
    {
        key: "employer.assignments[0].assignmentroles[0].role_type",
        title: "roles",
    },
];
</script>
