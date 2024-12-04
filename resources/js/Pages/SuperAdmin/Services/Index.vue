<script setup>
import Button from "@/Components/Button.vue";
import LinesMagnifying from "@/Components/Icons/LinesMagnifying.vue";
import Pen from "@/Components/Icons/Pen.vue";
import SuperAdminLayout from "@/Layouts/SuperAdminLayout.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    services: {
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
                    <th></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="service in services" :key="service.id">
                    <td>
                        <img
                            :src="service.photo"
                            alt=""
                            width="128"
                            height="32"
                        />
                    </td>
                    <td>{{ service.name }}</td>
                    <td class="w-1/3">{{ service.description }}</td>
                    <td>R$ {{ service.price }}</td>
                    <td>{{ service.time }} Minutes</td>
                    <td>
                        <Link
                            :href="
                                route(
                                    'super_admin.barbershops.show',
                                    service.barbershop_id
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
                                route('super_admin.services.show', service.id)
                            "
                        >
                            <Button color="primary">
                                <LinesMagnifying color="oklch(var(--pc))" />
                                Details</Button
                            >
                        </Link>
                        <Link
                            :href="
                                route('super_admin.services.edit', service.id)
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
