<template>
    <v-app>
        <AuthenticatedLayout
            ><template #main class="my-auto">
                <v-sheet flat>
                    <v-card class="text-center mx-10 my-auto">
                        <h1 class="text-lg bold">Employee information</h1>
                        <br />
                        <p>Name:</p>
                        <p>{{ employee.firstName }} {{ employee.lastName }}</p>
                        <br />
                        <h1>Current employer:</h1>
                        <p>{{ employee.employer.name }}</p>
                        <br />
                        <p>Other employements:</p>
                        <div
                            v-for="employers in employee.past_and_future_employer"
                        >
                            <p>
                                {{ employers.name }} -
                                {{ employers.start_date }} -
                                {{ employers.end_date }}
                            </p>
                        </div>
                        <br />

                        <p>Assignments:</p>
                        <div
                            v-for="assignment in employee.employer.assignments"
                        >
                            <p>
                                {{ assignment.name }} -
                                {{ assignment.start_date }} -
                                {{ assignment.end_date }}
                            </p>
                            <p v-for="role in assignment.assignmentroles">
                                Role: {{ role.role_type }}
                                {{ role.start_date }} -
                                {{ role.end_date }}
                            </p>
                            <p v-for="leave in assignment.assignmentleaves">
                                Leaves: {{ leave.name }}
                                {{ leave.start_date }} -
                                {{ leave.end_date }}
                            </p>
                            <br />
                            <p>{{ console.log(employee) }}</p>
                        </div>
                    </v-card>
                </v-sheet>
            </template>
        </AuthenticatedLayout>
    </v-app>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps(["employee"]);
</script>

<style>

</style>
