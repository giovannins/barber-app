<script setup>
const props = defineProps({
    id: {
        type: String,
        required: true,
    },
    label: {
        type: String,
        required: true,
    },
    placeholder: {
        type: String,
        default: "Type here",
    },
    type: {
        type: String,
        default: "text",
    },
    icon: {
        type: String,
        default: "",
    },
    modelValue: {
        type: String,
        default: "",
    },
    error: {
        type: String,
        default: "",
    },
    disabled: {
        type: Boolean,
        default: false,
    },
});

const emit = defineEmits(["update:modelValue"]);

const updateValue = (event) => {
    emit("update:modelValue", event.target.value);
};
</script>

<template>
    <label :for="id" class="form-controll w-full max-w-xs">
        <div class="label">
            <span class="label-text">{{ label }}</span>
        </div>
        <input
            :id="id"
            :type="type"
            :placeholder="placeholder"
            :value="modelValue"
            @input="updateValue"
            :disabled="disabled"
            class="input input-bordered w-full max-w-xs"
        />
        <div class="label">
            <span class="label-text-alt text-error">{{ error }}</span>
        </div>
    </label>
</template>
