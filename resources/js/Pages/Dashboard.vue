<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
</script>

<template>
    <v-app>
        <AuthenticatedLayout
            ><template #main>
                <v-sheet
                    class="d-flex align-center justify-center flex-wrap text-center mx-auto my-auto"
                    elevation="4"
                    height="250"
                    max-width="800"
                    width="100%"
                    rounded
                >
                    <div>
                        <h2
                            class="text-h4 font-weight-black"
                            style="color: rgb(54, 162, 235)"
                        >
                            Crewman
                        </h2>
                        <div class="text-h5 font-weight-medium mb-2">
                            Crew your man or man your crew
                        </div>

                        <p class="text-body-2 mb-4">
                            Please check out our employees
                        </p>

                        <v-btn
                            :href="route('employees.index')"
                            variant="text"
                            style="color: rgb(54, 162, 235)"
                            >View employees</v-btn
                        >
                    </div>
                </v-sheet>
            </template>
        </AuthenticatedLayout>
    </v-app>
</template>
