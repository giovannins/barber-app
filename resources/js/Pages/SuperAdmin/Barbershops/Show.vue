<script setup>
import SuperAdminLayout from "@/Layouts/SuperAdminLayout.vue";
import Button from "@/Components/Button.vue";
import { Link } from "@inertiajs/vue3";

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
</script>

<template>
    <SuperAdminLayout>
        <div class="container mx-auto mt-8">
            <section class="flex flex-col gap-4 md:gap-8">
                <div
                    class="card card-bordered bg-base-100 w-full shadow-xl"
                    id="barbershop-info"
                >
                    <figure>
                        <img :src="barbershop.banner" :alt="barbershop.name" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">
                            <img
                                :src="barbershop.icon"
                                :alt="barbershop.name"
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
                <div
                    class="card card-bordered bg-base-100 w-full shadow-xl"
                    id="barbershop-employees"
                >
                    <div class="card-body">
                        <h2 class="card-title">Employees</h2>
                        <div class="h-96 overflow-y-auto">
                            <table class="table table-zebra table-pin-rows">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Speciality</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="employee in employees"
                                        :key="employee.id"
                                    >
                                        <td>{{ employee.name }}</td>
                                        <td>{{ employee.phone }}</td>
                                        <td>{{ employee.speciality }}</td>
                                        <td>
                                            <Link>
                                                <Button>View</Button>
                                            </Link>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div
                    class="card card-bordered bg-base-100 w-full shadow-xl"
                    id="barbershop-services"
                >
                    <div class="card-body">
                        <h2 class="card-title">Services</h2>
                        <div class="h-96 overflow-y-auto">
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
                                    <tr
                                        v-for="service in services"
                                        :key="service.id"
                                    >
                                        <td><img :src="service.photo" :alt="service.name" width="128"></td>
                                        <td>{{ service.name }}</td>
                                        <td class="w-2/5">{{ service.description }}</td>
                                        <td>R$ {{ service.price }}</td>
                                        <td>{{ service.time }}</td>
                                        <td>
                                            <Link>
                                                <Button>View</Button>
                                            </Link>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card card-bordered bg-base-100 w-full shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">lorem</h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Inventore nam odit hic quas suscipit ipsam architecto
                        autem qui, itaque officia aperiam facere eveniet
                        adipisci corporis aspernatur, amet exercitationem
                        voluptatum nemo.
                    </div>
                </div>
            </section>
        </div>
    </SuperAdminLayout>
</template>
