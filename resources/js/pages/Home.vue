<template>
    <div class="container">
        <div class="row justify-content-center">
            <div v-for="movie in movies" :key="movie.id" class="card m-2" style="width: 18rem;">
                <img class="card-img-top" :src="movie.image">
                <div class="card-body">
                    <h5 class="card-title">{{ movie.name }}</h5>
                    <p class="card-text">{{ movie.description }}</p>
                </div>
                <div class="card-body">
                    <router-link class="btn btn-success" :to="{name: 'booking', params: { id: movie.id }}">Buy Tickets</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data()
            {
                return{
                    movies: []
                }
            },
        mounted() {
            this.getMovies();
        },

        methods: {
            getMovies(){
                axios.get('/api/movies').then(response => {
                    this.movies = response.data.movies;
                });
            }
        },
    }
</script>
