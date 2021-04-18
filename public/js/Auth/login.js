var detail = new Vue({
    el:"#login",
    data:{
        login:{
            email:"whary11@gmail.com",
            password:"soy29luis"
        }
    },
    mounted() {
        
    },
    methods: {
        sendLogin(){
            showSpinner()
            let password = sha1(this.login.password)
            axios.post("/api/auth/login", {...this.login,password}).then(resp => {
                hideSpinner()
                Swal.fire({
                    icon: resp.data.status ? 'success' : 'warning',
                    html: resp.data.message,
                  }).then((result) => {
                    // if (resp.data.status) {
                    //     window.location="/login";
                    // }
                  })

                logCompany(resp)
            }).catch(err =>{
                hideSpinner()
                logCompany(err)
            })
        }
    },
})