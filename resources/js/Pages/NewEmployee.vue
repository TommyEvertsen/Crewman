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

        <v-sheet class="mx-auto my-auto" width="300">
            <v-form
                @submit.prevent="
                    form.post(route('employees.store'), {
                        onSuccess: () => form.reset(),
                    })
                "
            >
                <v-text-field
                    v-model="form.employeeFName"
                    label="Employee first name"
                ></v-text-field>
                <v-text-field
                    v-model="form.employeeLName"
                    label="Employee last name"
                ></v-text-field>
                <v-text-field
                    v-model="form.employerName"
                    label="Employer name"
                ></v-text-field>

                <v-btn class="mt-2" type="submit" block>Submit</v-btn>
            </v-form>
        </v-sheet>
    </v-app>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    employerName: "",
    employeeFName: "",
    employeeLName: "",
});
</script>

<style>
.v-app-bar {
    background-color: rgb(54, 162, 235) !important;
    color: azure !important;
}
</style>
