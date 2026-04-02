<script setup lang="ts">
import ProductContent from '@/components/ProductContent.vue';
import ProductHeader from '@/components/ProductHeader.vue';
import ProductShell from '@/components/ProductShell.vue';
import type { BreadcrumbItem } from '@/types';

type Props = {
    breadcrumbs?: BreadcrumbItem[];
};

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});
</script>

<template>
    <ProductShell variant="header">
        <ProductHeader :breadcrumbs="breadcrumbs" />
        <ProductContent variant="header">
            <slot />
        </ProductContent>
    </ProductShell>
</template>
