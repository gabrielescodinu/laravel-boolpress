<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="post in posts" :key="post.title">
                    <div class="card-header">{{post.title}}</div>

                    <div class="card-body">
                        {{post.body}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                posts: ""
            }
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('api/posts').then(response => {
                this.posts = response.data.data;
            })
        }
    }
</script>
