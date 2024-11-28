<script setup>
import Button from "@/Components/Button.vue";
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
        class="card card-bordered bg-base-100 shadow-xl"
        id="barbershop-employees"
    >
        <div class="card-body">
            <h2 class="card-title">Employees</h2>
            <div>
                <table class="table table-zebra table-pin-rows table-xs">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Speciality</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="employee in employees" :key="employee.id">
                            <td>{{ employee.name }}</td>
                            <td>{{ employee.phone }}</td>
                            <td>{{ employee.speciality }}</td>
                            <td>
                                <Link>
                                    <Button>Details</Button>
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
