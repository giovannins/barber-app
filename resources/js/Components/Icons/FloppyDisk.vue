<script setup>
defineProps({
    size: {
        type: String,
        default: "16",
    },
    color: {
        type: String,
        default: "#000000",
    },
});
</script>

<template>
    <svg
        :width="size"
        :height="size"
        viewBox="0 0 16 16"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g
            id="SVGRepo_tracerCarrier"
            stroke-linecap="round"
            stroke-linejoin="round"
        ></g>
        <g id="SVGRepo_iconCarrier">
            <path
                d="M11 1H1V15L4 15L4 9L12 9L12 15H15V5L11 1Z"
                :fill="color"
            ></path>
            <path d="M10 15V11H6L6 15H10Z" :fill="color"></path>
        </g>
    </svg>
</template>
