var detail = new Vue({
    el:"#register",
    data:{
        register:{
            name:"Luis",
            last_name: "Raga",
            email:"whary11@gmail.com",
            password:"soy29luis"
        }
    },
    mounted() {
        
    },
    methods: {
        registerUser(){
            showSpinner()
            let password = sha1(this.register.password)
            axios.post("/api/auth/register", {...this.register,password}).then(resp => {
                hideSpinner()
                Swal.fire({
                    icon: resp.data.status ? 'success' : 'warning',
                    html: resp.data.message,
                  }).then((result) => {
                    if (resp.data.status) {
                        window.location="/login";
                    }
                  })

                logCompany(resp)
            }).catch(err =>{
                hideSpinner()
                logCompany(err)
            })
        }
    },
})