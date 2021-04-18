var detail = new Vue({
    el:"#checkout",
    data:{
        cart: {

        },
        handler: ePayco.checkout.configure({
            key: 'e364ec4e20f5c87af52885f148d6c9c1',
            test: true
        }),
        dateEpayco:{
            //Parametros compra (obligatorio)
            name: "Compra en Keny",
            description: "Compra en Keny",
            // invoice: "1234",
            currency: "cop",
            // amount: "12000",
            tax_base: "0",
            tax: "0",
            country: "co",
            lang: "es",
  
            //Onpage="false" - Standard="true"
            external: "true",
  
  
            //Atributos opcionales
            // extra1: "extra1",
            // extra2: "extra2",
            // extra3: "extra3",
            // confirmation: "http://secure2.payco.co/prueba_curl.php",
            response: "http://secure2.payco.co/prueba_curl.php",
  
            //Atributos cliente
            // name_billing: "Andres Perez",
            // address_billing: "Carrera 19 numero 14 91",
            // type_doc_billing: "cc",
            // mobilephone_billing: "3050000000",
            // number_doc_billing: "100000000",
  
           //atributo deshabilitación metodo de pago
            methodsDisable: []
  
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
                        // logCompany({id: act.id,quantity:act.quantity,price_with_discount:act.price_with_discount})
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
            // "user":{
            //     "email":"drddd@keny.com",
            //     "name":"Drdd",
            //     "last_name": "renteriadd"
            // },
            // "address":{
            //     "via_generator":"Calle",
            //     "value_via_generator": "8 a",
            //     "via_number": "92",
            //     "house": "71",
            //     "principal":1
            // },
            // "phone":{
            //     "country_id":1,
            //     "phone":"3043788454",
            //     "principal":1
            // },
            // "total":10000,
            // "city_id": 1,
            // "platform": "WEB"
            let address = this.getDirection(info)

            let user = {
                "email": info.email,
                "name": info.name,
                "last_name": info.surname
            }

            let phone = {
                "country_id":1,
                "phone": info.phone,
                "principal":1
            }
            let data = {
                references,
                platform: "WEB",
                address,
                phone,
                user,
                city_id: Number(info.city),
                total: this.cart.getTotalCart()
            }
            return data
        },
        getDirection(data){
            return {
                via_generator: data.via,
                value_via_generator: data.number1,
                via_number: data.number2,
                house: data.number3,
                principal: 1
            }
        },
        sendOrder(){
            showSpinner()
            logCompany("Sending... ",this.getDataOrder())
            let data = this.getDataOrder()

            // return
            axios.post("/api/purchase/create", data).then( async resp => {
                logCompany(resp.data)
                if (resp.data.code == 200) {
                    // Levantar el pago a epayco
                    this.dateEpayco.invoice = resp.data.id
                    this.dateEpayco.extra1 = resp.data.id
                    this.dateEpayco.name_billing =  `${data.user.name} ${data.user.last_name}`
                    this.dateEpayco.amount = data.total
                    this.dateEpayco.email_billing = data.user.email
                    this.dateEpayco.response = `${location.origin}/api/purchase/response`
                    this.dateEpayco.confirmation = `${location.origin}/api/purchase/confirmation`
                    console.log(this.dateEpayco);
                    await this.handler.open(this.dateEpayco)
                }
                hideSpinner()
            })
            .catch(err => {
                hideSpinner()

                console.error(err);
            });
        }
    },
})