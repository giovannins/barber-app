<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav class="navbar bg-neutral text-neutral-content md:visible invisible">
        <div class="flex-1">
            <a class="btn btn-primary text-xl">daisyUI</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <Link :href="route('super_admin.dashboard')">Dashboard</Link>
                </li>
                <li>
                    <details>
                        <summary>Profile</summary>
                        <ul
                            class="bg-neutral text-neutral-content rounded-t-none p-2"
                        >
                            <li><a>Link 1</a></li>
                            <li><a>Link 2</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </nav>
</template>
