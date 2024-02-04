<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>
<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin Dashboard</h2>
        </template>

        <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class="text-2xl font-semibold mb-4">Users</h2>
                <div class="overflow-x-auto">
        <table class="min-w-full border border-collapse">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-200 text-left border-b">User Name</th>
                    <th class="px-6 py-3 bg-gray-200 text-left border-b">Email</th>
                    <th class="px-6 py-3 bg-gray-200 text-left border-b">API Key</th>
                    <th class="px-6 py-3 bg-gray-200 text-left border-b">Type</th>
                    <!-- <th class="px-6 py-3 bg-gray-200 text-left border-b"> Users</th> -->
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <td class="px-6 py-4 whitespace-nowrap border-b">{{ user.name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b ">
                        {{ user.email }}
                    </td>                  
                    <td class="px-6 py-4 whitespace-nowrap border-b">{{ user.ApiKey }}</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b">
                        <span v-if="user.role == 2" class="text-green-600">Admin</span>
                        <span v-else class="text-red-600">User</span>
                    </td> 
                   

                </tr>
            </tbody>
        </table>
        
    </div>

    
            </div>
        </div>
    </div>
</div>

    </AuthenticatedLayout>
</template>
<script>
export default {
    props: {
        users: Array,
    },
};
</script>