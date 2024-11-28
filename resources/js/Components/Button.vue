<script setup>
import { ref } from "vue";

defineProps({
    type: {
        type: String,
        default: "button",
    },
    color: {
        type: String,
        default: "",
    },
    size: {
        type: String,
        default: "md",
    },
    disabled: {
        type: Boolean,
        default: false,
    },
    active: {
        type: Boolean,
        default: false,
    },
});

const emit = defineEmits(["click"]);

const handleClick = (event) => {
    emit("click", event);
};

const btnColor = ref({
    '': '',
    primary: "btn-primary",
    secondary: "btn-secondary",
    neutral: "btn-neutral",
    accent: "btn-accent",
    ghost: "btn-ghost",
    link: "btn-link",
    error: "btn-error",
    info: "btn-info",
    success: "btn-success",
    warning: "btn-warning",
});

const btnSize = ref({
    xs: "btn-xs",
    sm: "btn-sm",
    md: "",
    lg: "btn-lg",
});
</script>

<template>
    <button
        :type="type"
        :class="`btn ${btnColor[color]} ${btnSize[size]} mx-1 ${
            active === true ? 'btn-active' : ''
        }`"
        @click="handleClick"
        :disabled="disabled"
    >
        <slot></slot>
    </button>
</template>
