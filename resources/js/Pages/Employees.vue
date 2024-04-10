<template>
    <p v-for="employee in employees">
        {{ employee.firstName }} {{ employee.lastName }} {{ employee.ZID }}
        {{ employee.employer }} {{ console.log(employee) }}
    </p>
</template>

<script setup>
defineProps(["employees"]);
</script>
