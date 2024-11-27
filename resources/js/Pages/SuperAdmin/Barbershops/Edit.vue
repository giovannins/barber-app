<script setup>
import Button from "@/Components/Button.vue";
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

                <div class="form-control">
                    <label for="name" class="label">
                        <span class="label-text">Nome:</span>
                    </label>
                    <input
                        type="text"
                        id="name"
                        v-model="form.name"
                        class="input input-bordered w-full"
                        placeholder="Digite o nome"
                    />
                    <span
                        v-if="form.errors.name"
                        class="text-error text-sm mt-1"
                    >
                        {{ form.errors.name }}
                    </span>
                </div>

                <div class="form-control">
                    <label for="phone" class="label">
                        <span class="label-text">Phone:</span>
                    </label>
                    <input
                        type="text"
                        id="phone"
                        v-model="form.phone"
                        class="input input-bordered w-full"
                        placeholder="Digite o Phone"
                    />
                    <span
                        v-if="form.errors.phone"
                        class="text-error text-sm mt-1"
                    >
                        {{ form.errors.phone }}
                    </span>
                </div>

                <div class="form-control">
                    <label for="email" class="label">
                        <span class="label-text">Email:</span>
                    </label>
                    <input
                        type="email"
                        id="email"
                        v-model="form.email"
                        class="input input-bordered w-full"
                        placeholder="Digite o Email"
                    />
                    <span
                        v-if="form.errors.email"
                        class="text-error text-sm mt-1"
                    >
                        {{ form.errors.email }}
                    </span>
                </div>

                <div class="form-control">
                    <label for="address" class="label">
                        <span class="label-text">Address:</span>
                    </label>
                    <input
                        type="text"
                        id="address"
                        v-model="form.address"
                        class="input input-bordered w-full"
                        placeholder="Digite o Address"
                    />
                    <span
                        v-if="form.errors.address"
                        class="text-error text-sm mt-1"
                    >
                        {{ form.errors.address }}
                    </span>
                </div>

                <div class="form-control">
                    <label for="employee_limit" class="label">
                        <span class="label-text">Employee Limit:</span>
                    </label>
                    <input
                        type="number"
                        id="employee_limit"
                        v-model="form.employee_limit"
                        class="input input-bordered w-full"
                        placeholder="Digite o Employee Limit"
                    />
                    <span
                        v-if="form.errors.employee_limit"
                        class="text-error text-sm mt-1"
                    >
                        {{ form.errors.employee_limit }}
                    </span>
                </div>

                <div class="form-control">
                    <label for="banner" class="label">
                        <span class="label-text">Banner:</span>
                    </label>
                    <input
                        type="text"
                        id="banner"
                        v-model="form.banner"
                        class="input input-bordered w-full"
                        placeholder="Digite o Banner"
                    />
                    <span
                        v-if="form.errors.banner"
                        class="text-error text-sm mt-1"
                    >
                        {{ form.errors.banner }}
                    </span>
                </div>

                <div class="form-control">
                    <label for="icon" class="label">
                        <span class="label-text">Icon:</span>
                    </label>
                    <input
                        type="text"
                        id="icon"
                        v-model="form.icon"
                        class="input input-bordered w-full"
                        placeholder="Digite o Icon"
                    />
                    <span
                        v-if="form.errors.icon"
                        class="text-error text-sm mt-1"
                    >
                        {{ form.errors.icon }}
                    </span>
                </div>

                <div class="form-control">
                    <label for="color" class="label">
                        <span class="label-text">Color:</span>
                    </label>
                    <input
                        :style="{backgroundColor: form.color}"
                        type="color"
                        id="color"
                        v-model="form.color"
                        class="input border-none w-full"
                        placeholder="Digite o Color"
                    />
                    <span
                        v-if="form.errors.color"
                        class="text-error text-sm mt-1"
                    >
                        {{ form.errors.color }}
                    </span>
                </div>

                <!-- Botão de Enviar -->
                <Button type="submit" class="w-full">
                    Atualizar
                </Button>
            </form>
        </div>
    </SuperAdminLayout>
</template>
