

var detail = new Vue({
    el:"#product_detail_vue",
    data:{
        reference:{},
        activities:[],
        toast: Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        })
    },
    mounted() {
        this.pushReference($("#info_reference").data('id'), $("#info_reference").data('stock'), $("#info_reference").data('price'), $("#info_reference").data('price_with_discount'), 1, $("#info_reference").data('name'), $("#info_reference").data('image'),)
        this.setPercentage(this.reference.price, this.reference.price_with_discount)
        this.validateStock(this.reference.stock)
        this.getProductsType(1,1)
    },
    methods: {
        selectReference(id,stock,price, price_with_discount,quantity, product_name, image){
            let jq_div_ref = $(`#div_reference_${id}`)
            let jq_div_price = $("#price")
            let jq_div_with_discount = $("#price_with_discount")
            $(".hr_reference").remove()
            // Marcar la referencia seleccionada
            jq_div_ref.append(`<hr class="hr_reference">`)
            // Cambiar el precio
            jq_div_price.text(`$ ${formatCurrency(price)}`)
            jq_div_with_discount.text(`$ ${formatCurrency(price_with_discount)}`)
            this.pushReference(id,stock,price, price_with_discount, quantity, product_name, image)
            this.validateStock(stock)
            this.setPercentage(price, price_with_discount)
        },
        pushReference(id, stock, price, price_with_discount, quantity, product_name, image){
            this.reference.id = id
            this.reference.stock = stock
            this.reference.price = price
            this.reference.price_with_discount = price_with_discount
            this.reference.quantity = quantity
            this.reference.product_name = product_name
            this.reference.image = image
        },
        updateQuantity(type){
            

            let input_quantity = $("#quantity")
            let quantity = parseInt(input_quantity.val())

            
            if (this.reference.stock <= quantity) {
                if(type == "remove") {
                    input_quantity.val(quantity<1?1:quantity-1)
                }else{
                    input_quantity.val(this.reference.stock)
                }
            }else{
                switch (type) {
                    case "add":
                        input_quantity.val(quantity+1)
                        this.reference.quantity += 1
                        break;
                    case "remove":
                        input_quantity.val(quantity<1?1:quantity-1)
                        break;
                    case "writing":
                        logCompany(type, " No sé que hacer aquí.");
                        break;
                    default:
                        break;
                }
            }
            quantity = parseInt(input_quantity.val())
            this.showMesageNoStock(quantity)
        },
        validateStock(stock){
            let add_quantity = $("#add-quantity")
            let remove_quantity = $("#remove-quantity")

            let input_quantity = $("#quantity")
            add_quantity.attr("disabled", false)
            remove_quantity.attr("disabled", false)
            // input_quantity.attr("disabled", false)
            input_quantity.val(1)
            if (stock < 1) {
                add_quantity.attr("disabled", true)
                remove_quantity.attr("disabled", true)
                // input_quantity.attr("disabled", true)
                input_quantity.val(0)
                
            }
        },
        showMesageNoStock(quantity){
            
            if (quantity) {
                let jq_div_no_stock = $("#no-stock")
                logCompany("showMesageNoStock: ",quantity)
                
                if (quantity == this.reference.stock) {
                    jq_div_no_stock.attr("class", "d-block")
                }else{
                    jq_div_no_stock.attr("class", "d-none")
                }
            }

        },
        setPercentage(price, price_with_discount){
            let jq_div_percentage_discount = $("#percentage-discount")
            jq_div_percentage_discount.text( `${calculatePercentage(price, price_with_discount)} Off`)
            
        },
        addCart(){
            $("#no-stock-in-add").text("")
            let cart = new Cart()
            let exist = cart.validateExistReference(this.reference.id)
            let notify = false
            logCompany(exist, this.reference.id)
            if (exist.length >0) {
                if (exist[0].quantity < this.reference.stock) {
                    cart.addCart(this.reference)
                    notify = true

                    logCompany(this.reference)
                }else{
                    $("#no-stock-in-add").text("No hay mas cantidades disponibles")
                    logCompany("")
                }
            }else{
                logCompany(this.reference)

                cart.addCart(this.reference)
                notify = true
            }

            logCompany("Estoy aquí.")

            notify?this.toast.fire({
                icon: 'success',
                title: 'Producto añadido al carrito.'
            }):null

            
        },
        getProductsType(el, page, type='actividad'){

            axios.get(`/api/product/type/${type}/${page}`).then(resp => {
                if (resp.data.code == 200) {
                    this.activities = resp.data.data
                }
                logCompany(resp);
            }).catch(err => {
                logCompany(err)
            })
        },
        renderProductType(data){
            if(data != null){
                let html = ``
                data.map(item => {
                    item.references.map(ref => {
                        if(ref.images.length > 0){
                            html += `
                                <div class="product-box col-sm-3 col-6 my-3">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="#">
                                                <img src="${ref.images[0].url}" class="img-fluid blur-up lazyload mb-1" alt="cotton top" width="200px" style="height:100px !important">
                                            </a>
                                        </div>
                                        <div class="product-detail">
                                            <h6 style="font-size:10px"><a href="#"><span>${shorText(item.name)} - ${formatCurrency(ref.price_with_discount)}</span></a></h6>
                                            <div>
                                                <button class="btn btn-sm btn-info" @click.prevet="addActivity(item)">Agregar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `
                        }
                    })
                })
                $("#upsell_product").html(html)
            }
        },
        addActivity(ref){
            let cart = new Cart()
            let resp = cart.addActivity(this.reference,ref)
            if (resp) {
                this.toast.fire({
                    icon: 'success',
                    html: `Actividad agregada al producto: <b>${this.shortText(this.reference.product_name, 22)}</b>`, 
                })
            }
        },
        shortText(text, length){
        

            return shortText(text, length)
        }

    },
})