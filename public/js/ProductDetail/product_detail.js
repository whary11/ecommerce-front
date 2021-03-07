var detail = new Vue({
    el:"#product_detail_vue",
    data:{
        reference:{}
    },
    mounted() {
        this.pushReference($(".hr_reference").data('id'), $(".hr_reference").data('stock'), $(".hr_reference").data('price'), $(".hr_reference").data('price_with_discount'))

        this.setPercentage(this.reference.price, this.reference.price_with_discount)

        this.validateStock(this.reference.stock)

    },
    methods: {
        selectReference(id,stock,price, price_with_discount){
            let jq_div_ref = $(`#div_reference_${id}`)
            let jq_div_price = $("#price")
            let jq_div_with_discount = $("#price_with_discount")
            $(".hr_reference").remove()
            // Marcar la referencia seleccionada
            jq_div_ref.append(`<hr class="hr_reference">`)
            // Cambiar el precio
            jq_div_price.text(`$ ${formatCurrency(price)}`)
            jq_div_with_discount.text(`$ ${formatCurrency(price_with_discount)}`)

            this.pushReference(id,stock,price, price_with_discount)

            this.validateStock(stock)


            this.setPercentage(price, price_with_discount)

            


        },

        pushReference(id, stock, price, price_with_discount){
            this.reference.id = id
            this.reference.stock = stock
            this.reference.price = price
            this.reference.price_with_discount = price_with_discount
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



                
                // alert(`No hay suficiente stock, esta referencia tiene una disponibilidad de ${this.reference.stock}`)
            }else{
                
                
                switch (type) {
                    case "add":
                        input_quantity.val(quantity+1)
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
            logCompany(quantity, type);


            this.showMesageNoStock(quantity)

        },
        validateStock(stock){
            let add_quantity = $("#add-quantity")
            let remove_quantity = $("#remove-quantity")

            let input_quantity = $("#quantity")
            add_quantity.attr("disabled", false)
            remove_quantity.attr("disabled", false)
            input_quantity.attr("disabled", false)
            input_quantity.val(1)
            if (stock < 1) {
                add_quantity.attr("disabled", true)
                remove_quantity.attr("disabled", true)
                input_quantity.attr("disabled", true)
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
            
        }

    },
})