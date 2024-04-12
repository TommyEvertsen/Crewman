<template>
    <v-sheet class="mx-auto" width="300">
        <v-form @submit.prevent>
            <v-text-field
                v-model="firstName"
                :rules="rules"
                label="First name"
            ></v-text-field>
            <v-text-field
                v-model="lastName"
                :rules="rules"
                label="Last name"
            ></v-text-field>
            <v-btn class="mt-2" type="submit" block>Submit</v-btn>
        </v-form>
    </v-sheet>
</template>

<script setup>
import { ref } from "vue";

const firstName = ref("");

const rules = [
    (value) => {
        if (value) return true;
        return "You must enter a first name.";
    },
];
</script>
