<script setup>
import Button from "@/Components/Button.vue";
import LinesMagnifying from "@/Components/Icons/LinesMagnifying.vue";
import Pen from "@/Components/Icons/Pen.vue";
import SuperAdminLayout from "@/Layouts/SuperAdminLayout.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    barbershops: {
        type: Array,
        required: true,
    },
});

console.log(route());
</script>

<template>
    <SuperAdminLayout>
        <table class="table table-zebra">
            <thead>
                <tr class="text-lg">
                    <th></th>
                    <th>Name</th>
                    <th>Addres</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="barbershop in barbershops" :key="barbershop.id">
                    <td>
                        <img
                            :src="barbershop.icon"
                            alt=""
                            width="32"
                            height="32"
                        />
                    </td>
                    <td>{{ barbershop.name }}</td>
                    <td>{{ barbershop.address }}</td>
                    <td>{{ barbershop.phone }}</td>
                    <td>{{ barbershop.email }}</td>
                    <td>
                        <Link
                            :href="
                                route(
                                    'super_admin.barbershops.show',
                                    barbershop.id
                                )
                            "
                        >
                            <Button color="primary">
                                <LinesMagnifying color="oklch(var(--pc))"/>
                                Details</Button>
                        </Link>
                        <Link
                            :href="
                                route(
                                    'super_admin.barbershops.edit',
                                    barbershop.id
                                )
                            "
                        >
                            <Button color="warning">
                                <Pen/>
                                Edit</Button>
                        </Link>
                    </td>
                </tr>
            </tbody>
        </table>
    </SuperAdminLayout>
</template>
