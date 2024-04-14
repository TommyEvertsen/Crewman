<template>
    <v-sheet class="mx-auto" width="300">
        <v-form
            @submit.prevent="
                form.post(route('employees.store'), {
                    onSuccess: () => form.reset(),
                })
            "
        >
            <v-text-field
                v-model="form.name"
                :rules="rules"
                label="First name"
            ></v-text-field>

            <v-btn class="mt-2" type="submit" block>Submit</v-btn>
        </v-form>
    </v-sheet>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    name: "",
});
</script>
