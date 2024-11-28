<script setup>
import SuperAdminLayout from "@/Layouts/SuperAdminLayout.vue";
import Button from "@/Components/Button.vue";
import { Link } from "@inertiajs/vue3";
import TrashBin from "@/Components/Icons/TrashBin.vue";
import Pen from "@/Components/Icons/Pen.vue";
import BackArrow from "@/Components/Icons/BackArrow.vue";

defineProps({
    employee: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <SuperAdminLayout>
        <div class="container mx-auto mt-8 px-2 md:px-4">
            <section class="flex flex-col gap-4 md:gap-8">
                <div
                    class="card card-bordered bg-base-100 w-full shadow-xl"
                    id="employee-info"
                >
                    <div class="card-body">
                        <h2 class="card-title">
                            {{ employee.name }}
                        </h2>
                        <p>Phone: {{ employee.phone }}</p>
                        <p>Speciality: {{ employee.speciality }}</p>
                        <p>Hire date: {{ employee.hire_date }}</p>


                        <div class="card-actions justify-end">
                            <Link class="tooltip" data-tip="Back to barbershop"
                                :href="
                                    route(
                                        'super_admin.barbershops.show',
                                        employee.barbershop_id
                                    )
                                "
                                ><Button color="warning">
                                    <BackArrow />
                                    Back</Button></Link
                            >
                            <Link
                                :href="
                                    route(
                                        'super_admin.employees.edit',
                                        employee.id
                                    )
                                "
                                ><Button color="warning">
                                    <Pen />
                                    Edit</Button></Link
                            >
                            <Link
                                :href="
                                    route(
                                        'super_admin.employees.delete',
                                        employee.id
                                    )
                                "
                                ><Button color="error">
                                    <TrashBin />
                                    delete</Button
                                ></Link
                            >
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </SuperAdminLayout>
</template>
