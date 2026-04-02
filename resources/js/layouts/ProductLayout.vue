<script setup lang="ts">
import ProductLayout from '@/layouts/product/ProductSidebarLayout.vue';
import type { BreadcrumbItem } from '@/types';

const { breadcrumbs = [] } = defineProps<{
    breadcrumbs?: BreadcrumbItem[];
}>();
</script>

<template>
    <ProductLayout :breadcrumbs="breadcrumbs">
        <slot />
    </ProductLayout>
</template>
