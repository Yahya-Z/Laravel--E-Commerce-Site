<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const products = [
    { name: 'عطر جوي من ديور JOY Dior', price: 'SAR 130', image: '/icons/Joy-dior.jpg' },
    { name: 'عطر كوكو من شانيل COCO Chanel', price: 'SAR 249', image: '/icons/Coco-Chanel.jpg' },
    { name: 'عطر عود من ديور OUD ISPAHAN Dior', price: 'SAR 332', image: '/icons/oud-dior.jpg' },
    { name: 'عطر ان 5 من شانيل N 5 Chanel', price: 'SAR 450', image: '/icons/N5-Chanel.jpg' },
    { name: 'عطر 1957 من شانيل 1957 Chanel', price: 'SAR 599', image: '/icons/1957-Chanel.jpg' },
];

// Add to cart function
const addToCart = (product: { name: any; }) => {
    console.log(`Added ${product.name} to Cart`);
};
</script>

<template>
    <!-- Products Container -->
    <div class="relative bg-gray-100 rounded-4xl shadow-md overflow">
        <!-- Inner Products Grid -->
        <div
            class="products-track bg-gray-300 flex gap-6 px-10 pr-25 items-center text-left justify-start w-full h-99 rounded-2xl static transition-transform duration-300 ease-in-out"
        >
            <!-- Product Card Loop -->
            <div 
                v-for="(product, index) in products"
                :key="index" 
                class="bg-white w-80 h-60 cursor-pointer rounded-4xl flex flex-col shadow-lg hover:shadow-xl transition duration-200 ease-in-out items-center justify-center relative bottom-12 left-2"
            >
                <!-- Product Image -->
                <img 
                    v-if="product.image"
                    :src="product.image"
                    class="w-50 h-50 object-cover rounded-4xl mt-5"
                />
                <!-- Product Short Description -->
                <div class="text-md text-stone-950 mt-1 absolute -bottom-8">
                    {{ product.name }}
                </div>
                <!-- grid layout for the price and cart button -->
                <div class="flex items-center justify-between w-full px-4 mt-4">
                    <div class="text-xl font-bold absolute -bottom-17 text-stone-950">
                        {{ product.price }}
                    </div>
                    <img
                        src="/icons/trace.svg"
                        alt="Add to Cart"
                        @click="addToCart(product)"
                        class="w-15 h-10 absolute -bottom-18 right-0 cursor-pointer rounded-xl hover:bg-stone-200 hover:shadow-md transition duration-300 ease-in-out"
                    />
                </div>
            </div>
        </div>
    </div>
</template>