<script setup>
import Button from "@/Components/Button.vue";
import LinesMagnifying from "@/Components/Icons/LinesMagnifying.vue";
import TrashBin from "@/Components/Icons/TrashBin.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    employees: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <div
        class="card card-bordered bg-base-100 w-full shadow-xl"
        id="barbershop-employees"
    >
        <div class="card-body">
            <h2 class="card-title">Employees</h2>
            <div>
                <table class="table table-zebra table-pin-rows table-xs  md:table-md">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="hidden md:table-cell">Phone</th>
                            <th class="hidden md:table-cell">Speciality</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="employee in employees" :key="employee.id">
                            <td>{{ employee.name }}</td>
                            <td class="hidden md:table-cell">{{ employee.phone }}</td>
                            <td class="hidden md:table-cell">{{ employee.speciality }}</td>
                            <td>
                                <Link :href="route('super_admin.employees.show', employee.id)">
                                    <Button color="primary">
                                        <LinesMagnifying color="oklch(var(--pc))"/>
                                        Details</Button>
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
