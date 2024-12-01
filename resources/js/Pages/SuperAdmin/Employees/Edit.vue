<script setup>
import Button from "@/Components/Button.vue";
import FloppyDisk from "@/Components/Icons/FloppyDisk.vue";
import Input from "@/Components/Input.vue";
import SuperAdminLayout from "@/Layouts/SuperAdminLayout.vue";
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    employee: {
        type: Object,
        required: true,
    },
});

const submitForm = () => {
    form.put(route("super_admin.employees.update", props.employee.id), {
        onSuccess: () => {
            form.reset();
        },
    });
};

const form = useForm({
    barbershopId: props.employee.barbershop_id,
    name: props.employee.name,
    phone: props.employee.phone,
    speciality: props.employee.speciality,
    hire_date: props.employee.hire_date,
    email: props.employee.email,
    password: "",
    password_confirmation: "",
});

const viewForm = () => {
    console.log(form);
};
</script>

<template>
    <SuperAdminLayout>
        <div
            class="p-6 mt-8 mb-20 max-w-xl mx-auto rounded shadow-md bg-gray-100 space-y-4"
        >
            <h2 class="text-xl font-bold text-center">
                Edit: {{ employee.name }}
            </h2>

            <form @submit.prevent="submitForm" class="space-y-4">
                <input
                    type="hidden"
                    id="barbershopId"
                    v-model="form.barbershopId"
                />

                <div id="form">
                    <Input
                        placeholder="Employee's name"
                        id="name"
                        label="Name"
                        v-model="form.name"
                        :error="form.errors.name"
                    />
                    <Input
                        placeholder="Employee's phone number"
                        id="phone"
                        label="Phone"
                        v-model="form.phone"
                        :error="form.errors.phone"
                        v-maska="'(##) #####-####'"
                    />
                    <Input
                        placeholder="Employee's speciality"
                        id="speciality"
                        label="Speciality"
                        v-model="form.speciality"
                        :error="form.errors.speciality"
                    />
                    <Input
                        placeholder="When the employee was hired"
                        id="hire_date"
                        label="Hire Date"
                        type="date"
                        v-model="form.hire_date"
                        :error="form.errors.hire_date"
                    />
                    <Input
                        placeholder="Employee's email"
                        id="email"
                        label="Email"
                        v-model="form.email"
                        :error="form.errors.email"
                    />
                    <Input
                        placeholder="Choose a password"
                        id="password"
                        label="Password"
                        type="password"
                        v-model="form.password"
                        :error="form.errors.password"
                    />
                    <Input
                        placeholder="Confirm the password"
                        id="password_confirmation"
                        label="Password Confirmation"
                        type="password"
                        v-model="form.password_confirmation"
                        :error="form.errors.password_confirmation"
                    />
                </div>

                <div>
                    <Button color="warning" type="submit" class="w-full">
                        <FloppyDisk />
                        Save</Button>
                </div>
            </form>

        </div>
    </SuperAdminLayout>
</template>
