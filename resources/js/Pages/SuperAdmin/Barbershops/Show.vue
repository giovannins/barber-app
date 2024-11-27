<script setup>
import SuperAdminLayout from "@/Layouts/SuperAdminLayout.vue";
import Button from "@/Components/Button.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    barbershop: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <SuperAdminLayout>
        <div class="container mx-auto mt-8">
            <section class="grid grid-cols-2 gap-4 ">
                <div class="card bg-base-100 w-96 shadow-xl" id="barbershop-info">
                    <figure>
                        <img :src="barbershop.banner" :alt="barbershop.name" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ barbershop.name }}</h2>
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
                            {{ barbershop.employee_limit }}
                        </p>
                        <p>Max employees: {{ barbershop.employee_limit }}</p>

                        <div class="card-actions justify-end">
                            <Link
                                :href="
                                    route(
                                        'super_admin.barbershops.edit',
                                        barbershop.id
                                    )
                                "
                                ><Button color="warning">Edit</Button></Link
                            >
                        </div>
                    </div>
                </div>
                <div class="w-96" id="barbershop-employees">
                    <h2 class="my-4 text-lg font-bold">Employees</h2>
                    <table class="table table-zebra">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>John Doe</td>
                                <td>John Doe</td>
                                <td>John Doe</td>
                                <td>John Doe</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>a</div>
                <div>a</div>
            </section>
        </div>
    </SuperAdminLayout>
</template>
