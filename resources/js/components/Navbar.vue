<template>
    <div class="navbar bg-gray-900 transition">
        <div class="container mx-auto flex justify-between">
            <div class="block p-4 lg:text-xl text-teal-500 hover:text-gray-500 focus:outline-none focus:text-white font-bold">
                <a href="/">Filma24</a>
            </div>
            <div class="pl-2 py-2 flex-grow items-center" style="max-width: 500px">
                <form method="post" action="">

                    <input
                        type="search"
                        placeholder="Kerko..."
                        class="w-full bg-gray-700 focus:outline-none focus:bg-white focus:text-gray-900 text-gray-700 rounded-lg transition transition-ease-in transition-500 focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl"
                        name="search">
                </form>
            </div>
            <div class="dropdown block p-4">
                <button @click="isOpen = !isOpen" type="button" class="text-sm lg:text-base font-bold hover:bg-blue-800 hover:text-white focus:text-white focus:outline-none">
                    <svg class="h-8 w-8 fill-current" viewBox="0 0 24 24">
                        <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                        <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
                <div :class="isOpen ? 'block' : 'hidden'" class="dropdown-content mt-2">
                    <div class="row container mx-auto rounded-lg bg-gray-800">
                        <div class="header flex flex-wrap rounded-lg bg-gray-900">
                            <a class="flex-1 p-2 rounded-lg hover:bg-gray-500 hover:text-gray-900 bg-gray-700 text-yellow-500 mx-6 text-center" href="">Filma</a>
                            <a class="flex-1 p-2 rounded-lg hover:bg-gray-500 hover:text-gray-900 bg-gray-700 text-yellow-500 mx-6 text-center" href="">Seriale</a>
                        </div>

                        <div v-for="genre in genres" class="column" :key="genre.title">
                            <a class="rounded-lg py-1 px-4 hover:bg-gray-700 text-gray-500 mx-6 text-center" href="">{{ genre.title}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        props: ['movie_url','serial_url','genres'],
        data() {
            return {
                isOpen: false,
            }
        },
    }
</script>

<style scoped>
    /* navbar */
    .navbar {
        overflow: hidden;
        font-family: Arial, Helvetica, sans-serif;
    }

    .navbar a {
        float: left;
        text-decoration: none;
    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown-content {
        position: absolute;
        background-color: transparent;
        width: 100%;
        left: 0;
        z-index: 1;
    }

    .dropdown-content .header {
        padding: 10px;
        color: white;
    }

    /* Create three equal columns that floats next to each other */
    .column {
        float: left;
        width: 33.33%;
        padding: 10px;
    }

    .column a {
        float: none;
        text-decoration: none;
        display: block;
        text-align: left;
    }


    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            height: auto;
        }
    }

    .card-div {
        height: 170px;
        background-color: red;
        -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
        -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
        animation-name: example;
        animation-duration: 4s;
    }

    /* Safari 4.0 - 8.0 */
    @-webkit-keyframes example {
        from {background-color: red;}
        to {background-color: yellow;}
    }

    /* Standard syntax */
    @keyframes example {
        from {background-color: red;}
        to {background-color: yellow;}
    }

    .gradient-verdh-kuq {
        background-color: #FFE53B;
        background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
    }
    .gradient-blue-mov {
        background-color: #21D4FD;
        background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
    }

</style>
