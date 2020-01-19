<template>
    <div class="container-img-overlay md:t-height-229 lg:t-height-229 rounded-lg hover:text-gray-300 text-gray-700 bg-gray-900 my-3 mx-1 lg:mx-2">
        <img src="https://i.imgur.com/vC4z1GH.jpg" alt="Avatar"
             class="image w-full h-full rounded-lg hover:opacity-75 transition transition-900  transition-ease-in bg-indigo">
        <image-loader src="https://i.imgur.com/vC4z1GH.jpg"/>
        <div class="absolute right-0 top-0 my-2 mx-1">
        <span class="py-1 bg-pink-900 text-teal-500 rounded text-xs px-1">
            HD
        </span>
        </div>
        <div class="absolute left-0 top-0 my-2 mx-1">
        <span class="py-1 bg-pink-900 text-teal-500 rounded text-xs px-1">
            7
            <svg viewBox="0 0 24 24" class="fill-current inline-block h-4 w-4">
            <path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z" />
        </svg>
        </span>
        </div>
        <div class="absolute right-0 bottom-0 my-2 mx-1">
            <span class="py-1 bg-pink-900 text-teal-500 rounded text-xs px-1">121 min</span>
        </div>
        <div class="absolute left-0 bottom-0 my-2 mx-1">
            <span class="py-1 bg-pink-900 text-teal-500 rounded text-xs px-1">2019</span>
        </div>
        <a href="#" class="overlay hover:bg-pink-900 text-green-600 rounded-lg"><h3>Titulli</h3></a>
    </div>

</template>

<script>
    export default {
        name: "Movie-Card"
    }
</script>

<style scoped>

</style>
