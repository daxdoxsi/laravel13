<script setup lang="ts">
defineProps({ products: Array });
</script>

<template>
    <h1>Products</h1>
    <ul>
        <li v-for="product in products" :key="product.id">
            <h3>{{ product.name }}</h3>
            <p>{{ product.description }}</p>
            <strong>{{ product.price }}</strong>
        </li>
    </ul>
</template>
