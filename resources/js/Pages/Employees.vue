<template>
    <v-app>
        <AuthenticatedLayout
            ><template #main>
                <v-sheet flat class="my-auto">
                    <v-data-table
                        :headers="headers"
                        :items="employees"
                        @click:row="showEmployee"
                    >
                    </v-data-table>
                </v-sheet>
            </template>
        </AuthenticatedLayout>
    </v-app>
    <p>{{ console.log(employees) }}</p>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

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
.v-data-table-header__sort-icon {
    color: black !important;
}
</style>
