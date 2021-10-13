let getters = {
    getQuantityById: state => id => {
       return state.cart.find(cart => cart.id === id).quantity;
    },
    getIsFavourite: state => item => {
        return state.favourite.find(f => f.id === item.id);
    },
    getIsCompared: state => item => {
        return state.compare.find(f => f.id === item.id);
    },
    getIsSubscription: state => item => {
        return state.subscription.find(f => f.id === item.id);
    },

}

export default getters
