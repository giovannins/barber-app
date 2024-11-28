<script setup>
import SuperAdminLayout from "@/Layouts/SuperAdminLayout.vue";
import Button from "@/Components/Button.vue";
import { Link } from "@inertiajs/vue3";
import BarbershopCard from "./Components/BarbershopCard.vue";
import EmployeesCard from "./Components/EmployeesCard.vue";
import ServicesCard from "./Components/ServicesCard.vue";
import { ref } from "vue";

defineProps({
    barbershop: {
        type: Object,
        required: true,
    },
    employees: {
        type: Array,
        required: true,
    },
    services: {
        type: Array,
        required: true,
    },
});

const selectedView = ref(0);

const changeView = (index) => {
    selectedView.value = index;
};
</script>

<template>
    <SuperAdminLayout>
        <div class="container mx-auto mt-8 px-2">
            <section class="grid grid-cols-1 md:grid-cols-6 gap-4">
                <div class="col-span-12 md:col-auto" id="nav">
                    <nav class="flex flex-col gap-4">
                        <Button
                            :active="selectedView === 0 ? true : false"
                            v-on:click="changeView(0)"
                            >Barbershop Info</Button
                        >
                        <Button
                            :active="selectedView === 1 ? true : false"
                            v-on:click="changeView(1)"
                            >Employees</Button
                        >
                        <Button
                            :active="selectedView === 2 ? true : false"
                            v-on:click="changeView(2)"
                            >Services</Button
                        >
                    </nav>
                </div>
                <div class="md:col-span-5 col-span-12">
                    <BarbershopCard
                        :barbershop="barbershop"
                        v-if="selectedView == 0"
                    />
                    <EmployeesCard
                        :employees="employees"
                        v-if="selectedView == 1"
                    />
                    <ServicesCard
                        :services="services"
                        v-if="selectedView == 2"
                    />
                </div>
            </section>
        </div>
    </SuperAdminLayout>
</template>
