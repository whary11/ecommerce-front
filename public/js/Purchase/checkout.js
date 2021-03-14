var detail = new Vue({
    el:"#checkout",
    data:{},
    mounted() {
        let cart = new Cart();
        cart.renderCheckout()
    },
    methods: {},
})