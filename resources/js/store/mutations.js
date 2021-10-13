let mutations = {
    addToCart(state, item) {
        let found = state.cart.find(product => product.id === item.id);

        if (found) {
            found.quantity += 1;
            found.totalPrice = found.quantity * found.new_price;
            found.totalOldPrice = found.quantity * found.previous_price;
        } else {
            state.cart.push(item);

            Vue.set(item, 'quantity', 1);
            Vue.set(item, 'totalPrice', item.new_price);
            Vue.set(item, 'totalOldPrice', item.previous_price);
        }

        state.cartCount++;
        this.commit('saveCart');
    },
    addToCartUnique(state, item) {
        let found = state.cart.find(product => product.id === item.id);
        if (!found) {
            state.cart.push(item);
            Vue.set(item, 'quantity', 1);
            Vue.set(item, 'totalPrice', item.new_price);
            Vue.set(item, 'totalOldPrice', item.previous_price);
            state.cartCount++;
            this.commit('saveCart');
        }
    },
    removeItemFromCart(state, item) {
        let index = state.cart.indexOf(item);

        if (index > -1) {
            let product = state.cart[index];
            if (product.quantity > 1) {
                state.cartCount -= 1;
                product.quantity -= 1
                product.totalPrice -= product.new_price
            } else {
                state.cartCount -= product.quantity;
                state.cart.splice(index, 1);
            }
        }
        this.commit('saveCart');
    },
    removeFromCart(state, item) {
        let index = state.cart.indexOf(item);

        if (index > -1) {
            let product = state.cart[index];
            state.cartCount -= product.quantity;

            state.cart.splice(index, 1);
        }
        this.commit('saveCart');
    },
    clearCart(state) {
        state.cart.splice(0, state.cart.length);
        state.cartCount = 0
        this.commit('saveCart');
    },
    saveCart(state) {
        window.localStorage.setItem('cart', JSON.stringify(state.cart));
        window.localStorage.setItem('cartCount', state.cartCount);
    },
    /*--------------------------------------------------------------------*/
    addToFavourite(state, item) {
        let found = state.favourite.find(f => f.id === item.id);

        if (!found) {
            state.favourite.push(item);
            state.favouriteCount++;
            axios.post('/update/favourites/' + item.id, {'add': true})
        } else {
            let index = state.favourite.indexOf(item);
            state.favouriteCount -= 1;
            state.favourite.splice(index, 1);
            axios.post('/update/favourites/'+item.id, {'add': false})

        }
        this.commit('saveFavourite');

    },
    addToFavouriteUnique(state, item) {
        let found = state.favourite.find(f => f.id === item.id);
        if (!found) {
            state.favourite.push(item);
            state.favouriteCount++;
            this.commit('saveFavourite');
        }
    },
    clearFavourite(state) {
        state.favourite.splice(0, state.favourite.length);
        state.favouriteCount = 0
        axios.get('/delete/favourites');
        this.commit('saveFavourite');
    },

    saveFavourite(state) {
        window.localStorage.setItem('favourite', JSON.stringify(state.favourite));
        window.localStorage.setItem('favouriteCount', state.favouriteCount);
    },
    /*--------------------------------------------------------------------*/
    addToCompare(state, item) {
        let found = state.compare.find(f => f.id === item.id);

        if (!found) {
            state.compare.push(item);
            state.compareCount++;
            axios.post('/update/compared/' + item.id, {'add': true})
        } else {
            let index = state.compare.indexOf(item);
            state.compareCount -= 1;
            state.compare.splice(index, 1);
            axios.post('/update/compared/'+item.id, {'add': false})

        }
        this.commit('saveCompare');

    },
    addToCompareUnique(state, item) {
        let found = state.compare.find(f => f.id === item.id);
        if (!found) {
            state.compare.push(item);
            state.compareCount++;
            this.commit('saveCompare');
        }
    },
    clearCompare(state) {
        state.compare.splice(0, state.compare.length);
        state.compareCount = 0
        axios.get('/delete/compared');
        this.commit('saveCompare');
    },

    saveCompare(state) {
        window.localStorage.setItem('compare', JSON.stringify(state.compare));
        window.localStorage.setItem('compareCount', state.compareCount);
    },
    /*-----------------------------*/
    addToSubscriptionUnique(state, item) {
        let found = state.subscription.find(product => product.id === item.id);
        if (!found) {
            state.subscription.push(item);
            this.commit('saveSubscription');
        }
    },
    saveSubscription(state) {
        window.localStorage.setItem('subscription', JSON.stringify(state.subscription));
    },
}

export default mutations
