var detail = new Vue({
    el:"#product_detail_vue",
    data:{
        reference:{}
    },
    mounted() {
        this.pushReference($(".hr_reference").data('id'), $(".hr_reference").data('stock'), $(".hr_reference").data('price'))
        console.log(this.reference);
    },
    methods: {
        selectReference(id,stock,price){
            let jq_ref = $(`#reference_${id}`)
            let jq_div_ref = $(`#div_reference_${id}`)
            let jq_div_price = $("#price")
            $(".hr_reference").remove()
            // Marcar la referencia seleccionada
            jq_div_ref.append(`<hr class="hr_reference">`)
            // Cambiar el precio
            jq_div_price.text(`$${price}`)

            this.pushReference(id,stock,price)

            this.updateQuantity("add")

            console.log(this.reference);
        },

        pushReference(id, stock, price){
            this.reference.id = id
            this.reference.stock = stock
            this.reference.price = price
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
                
                logCompany(quantity, type);
            }
        }
    },
})