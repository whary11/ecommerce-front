<template>
    <section class="container">
        <form class="row justify-content-center" @submit.prevent="goRoom()">
            <div class="form-group col-md-7">
                <input type="text" v-model="user.username" class="form-control" placeholder="Username" name="username" required>
            </div>
            <div class="form-group col-md-7">
                <input type="email" v-model="user.email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group col-md-7">
                <button class="btn btn-block btn-primary">Ingresar</button>
            </div>
        </form>
    </section>
</template>
<script>
export default {
    data() {
        return {
           user:{
               email:"",
               username:""
           } 
        }
    },
    methods: {
        goRoom(){
            if (this.user.email != "" && this.user.username != "") {
                localStorage.setItem("user", JSON.stringify(this.user))
                
                this.$router.push({ path: '/chat/room' })
            }
        }
    },
}
</script>