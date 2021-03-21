var detail = new Vue({
    el:"#checkout",
    data:{
        cart: {

        }
    },
    mounted() {
        this.cart = new Cart();
        this.cart.renderCheckout()
    },
    methods: {
        getInfoCheckout(){
            let data = $("#info-checkout").serializeArray()
            let newData = {}
            data.map(d=>{
                newData[d.name.replace("-", "_")] = d.value
            })
            return newData
        },

        getDataOrder(){
            let info = this.getInfoCheckout()
            let references = []
            this.cart.cart.references.map(item =>{
                let activities = []
                
                if (item.activities) {
                    item.activities.map(act => {
                        logCompany({id: act.id,quantity:act.quantity,price_with_discount:act.price_with_discount})
                        activities.push({id: act.id,quantity:act.quantity,price_with_discount:act.price_with_discount})
                        
                    })
                }
                references.push({
                    id: item.id,
                    quantity:item.quantity,
                    price_with_discount:item.price_with_discount,
                    activities
                })
            })
            let address = this.formDirection(info)

            delete info.number1
            delete info.number2
            delete info.number3
            delete info.via
            let data = {
                references,
                // ...info,
                platform: "WEB",
                // address,
                address_id:1,
                phone_id:1,
                city_id:1,
                total: this.cart.getTotalCart()
            }
            return data
        },
        formDirection(data){
            return `${data.via} ${data.number1} ${data.number2} ${data.number3}, ${data.city}`
        },
        sendOrder(){
            axios.post("/api/purchase/create", this.getDataOrder()).then(resp => {
                if (resp.data.code == 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Genial !',
                        html: `Nuestro equipo ya tiene su pedido, conserva este número <b>${resp.data.id}</b>`,
                      }).then((result) => {
                        logCompany(result)
                        if (result.isConfirmed) {
                            // window.location="/";
                        } else {
                            // window.location="/";
                        }
                      })
                }
            })
            .catch(err => {
                console.error(err);
            });
        }
    },
})