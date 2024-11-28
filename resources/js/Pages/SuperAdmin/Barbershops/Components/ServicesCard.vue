<script setup>
import Button from "@/Components/Button.vue";
import TrashBin from "@/Components/Icons/TrashBin.vue";
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
                <table class="table table-zebra table-pin-rows">
                    <thead>
                        <tr>
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
                                    :alt="service.name"
                                    width="128"
                                />
                            </td>
                            <td>{{ service.name }}</td>
                            <td class="w-2/5">
                                {{ service.description }}
                            </td>
                            <td>R$ {{ service.price }}</td>
                            <td>{{ service.time }} minutes</td>
                            <td>
                                <Link>
                                    <Button color="warning">Edit</Button>
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
