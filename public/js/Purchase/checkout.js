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
            let details = []
            this.cart.cart.references.map(item =>{
                details.push({
                    id: item.id,
                    quantity:item.quantity,
                    price_with_discount:item.price_with_discount,
                    activities:item.activities?item.activities:[]
                })
            })
            let address = this.formDirection(info)

            delete info.number1
            delete info.number2
            delete info.number3
            delete info.via
            let data = {
                details,
                ...info,
                address,
                total: this.cart.getTotalCart()
            }
            return data
        },
        formDirection(data){
            return `${data.via} ${data.number1} ${data.number2} ${data.number3}, ${data.city}`
        },
        sendOrder(){
            logCompany(this.getDataOrder())


            alert(JSON.stringify(this.getDataOrder()))
        }
    },
})