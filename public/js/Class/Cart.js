class Cart {
    nameVaribleCartLocalStorage= 'cart_company'
    cart = {
        references: []
    }

    constructor(){
        this.getCart()
    }

    addCart(reference){

        let resp = this.getCart()

        let existReference = this.validateExistReference(reference.id)

        logCompany(existReference)

        if (!resp) { /// El carrito no existe
            logCompany("El carrito no existe")
            if (existReference && existReference.length == 0 ) {
                logCompany("La referencia no exite en el carrito")
                this.cart.references.push(reference)
                this.saveCart()
            }
        }else{// El carrito existe
            logCompany("El carrito existe")
            if(existReference.length == 0){// La referencia no exite en el carrito
                logCompany("La referencia no exite en el carrito", existReference)
                this.cart.references.push(reference)
                this.saveCart()
            }else{
                logCompany("La referencia exite en el carrito")

                let newReferences = this.cart.references.filter(item => item.id != reference.id)

                existReference[0].quantity += reference.quantity
                
                newReferences.push(existReference[0])

                this.cart.references = newReferences
                this.saveCart()
                logCompany(newReferences)
            }
        }

        this.renderCartInMenu()

    }

    validateStock(){

    }

    getCart(){
        let cart = localStorage.getItem(this.nameVaribleCartLocalStorage)
        if (cart) {
            this.cart = JSON.parse(cart)
            return true
        }else{
            this.cart.references = []
        }
        return false
    }

    saveCart(){
        localStorage.setItem(this.nameVaribleCartLocalStorage, JSON.stringify(this.cart))
    }

    validateExistReference(id){
        return this.cart.references.filter(item =>item.id == id)
    }
    renderCartInMenu(){
        let bodyCart = $("#shopping-cart")
        let html = ``
        // incluir referencias
        this.cart.references.map((ref,i)=>{
            html += `
                <li>
                    <div class="media" id="media">
                        <a href="#"><img class="mr-3 rounded"
                                src="${ref.image}"
                                alt="${ref.product_name}"></a>
                        <div class="media-body" height="500%" width="50%">
                            <a href="#">
                                <h4>${shortText(ref.product_name)}</h4>
                            </a>
                            <h4><span>${ref.quantity} x $ ${formatCurrency(ref.price_with_discount)}</span></h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                </li>
        `
        })
        // incluir el footer del carrito

        html += `
            <li>
                <div class="total">
                    <h5>Total : $ <span>${formatCurrency(this.getTotalCart())}</span></h5>
                </div>
            </li>
            <li>
                <div class="buttons">
                    
                    <a href="/purchase/checkout" class="checkout">checkout</a>
                </div>
            </li>`

        bodyCart.html(html)

    }

    renderCheckout(){
        let checkoutDetails = $("#checkout-details")

        let html = `
            <div class="title-box">
                <div>Productos <span>Total</span></div>
            </div>
            <ul class="qty">
        `

        this.cart.references.map(ref =>{
            html += `
                <li>${shortText(ref.product_name)} × ${ref.quantity} Unid <span>${formatCurrency(ref.price_with_discount)}</span></li>
            `
        })
                                            
        html += `
            </ul>
            <ul class="sub-total">
                <li>Subtotal <span class="count">${formatCurrency(this.getTotalCart())}</span></li>
                
            </ul>
            <ul class="total">
                <li>Total <span class="count">${formatCurrency(this.getTotalCart())}</span></li>
            </ul>
        `


        checkoutDetails.html(html)
    }

    addActivity(owner_ref, reference){
        let resp = this.getCart()
        let existReference = this.validateExistReference(owner_ref.id)
        logCompany(existReference)

        if (!resp) { /// El carrito no existe
            logCompany("El carrito no existe")
            if (existReference && existReference.length == 0 ) {
                logCompany("La referencia no exite en el carrito")
                reference.quantity = 1
                owner_ref.activities = []
                owner_ref.activities.push(reference)
                this.cart.references.push(owner_ref)
                this.saveCart()

                return true
            }
        }else{// El carrito existe
            logCompany("El carrito existe")
            if(existReference.length == 0){// La referencia no exite en el carrito
                logCompany("La referencia no exite en el carrito", existReference)
                reference.quantity = 1
                owner_ref.activities = []
                owner_ref.activities.push(reference)
                this.cart.references.push(owner_ref)
                this.saveCart()
                return true
            }else{
                logCompany("La referencia exite en el carrito")

                let newReferences = this.cart.references.filter(item => item.id != owner_ref.id)

                // existReference[0].quantity += reference.quantity
                // existReference[0].activities &&  existReference[0].activities.length > 0

                if (existReference[0].activities) {
                    let refe = existReference[0].activities.filter(item => item.id == reference.id)
                    if (refe.length > 0) {

                        // logCompany(refe[0])

                        logCompany("La actividad existe.")


                        if(refe[0].quantity < refe[0].stock){
                            logCompany("La actividad tiene stock disponible.")
                            let refes = existReference[0].activities.filter(item => item.id != reference.id)
                            refe[0].quantity = refe[0].quantity+1
                            refes.push(refe[0])
                            existReference[0].activities = refes
                            newReferences.push(existReference[0])

                            this.cart.references = newReferences
                            this.saveCart()
                            return true
                        }else{
                            logCompany("No hay stock disponible.")

                        }
                    }else{
                        logCompany("La actividad no existe.")
                        reference.quantity = 1
                        existReference[0].activities.push(reference)
                        newReferences.push(existReference[0])

                        this.cart.references = newReferences
                        this.saveCart()
                        return true
                    }
                }
                

                
                // logCompany(newReferences)
            }
        }



        this.renderCartInMenu()

        return false


    }

    

    removeCart(){}

    getTotalCart(){
        let total = 0
        this.cart.references.map((ref)=>{
            total += ref.price_with_discount*ref.quantity
        })

        return total
    }

    
}