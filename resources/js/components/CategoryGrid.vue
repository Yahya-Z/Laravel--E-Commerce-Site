<script setup lang="ts">

// Define an array of URLs for the squares //////////////// FOR EXTERNAL LINKS ////////////////
// const squareLinks = [       
    // 'https://google.com',    // Link for square 1
    // 'https://facebook.com',  // Link for square 2
    // 'https://twitter.com',   // Link for square 3
    // 'https://linkedin.com',  // Link for square 4
    // 'https://github.com',    // Link for square 5
    // 'https://youtube.com',   // Link for square 6
    // 'https://instagram.com', // Link for square 7
    // 'https://reddit.com',    // Link for square 8
    // 'https://pinterest.com', // Link for square 9
    // 'https://tiktok.com',    // Link for square 10
    // 'https://amazon.com',    // Link for square 11
    // 'https://apple.com',     // Link for square 12
    // 'https://microsoft.com', // Link for square 13
    // 'https://netflix.com',   // Link for square 14
// ];                          

// Define an array of routes for the squares //////////////// FOR INTERNAL ROUTES ////////////////
const squareRoutes = [
    { name: 'MAC', path: '/google' },       // Route for square 1
    { name: 'Maybelline', path: '/facebook' },   // Route for square 2
    { name: 'Nike', path: '/twitter' },     // Route for square 3
    { name: 'Men', path: '/linkedin' },   // Route for square 4
    { name: 'Adidas', path: '/github' },       // Route for square 5
    { name: 'Chanel', path: '/youtube' },     // Route for square 6
    { name: 'Dior', path: '/instagram' }, // Route for square 7
    { name: 'NARS', path: '/reddit' },       // Route for square 8
    { name: 'Estee Lauder', path: '/pinterest' }, // Route for square 9
    { name: 'Zara', path: '/tiktok' },       // Route for square 10
    { name: 'Women', path: '/amazon' },       // Route for square 11
    { name: 'Gucci', path: '/apple' },         // Route for square 12
    { name: 'Versace', path: '/microsoft' }, // Route for square 13
    { name: 'Tom Ford', path: '/netflix' },     // Route for square 14
];


</script>

<template>

    <!-- Category Grid Layout -->
    <div class="grid grid-cols-7 grid-rows-2 gap-25 w-full md:w-auto">
    <!-- 
        ////////////////////////////////////////////////////
        ///////////////// FOR INTERNAL ROUTES ///////////////
        ////////////////////////////////////////////////////

        Square Routes
    -->
        <router-link 
        v-for="(route, i) in squareRoutes"
        :key="i"
        class="bg-gray-300 w-30 h-30 shadow-md cursor-pointer hover:shadow-lg transition duration-300 ease-in-out hover:-translate-y-1 hover:scale-105 flex flex-col items-center justify-center relative"
        :class="{
            'rounded-tr-3xl rounded-bl-3xl rounded-tl-lg rounded-br-lg': [1, 2, 3, 12, 13, 14].includes(i + 1),
            'rounded-tl-3xl rounded-br-3xl rounded-tr-lg rounded-bl-lg': [5, 6, 7, 8, 9, 10].includes(i + 1),
            'rounded-3xl': [4, 11].includes(i + 1),
        }"
        >
            <div class="text-lg text-stone-950 font-medium mt-1 absolute -bottom-8">
                {{ route.name }}
            </div>

        </router-link>

    <!-- 
        ////////////////////////////////////////////////////
        //////////////// FOR EXTERNAL LINKS ////////////////
        ////////////////////////////////////////////////////

        Square Links
    -->
        
    <!-- <a 
        v-for="(link, i) in squareLinks" 
        :key="i" 
        :href="link" 
        target="_blank" 
        class="bg-gray-300 w-30 h-30 shadow-md cursor-pointer hover:shadow-lg transition duration-300 ease-in-out hover:-translate-y-1 hover:scale-105 flex flex-col items-center justify-center relative"
        :class="{
            'rounded-tr-3xl rounded-bl-3xl rounded-tl-lg rounded-br-lg': [1, 2, 3, 12, 13, 14].includes(i + 1),
            'rounded-tl-3xl rounded-br-3xl rounded-tr-lg rounded-bl-lg': [5, 6, 7, 8, 9, 10].includes(i + 1),
            'rounded-3xl': [4, 11].includes(i + 1),
        }"
    >
        <div class="text-md text-gray-400 mt-1 absolute -bottom-8">
            Script {{ i + 1 }}
        </div>
    </a> -->


    <!-- to add an image for each square create the path for the images and name the image with the square name -->

        <!-- <img 
            :src="`/path/to/images/image-${i}.jpg`" 
            :alt="`Image ${i}`" 
            class="w-full h-full object-cover rounded-inherit"
        /> -->
    </div>

</template>