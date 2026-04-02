<template>
    <h1>New Product</h1>
    <Form
        v-bind="ProductController.add.form()"
        class="space-y-6"
        v-slot="{ errors, processing, recentlySuccessful }"
    >
    </Form>
</template>
