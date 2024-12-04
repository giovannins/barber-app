<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav class="navbar bg-neutral text-neutral-content md:visible invisible">
        <div class="flex-1">
            <a class="btn btn-primary text-xl"></a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <Link :href="route('super_admin.dashboard')"
                        >Dashboard</Link
                    >
                </li>
                <li>
                    <details>
                        <summary>Profile</summary>
                        <ul
                            class="bg-neutral text-neutral-content rounded-t-none z-[1] p-2"
                        >
                            <li>
                                <Link :href="route('profile.edit')"
                                    >Edit Profile</Link
                                >
                            </li>
                            <li>
                                <Link
                                    :href="route('logout')"
                                    method="post"
                                    as="button"
                                    >Log Out</Link
                                >
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <slot />
    </main>
</template>
