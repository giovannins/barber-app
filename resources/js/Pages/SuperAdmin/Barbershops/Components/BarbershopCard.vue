<script setup>
import Button from '@/Components/Button.vue';
import Pen from '@/Components/Icons/Pen.vue';
import TrashBin from '@/Components/Icons/TrashBin.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    barbershop: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <div
        class="card card-bordered bg-base-100 shadow-xl"
        id="barbershop-info"
    >
        <figure>
            <img :src="barbershop.banner" :alt="`${barbershop.name} banner`" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">
                <img
                    :src="barbershop.icon"
                    :alt="`${barbershop.name} icon`"
                    width="48"
                    height="48"
                />
                {{ barbershop.name }}
            </h2>
            <div
                class="p-1"
                :style="{
                    backgroundColor: barbershop.color,
                }"
            ></div>
            <p>Phone: {{ barbershop.phone }}</p>
            <p>Email: {{ barbershop.email }}</p>
            <p>Address: {{ barbershop.address }}</p>
            <p>
                Registered employees:
                {{ barbershop.employees.length }}
            </p>
            <p>Max employees: {{ barbershop.employee_limit }}</p>

            <div class="card-actions justify-end">
                <Link
                    :href="route('super_admin.barbershops.edit', barbershop.id)"
                    ><Button color="warning">
                        <Pen />
                        Edit</Button></Link
                >
                <Link
                    :href="route('super_admin.barbershops.edit', barbershop.id)"
                    ><Button color="error">
                        <TrashBin />
                        Delete</Button
                    ></Link
                >
            </div>
        </div>
    </div>
</template>
