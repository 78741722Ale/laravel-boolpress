<template>
    <div class="page">
        <div class="p-5 bg-dark text-white">
            <div class="container">
                <h1 class="display-3">Boolpress</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <section class="recent">
            <!-- Container con dentro cards -->
            <div class="container">
                <!-- Titolo di sezione -->
                <h3 class="py-3">Articoli Recenti</h3>
                <!-- Row con dentro le cards -->
                <div class="row">
                    <div class="col" v-for="element in posts" :key="element.id">
                        <div class="card">
                            <!-- Immagine del post -->
                            <img :src="'/storage/' + element.cover" :alt="element.title">
                            <div class="card-body">
                                <!-- Contenuto dinamico -->
                                <p>
                                    {{element.content.slice(0, 100) + ' ...'}}
                                </p>
                                <!-- Rotta dinamica read more -->
                                <a href="#"> Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tasto reindirizzamento  -->
                <div class="mt-4">
                    <router-link class="btn btn-primary" :to="{name:'posts'}">Vai ai posts</router-link>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: 'Home',
    data() {
        return {
            posts: ''
        }
    },
    methods: {

    },
    mounted() {
        axios
        /* Prendo da API quello che mi serve */
        .get('/api/posts')
        /* Il responso e faccio un console log */
        .then(response => {
            console.log(response.data);
            const posts = response.data.data
            this.posts = posts.slice(0, 4)
        })
        .catch(e => {
            console.log(e);
        })
    },
}
</script>
