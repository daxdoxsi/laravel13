<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '@/components/PlaceholderPattern.vue';
import { products } from '@/routes';

defineOptions({
    layout: {
        breadcrumbs: [
            {
                title: 'Product List',
                href: products(),
            },
        ],
    },
});
defineProps({ prods: Array });
</script>

<template>
    <h1>Products</h1>
    <ul>
        <li v-for="product in prods" :key="product.id">
            <h3>{{ product.name }}</h3>
            <p>{{ product.description }}</p>
            <strong>{{ product.price }}</strong>
        </li>
    </ul>
</template>
