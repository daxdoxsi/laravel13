<script setup lang="ts">
import ProductContent from '@/components/ProductContent.vue';
import ProductShell from '@/components/ProductShell.vue';
import ProductSidebar from '@/components/ProductSidebar.vue';
import ProductSidebarHeader from '@/components/ProductSidebarHeader.vue';
import type { BreadcrumbItem } from '@/types';

type Props = {
    breadcrumbs?: BreadcrumbItem[];
};

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});
</script>

<template>
    <ProductShell variant="sidebar">
        <ProductSidebar />
        <ProductContent variant="sidebar" class="overflow-x-hidden">
            <ProductSidebarHeader :breadcrumbs="breadcrumbs" />
            <slot />
        </ProductContent>
    </ProductShell>
</template>
