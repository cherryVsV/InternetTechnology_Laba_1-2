const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.copyDirectory('resources/assets', 'public');

mix.js('resources/js/app.js', 'public/js')
    .vue()
/*--------------------------------------------------------------------------
 | sass styles
--------------------------------------------------------------------------*/
    .sass('resources/sass/404.scss', 'public/css/404.css')
    .sass('resources/sass/about.scss', 'public/css/about.css')
    .sass('resources/sass/article.scss', 'public/css/article.css')
    .sass('resources/sass/card.scss', 'public/css/card.css')
    .sass('resources/sass/card2.scss', 'public/css/card2.css')
    .sass('resources/sass/cart.scss', 'public/css/cart.css')
    .sass('resources/sass/cart1.scss', 'public/css/cart1.css')
    .sass('resources/sass/cartcomplete.scss', 'public/css/cartcomplete.css')
    .sass('resources/sass/catalog.scss', 'public/css/catalog.css')
    .sass('resources/sass/catalogmain.scss', 'public/css/catalogmain.css')
    .sass('resources/sass/common.scss', 'public/css/common.css')
    .sass('resources/sass/compare.scss', 'public/css/compare.css')
    .sass('resources/sass/contact.scss', 'public/css/contact.css')
    .sass('resources/sass/content.scss', 'public/css/content.css')
    .sass('resources/sass/delivery.scss', 'public/css/delivery.css')
    .sass('resources/sass/email.scss', 'public/css/email.css')
    .sass('resources/sass/faq.scss', 'public/css/faq.css')
    .sass('resources/sass/favorite.scss', 'public/css/favorite.css')
    .sass('resources/sass/fblist.scss', 'public/css/fblist.css')
    .sass('resources/sass/help.scss', 'public/css/help.css')
    .sass('resources/sass/index.scss', 'public/css/index.css')
    .sass('resources/sass/lk.scss', 'public/css/lk.css')
    .sass('resources/sass/news.scss', 'public/css/news.css')
    .sass('resources/sass/orderdetails.scss', 'public/css/orderdetails.css')
    .sass('resources/sass/orderlist.scss', 'public/css/orderlist.css')
    .sass('resources/sass/policy.scss', 'public/css/policy.css')
    .sass('resources/sass/profile.scss', 'public/css/profile.css')
    .sass('resources/sass/review.scss', 'public/css/review.css')
    .sass('resources/sass/review2.scss', 'public/css/review2.css')
    .sass('resources/sass/stock.scss', 'public/css/stock.css')
    .sass('resources/sass/stock2.scss', 'public/css/stock2.css')
    .sass('resources/sass/vacancies.scss', 'public/css/vacancies.css')
    .sass('resources/sass/waitlist.scss', 'public/css/waitlist.css')
    .sass('resources/sass/warranty.scss', 'public/css/warranty.css');
