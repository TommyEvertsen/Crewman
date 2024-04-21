<template>
    <v-app>
        <AuthenticatedLayout
            ><template #main>
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
            </template>
        </AuthenticatedLayout>
    </v-app>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    employerName: "",
    employeeFName: "",
    employeeLName: "",
});
</script>

<style>

</style>
