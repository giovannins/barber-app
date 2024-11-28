<script setup>
import Button from "@/Components/Button.vue";
import Pen from "@/Components/Icons/Pen.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    services: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <div
        class="card card-bordered bg-base-100 shadow-xl"
        id="barbershop-services"
    >
        <div class="card-body">
            <h2 class="card-title">Services</h2>
            <div>
                <table class="table table-zebra table-pin-rows table-xs md:table-md">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="hidden md:table-cell">Description</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="service in services" :key="service.id">
                            <td>{{ service.name }}</td>
                            <td class="hidden md:table-cell md:w-1/2">
                                {{ service.description }}
                            </td>
                            <td>R$ {{ service.price }}</td>
                            <td>
                                <Link>
                                    <Button color="warning">
                                        <Pen />
                                        Edit</Button>
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
