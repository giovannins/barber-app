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
        <div class="container mx-auto mt-8 px-2 md:px-4">
            <section
                class="grid grid-cols-1 md:grid-cols-6 gap-4"
            >
                <div class="flex flex-row flex-nowrap" id="nav">
                    <nav class="flex flex-col gap-4 md:gap-8">
                        <Button color="ghost" v-on:click="changeView(0)">Barbershop Info</Button>
                        <Button color="ghost" v-on:click="changeView(1)">Employees</Button>
                        <Button color="ghost" v-on:click="changeView(2)">Services</Button>
                    </nav>
                    <div class="divider lg:divider-horizontal"></div>
                </div>
                <div class="col-span-4">
                    <BarbershopCard :barbershop="barbershop" v-if="selectedView == 0" />
                    <EmployeesCard :employees="employees" v-if="selectedView == 1"/>
                    <ServicesCard :services="services" v-if="selectedView == 2"/>
                </div>
            </section>
        </div>
    </SuperAdminLayout>
</template>
