<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import ProductsBar from '../components/ProductsBar.vue';

</script>

<template>

    <div class="relative w-full bg-white my-10">
        <!-- Title -->
        <h1 class="text-4xl text-stone-950 font-black ml-3 mb-6">NEW ARRIVALS</h1>
        <!-- The Products Component -->
        <ProductsBar />
    </div>

    <!-- Products Lists -->
    <div class="relative w-full bg-white my-10">
        <!-- Title -->
        <h1 class="text-4xl text-stone-950 font-black ml-3 mb-6">TOP SELLING</h1>
        <!-- The Products Component -->
        <ProductsBar />
    </div>

    <!-- Products Lists -->
    <div class="relative w-full bg-white my-10">
        <!-- Title -->
        <h1 class="text-4xl text-stone-950 font-black ml-3 mb-6">Make-ups</h1>
        <!-- The Products Component -->
        <ProductsBar />
    </div>

    <!-- Products Lists -->
    <div class="relative w-full bg-white my-10">
        <!-- Title -->
        <h1 class="text-4xl text-stone-950 font-black ml-3 mb-6">Clothes</h1>
        <!-- The Products Component -->
        <ProductsBar />
    </div>

    <!-- Products Lists -->
    <div class="relative w-full bg-white my-10">
        <!-- Title -->
        <h1 class="text-4xl text-stone-950 font-black ml-3 mb-6">Perfumes</h1>
        <!-- The Products Component -->
        <ProductsBar />
    </div>

</template>