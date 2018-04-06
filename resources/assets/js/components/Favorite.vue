<template>

    <span>

        <a href="#" v-if="HeartOn" @click.prevent="unFavorite(exercise)">
            <i  class="fa fa-heart"></i>
        </a>
        <a href="#" v-else @click.prevent="favorite(exercise)">
            <i  class="fa fa-heart-o"></i>
        </a>
    </span>

</template>

<script>
    
    export default {
        props: [
        'exercise', 
        'favorited'
        ],

        data:

         function() {
            return {
                HeartOn: '',
            }
        },

        mounted() {
            this.HeartOn = this.HeartNormal ? true : false;
        },

        computed: {
            HeartNormal() {
                return this.favorited;
            },
        },

        methods: 
        {
            favorite(exercise) {
                axios.post('/favorite/'+ exercise)
                    .then(response => this.HeartOn = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(exercise) {
                axios.post('/unfavorite/'+ exercise)
                    .then(response => this.HeartOn = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>