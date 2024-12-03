<script setup>
import Button from "@/Components/Button.vue";
import SuperAdminLayout from "@/Layouts/SuperAdminLayout.vue";
import { Link } from "@inertiajs/vue3";
import { ArcElement, Chart, Colors, Legend, Tooltip } from "chart.js";
import { Doughnut } from "vue-chartjs";

const props = defineProps({
    totalEmployees: {
        type: Number,
        default: 0,
        required: true,
    },
    totalBarbershops: {
        type: Number,
        default: 0,
        required: true,
    },
});

Chart.register(ArcElement, Tooltip, Colors, Legend);

const chartData = {
    labels: ["Barbershops", "Employees"],
    datasets: [{ data: [props.totalBarbershops, props.totalEmployees] }],
};
const chartOptions = {
    responsive: true,
    maintainAspectRatio: false,
};
</script>

<template>
    <SuperAdminLayout>
        <section class="container mx-auto">
            <h2 class="text-4xl mt-4">Super Admin Dashboard</h2>

            <section
                class="flex flex-col-reverse md:flex md:flex-row mt-16 gap-4"
            >
                <Doughnut
                    class="max-w-2xl max-h-96 mt-16 md:mt-0 border rounded-lg shadow p-4 "
                    id="generalChart"
                    :data="chartData"
                    :options="chartOptions"
                />

                <div class="md:flex md:flex-col w-1/3 gap-4 p-4 border shadow mx-auto">
                    <Link :href="route('super_admin.barbershops.index')" class="flex flex-col">
                        <Button size="lg" color="primary">Barbershops</Button>
                    </Link>
                    <Link :href="route('super_admin.employees.index')" class="flex flex-col">
                        <Button size="lg" color="primary">Employees</Button>
                    </Link>
                    <Link class="flex flex-col">
                        <Button size="lg" color="primary">Services</Button>
                    </Link>
                    <Link class="flex flex-col">
                        <Button size="lg" color="primary">Clients</Button>
                    </Link>
                    <Link class="flex flex-col">
                        <Button size="lg" color="primary">Appointments</Button>
                    </Link>
                </div>
            </section>
        </section>
    </SuperAdminLayout>
</template>
