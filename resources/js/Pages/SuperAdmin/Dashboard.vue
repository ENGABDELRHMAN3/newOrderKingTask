<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">SuperAdmin Dashboard</h2>
        </template>

        <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class="text-2xl font-semibold mb-4">Customers and Domains</h2>
                <div class="overflow-x-auto">
                    <div class="mb-4">
    
</div>
        <table class="min-w-full border border-collapse">
            
            <thead>
                
                <tr>
                    <th class="px-6 py-3 bg-gray-200 text-left border-b">Customer Name</th>
                    <th class="px-6 py-3 bg-gray-200 text-left border-b">Domain</th>
                    <th class="px-6 py-3 bg-gray-200 text-left border-b">API Key</th>
                    <th class="px-6 py-3 bg-gray-200 text-left border-b">Activation Status</th>
                    <th class="px-6 py-3 bg-gray-200 text-left border-b">View Users</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="tenant in tenants" :key="tenant.id">
                    <td class="px-6 py-4 whitespace-nowrap border-b">{{ tenant.name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b text-blue-600">
                        <a :href="'http://' + tenant.domain">{{ tenant.domain }}</a>
                    </td>                  
                    <td class="px-6 py-4 whitespace-nowrap border-b">{{ tenant.ApiKey }}</td>
                    <td class="px-6 py-4 whitespace-nowrap border-b">
                        <span v-if="tenant.isActive" class="text-green-600">Active</span>
                        <span v-else class="text-red-600">Inactive</span>
                    </td> 
                    <td class="px-6 py-4 whitespace-nowrap border-b text-blue-600">
                        <a :href="'/SuperAdmin/tenant/'+ tenant.ApiKey">View Users</a>

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
        tenants: Array,
    },
   
};
</script>
