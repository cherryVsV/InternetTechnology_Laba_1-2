let cart = window.localStorage.getItem('cart');
let cartCount = window.localStorage.getItem('cartCount');
let favourite = window.localStorage.getItem('favourite');
let favouriteCount = window.localStorage.getItem('favouriteCount');
let compare = window.localStorage.getItem('compare');
let compareCount = window.localStorage.getItem('compareCount');
let subscription = window.localStorage.getItem('subscription');
let state = {
    cart: cart ? JSON.parse(cart) : [],
    cartCount: cartCount ? parseInt(cartCount) : 0,
    favourite: favourite ? JSON.parse(favourite) : [],
    favouriteCount: favouriteCount ? parseInt(favouriteCount) : 0,
    compare: compare ? JSON.parse(compare) : [],
    compareCount: compareCount ? parseInt(compareCount) : 0,
    subscription: subscription ? JSON.parse(subscription) : [],
}
export default  state
