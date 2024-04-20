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
                title="Add employee"
            ></v-list-item>
        </v-app-bar>

        <v-card class="text-center mx-10 my-auto">
            <h1>Name:</h1>
            <h2>{{ employee.firstName }} {{ employee.lastName }}</h2>
            <br />
            <h1>Current employer:</h1>
            <h2>{{ employee.employer.name }}</h2>
            <br />
            <h1>Other employements:</h1>
            <h2>{{ employee.past_and_future_employer[0].name }}</h2>
            <h2>
                {{ employee.past_and_future_employer[0].start_date }} -
                {{ employee.past_and_future_employer[0].end_date }}
            </h2>

            <br />
            <h1>Assignments:</h1>
            <h2>{{ employee.employer.assignments[0].name }}</h2>
            <h2>
                {{ employee.employer.assignments[0].start_date }} -
                {{ employee.employer.assignments[0].end_date }}
            </h2>

            <br />
            <h1>Roles:</h1>
            <h2>
                {{
                    employee.employer.assignments[0].assignmentroles[0]
                        .role_type
                }}
            </h2>
            <br />
            <h1>Leaves:</h1>
            <h2>
                {{ employee.employer.assignments[0].assignmentleaves[0].name }}
            </h2>

            <h1>{{ console.log(employee) }}</h1>
        </v-card>
    </v-app>
</template>

<script setup>
defineProps(["employee"]);
</script>

<style>
.v-app-bar {
    background-color: rgb(54, 162, 235) !important;
    color: azure !important;
}
</style>
