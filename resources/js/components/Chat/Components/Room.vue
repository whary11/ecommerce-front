<template>
    <section class="row">
        <section class="col-4" id="user-connect">
            <section>
                <li class="list-group" v-for="(item, index) in usersConnect" :key="index">{{item.username}} - {{item.email}} </li>
            </section>
        </section> 
        <section class="col-8">
            <section class="bg-white" id="chat-container" ref="chat_container">
                <p class="m-2" v-for="(msg, index) in messages" :key="index"><b>{{msg.user.username}} escribió:</b> {{msg.message}}</p>
            </section>
            <section>
                <form class="input-group mb-3" @submit.prevent="sendMessage()">
                    <input type="text" v-model.trim="message" class="form-control" placeholder="Escribe un mensaje.." required minlength="1" id="message">
                    <div class="input-group-prepend">
                        <button class="btn btn-sm btn-dark" type="submit" id="button-addon1">Enviar</button>
                    </div>
                </form>
            </section>
        </section>
    </section>
</template>
<script>
export default {
    data() {
        return {
            usersConnect:[],
            messages:[],
            message:""
        }
    },
    mounted() {
        let user = JSON.parse(localStorage.getItem("user"));
        user?this.$socket.emit("newUserConnect", user):this.$router.push({ path: '/chat/login', params: { user: this.user } })
    },
    methods: {
        
        sendMessage(){
            this.$socket.emit("newMessage", this.message)
            this.message = ""
            
        },
        scrollTop(){
            window.chat = this.$refs.chat_container
            chat.scrollTop = chat.scrollHeight
        }
    },
    sockets: {
        newUserConnect(data){
            this.messages.push({
                message: `${data.username} se ha conectado`,
                user:{
                    username: "Boot Raga"
                }
            })
            this.scrollTop()
        },
        usersConnected(data){
            this.usersConnect = data
        },
        newMessage(data){
            console.log("new message" ,data);
            this.messages.push(data)

            this.scrollTop()
        }
    },
}
</script>

<style>
    #chat-container{
        overflow-y: scroll;
    }
</style>