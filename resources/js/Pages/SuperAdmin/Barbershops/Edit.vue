<script setup>
import Button from "@/Components/Button.vue";
import FloppyDisk from "@/Components/Icons/FloppyDisk.vue";
import Input from "@/Components/Input.vue";
import SuperAdminLayout from "@/Layouts/SuperAdminLayout.vue";
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    barbershop: {
        type: Object,
        required: true,
    },
});

const submitForm = () => {
    form.put(route('super_admin.barbershops.update', props.barbershop.id), {
        onSuccess: () => {form.reset()},
    });
};

const form = useForm({
    name: props.barbershop.name,
    phone: props.barbershop.phone,
    email: props.barbershop.email,
    address: props.barbershop.address,
    employee_limit: props.barbershop.employee_limit,
    banner: props.barbershop.banner,
    icon: props.barbershop.icon,
    color: props.barbershop.color,
});
</script>

<template>
    <SuperAdminLayout>
        <div
            class="p-6 mt-8 mb-20 max-w-lg mx-auto bg-base-200 rounded-xl shadow-md space-y-4"
        >
            <h2 class="text-xl font-bold text-center">Edit: {{ barbershop.name }}</h2>
            <form @submit.prevent="submitForm" class="space-y-4">

                <Input
                    placeholder="Barbershop's name"
                    id="name"
                    label="Name"
                    v-model="form.name"
                />

                <Input
                    placeholder="Enter Phone"
                    id="phone"
                    label="Phone"
                    v-model="form.phone"
                    type="text"
                    :error="form.errors.phone"
                />

                <Input
                    placeholder="Enter Email"
                    id="email"
                    label="Email"
                    v-model="form.email"
                    type="email"
                    :error="form.errors.email"
                />

                <Input
                    placeholder="Enter Address"
                    id="address"
                    label="Address"
                    v-model="form.address"
                    type="text"
                    :error="form.errors.address"
                />

                <Input
                    placeholder="Enter Employee Limit"
                    id="employee_limit"
                    label="Employee Limit"
                    v-model="form.employee_limit"
                    type="number"
                    :error="form.errors.employee_limit"
                />

                <Input
                    placeholder="Enter Banner"
                    id="banner"
                    label="Banner"
                    v-model="form.banner"
                    type="text"
                    :error="form.errors.banner"
                />

                <Input
                    placeholder="Enter Icon"
                    id="icon"
                    label="Icon"
                    v-model="form.icon"
                    type="text"
                    :error="form.errors.icon"
                />

                <Input
                    placeholder="Enter Color"
                    id="color"
                    label="Color"
                    v-model="form.color"
                    type="color"
                    :error="form.errors.color"
                    :style="{backgroundColor: form.color}"
                />

                <!-- Botão de Enviar -->
                <Button color="warning" type="submit" class="w-full">
                    <FloppyDisk />
                    Update
                </Button>
            </form>
        </div>
    </SuperAdminLayout>
</template>
