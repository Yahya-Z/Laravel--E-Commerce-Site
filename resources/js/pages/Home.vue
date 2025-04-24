<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import CategoryGrid from '../components/CategoryGrid.vue';
import ProductList from '../components/ProductList.vue';

const isSidebarOpen = ref(false);
const toggleSidebar = () => {
    isSidebarOpen.value = !isSidebarOpen.value;
};
const closeSidebar = () => {
    isSidebarOpen.value = false;
};
const openSidebar = () => {
    isSidebarOpen.value = true;
};

</script>

<template>
<div 
    class="transition-all duration-300 bg-gray-300 w-screen min-h-screen md:w-auto h-auto flex items-center justify-center p-3 md:p-5 m-5 mt-15 rounded-4xl" 
    id="main-tw-container"
>
    <nav 
    class="fixed top-15 left-3 h-[87%] bg-white p-5 ml-5 mt-5 shadow-lg z-50 items-center justify-center transition-all duration-300 rounded-4xl"
    :class="{'w-20 rounded-tr-[90px]': !isSidebarOpen, 'w-45': isSidebarOpen}"
    >
        <ul class="mt-60 space-y-4 transition-all duration-300 " :class="{'w-10': !isSidebarOpen, 'w-28': isSidebarOpen}">
            <div style="position: absolute; top: 0;">
                <div 
                class=" mt-7 rounded-full items-center justify-center transition-all duration-300" >
                    <li class="flex items-center">
                        <a href="#" class="items-center justify-center flex">
                            <img src="/icons/account.svg" alt="Home Icon" class="transition-all duration-300 items-center justify-center" :class="{'w-20 h-20 scale-100 ml-7': isSidebarOpen, 'w-9 h-9 mr-22': !isSidebarOpen}">
                        </a>
                    </li>
                </div>
                <h1 class="text-2xl text-stone-950 font-bold mt-3" :class="{'opacity-100 ml-2 transition-all duration-300': isSidebarOpen, 'opacity-0 ml-2 transition-all scale-0 duration-100': !isSidebarOpen}">
                    Yahya Ali
                </h1>
                <p class="text-[12px] text-gray-500 font-bold mt-1 mb-4" :class="{'opacity-100 ml-2 transition-all duration-300': isSidebarOpen, 'opacity-0 ml-2 transition-all scale-0 duration-100': !isSidebarOpen}">
                    YahyaAli@gmail.com
                </p>
                <hr class="mb-4 border-gray-300 items-center transition-all duration-300" :class="{'w-10 -mt-9': !isSidebarOpen, 'w-28 ml-3 mt-0': isSidebarOpen}">
            </div>

            
            <a href="#" class="items-center">
            <div 
                class="hover:bg-gray-100 pr-4 pl-4 my-3 hover:shadow-sm rounded-lg transition-all duration-300" 
                :class="{'w-35': isSidebarOpen, 'w-10': !isSidebarOpen}"
            >
                <li class="flex items-center py-3">
                        <img src="/icons/home.svg" alt="Home Icon" class="transition-all duration-300" :class="{'w-7 h-7 scale-100': isSidebarOpen, 'w-7 h-7 scale-300': !isSidebarOpen}">
                        <span 
                            class="text-gray-800 font-bold ml-2 transition-opacity duration-300"
                            :class="{'opacity-0 scale-1': !isSidebarOpen, 'opacity-100': isSidebarOpen}"
                        >
                            Home
                        </span>
                    </li>
                </div>
            </a>
            <a href="#" class="items-center">
            <div 
                class="hover:bg-gray-100 pr-4 pl-4 my-3 hover:shadow-sm rounded-lg transition-all duration-300 " 
                :class="{'w-35': isSidebarOpen, 'w-10': !isSidebarOpen}"
            >
                <li class="flex items-center py-3">
                        <img src="/icons/category.svg" alt="Category Icon" class="transition-all duration-300" :class="{'w-7 h-7 scale-100': isSidebarOpen, 'w-7 h-7 scale-300': !isSidebarOpen}">
                        <span 
                        class="text-gray-800 font-bold text-sm ml-2 transition-opacity duration-300"
                        :class="{'opacity-0 scale-1': !isSidebarOpen, 'opacity-100': isSidebarOpen}"
                        >
                            Category
                        </span>
                    </li>
                </div>
            </a>
            <a href="#" class="items-center">
            <div 
                class="hover:bg-gray-100 pr-4 pl-4 my-3 hover:shadow-sm rounded-lg transition-all duration-300" 
                :class="{'w-35': isSidebarOpen, 'w-10': !isSidebarOpen}"
            >
                <li class="flex items-center py-3">
                        <img src="/icons/cart.svg" alt="Cart Icon" class="transition-all duration-300" :class="{'w-7 h-7 scale-100': isSidebarOpen, 'w-7 h-7 scale-300': !isSidebarOpen}">
                        <span 
                            class="text-gray-800 font-bold ml-2 transition-opacity duration-300"
                            :class="{'opacity-0 scale-1': !isSidebarOpen, 'opacity-100': isSidebarOpen}"
                        >
                            Cart
                        </span>
                    </li>
                </div>
            </a>
            <a href="#" class="items-center">
            <div 
                class="hover:bg-gray-100 pr-4 pl-4 my-3 hover:shadow-sm rounded-lg transition-all duration-300 " 
                :class="{'w-35': isSidebarOpen, 'w-10': !isSidebarOpen}"
            >
                <li class="flex items-center py-3">
                        <img src="/icons/billing.svg" alt="Billing Icon" class="transition-all duration-300" :class="{'w-7 h-7 scale-100': isSidebarOpen, 'w-7 h-7 scale-300': !isSidebarOpen}">
                        <span 
                        class="text-gray-800 font-bold text-sm ml-2 transition-opacity duration-300"
                        :class="{'opacity-0 scale-1': !isSidebarOpen, 'opacity-100': isSidebarOpen}"
                        >
                            Billing & Payments
                        </span>
                    </li>
                </div>
            </a>
        </ul>
</nav>
    <button 
        class="absolute top-20 hover:bg-white p-1.5 rounded-xl cursor-pointer hover:shadow-lg z-50 transition-all duration-300" 
        :class="{'left-26': !isSidebarOpen, 'left-54': isSidebarOpen}"
        @click="isSidebarOpen = !isSidebarOpen"
    >
        <span v-if="!isSidebarOpen" class="material-icons"><img src="/icons/sidebar.svg" alt="Open"></span>
        <span v-else class="material-icons "><img src="/icons/sidebar.svg" alt="Close"></span>
    </button>
        <div
        :class="{
            'rounded-tl-[80px]': !isSidebarOpen,
            'ml-57': isSidebarOpen,
            'max-w-[90%]': isSidebarOpen,
            'max-w-[95%]': !isSidebarOpen,
            'ml-15': !isSidebarOpen
        }"
         class="bg-white rounded-4xl shadow-lg p-6 flex flex-col items-center justify-start transition-all duration-300">
            <!-- Title and Subtitle -->
            <div class="text-center mb-6">
                <h1 class="text-6xl text-stone-950 font-bold">
                    Highest Products Quality <br>
                    Within Hands, BUY NOW!
                </h1>
                <p class="text-gray-600 my-5 mb-25">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisque faucibus sapien...
                </p>
            </div>

            <!-- Category Grid Layout -->
             <CategoryGrid />

            <div>
                <h1 class="
                items-center justify-center 
                text-6xl text-center 
                font-bold text-stone-950 
                mt-50 mb-25 flex 
                w-full h-full
                ">
                    Products
                </h1>
            </div>

            <!-- Products Lists -->
            <ProductList />

        </div>
    </div>
</template>

<style scoped>
#main-tw-container {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.products-track{
    overflow-x:auto;
}
/* .overflow-hidden::-webkit-scrollbar {
    display: none;
} */

</style>