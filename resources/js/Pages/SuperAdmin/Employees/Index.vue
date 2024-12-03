<script setup>
import Button from "@/Components/Button.vue";
import LinesMagnifying from "@/Components/Icons/LinesMagnifying.vue";
import Pen from "@/Components/Icons/Pen.vue";
import SuperAdminLayout from "@/Layouts/SuperAdminLayout.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    employees: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <SuperAdminLayout>
            <table class="table table-zebra">
                <thead>
                    <tr class="text-lg">
                        <th>Name</th>
                        <th>Speciality</th>
                        <th>Hire date</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="employee in employees" :key="employee.id">
                        <td>{{ employee.name }}</td>
                        <td>{{ employee.speciality }}</td>
                        <td>{{ employee.hire_date }}</td>
                        <td>{{ employee.phone }}</td>
                        <td>
                            <Link
                                :href="
                                    route(
                                        'super_admin.barbershops.show',
                                        employee.barbershop_id
                                    )
                                "
                            >
                                <Button color="primary">
                                    <Pen color="oklch(var(--pc))" />
                                    Barbershop</Button
                                >
                            </Link>
                            <Link
                                :href="
                                    route(
                                        'super_admin.employees.show',
                                        employee.id
                                    )
                                "
                            >
                                <Button color="primary">
                                    <LinesMagnifying color="oklch(var(--pc))" />
                                    Details</Button
                                >
                            </Link>
                            <Link
                                :href="
                                    route(
                                        'super_admin.employees.edit',
                                        employee.id
                                    )
                                "
                            >
                                <Button color="warning">
                                    <Pen />
                                    Edit</Button
                                >
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>
    </SuperAdminLayout>
</template>
