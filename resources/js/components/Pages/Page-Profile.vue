<template>
    <fragment>
        <svg-icons></svg-icons>
        <div id="top-level" class="site-container">
            <aside-main></aside-main>
            <header-main :user="auth_user"></header-main>
            <main>
                <div class="bread-crumbs bread-crumbs--lk">
                    <a href="index">Главная</a>
                    <a href="lk">Личный кабинет</a>
                    <a href="profile" aria-current="location">Личные данные</a>
                </div>
                <div class="lk">
                    <h1 class="title title-lk wrapper">Личный кабинет</h1>
                    <div class="lk__container">
                        <div class="lk__left">
                            <div class="lk__left-inner">
                                <div class="lk__name">
                                    <p>Александр Меладзе</p>
                                    <div>Бонусный счет: <span>12.256</span></div>
                                </div>
                                <div class="lk__nav">
                                    <a class="lk__nav-link link arrow arrow--right" href="lk">Профиль</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="profile">Личные данные</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="orderlist">Мои заказы</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="favorite">Избранное</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="waitlist">Лист ожидания</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="fblist">Мои отзывы</a>
                                    <a class="lk__nav-link link arrow arrow--right" href="help">Помощь</a>
                                    <a class="lk__logout" href="index">Выход</a>
                                </div>
                            </div>
                        </div>
                        <div class="lk__main">
                            <form class="form form--private lk-form" method="post" autocomplete="on">
                                <h2 class="title" data-edit="Редактирование профиля">Персональные данные</h2>
                                <fieldset class="lk-form__inner lk-form__inner--private" disabled>
                                    <legend class="visually-hidden">Персональные данные</legend>
                                    <div class="lk-form__private-block">
                                        <label class="form__field-wrap">
                                            Имя
                                            <input type="text" placeholder="Введите ваше имя" name="name" data-validate required
                                                   value="Александр">
                                        </label>
                                        <label class="form__field-wrap">
                                            Фамилия
                                            <input type="text" placeholder="Введите ваше имя" name="lastname" data-validate
                                                   required
                                                   value="Меладзе">
                                        </label>
                                        <label class="form__field-wrap">
                                            Email
                                            <input type="text" placeholder="Введите ваше email" name="email"
                                                   data-validate="email" required
                                                   value="ameladze@gmail.com">
                                        </label>
                                        <label class="form__field-wrap">
                                            Телефон
                                            <input type="text" placeholder="Введите номер телефона" name="phone"
                                                   data-validate="phone" required
                                                   value="+7(812)812-12-12">
                                        </label>
                                    </div>
                                    <div class="lk-form__private-block">
                                        <div class="lk-form__birthday">
                                            <b class="lk-form__birthday-title">Дата рождения</b>
                                            <div class="lk-form__birthday-inner">
                                                <label class="form__select" aria-label="дата рождения">
                        <span class="lk-form__select-wrap arrow arrow--down">
                          <select name="day">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                        </span>
                                                </label>
                                                <label class="form__select" aria-label="месяц рождения">
                        <span class="lk-form__select-wrap arrow arrow--down">
                          <select name="month">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>
                        </span>
                                                </label>
                                                <label class="form__select" aria-label="год рождения">
                        <span class="lk-form__select-wrap arrow arrow--down">
                          <select name="year">
                            <option value="1900">1900</option>
                            <option value="1901">1901</option>
                            <option value="1902">1902</option>
                            <option value="1903">1903</option>
                            <option value="1904">1904</option>
                            <option value="1905">1905</option>
                            <option value="1906">1906</option>
                            <option value="1907">1907</option>
                            <option value="1908">1908</option>
                            <option value="1909">1909</option>
                            <option value="1910">1910</option>
                            <option value="1911">1911</option>
                            <option value="1912">1912</option>
                            <option value="1913">1913</option>
                            <option value="1914">1914</option>
                            <option value="1915">1915</option>
                            <option value="1916">1916</option>
                            <option value="1917">1917</option>
                            <option value="1918">1918</option>
                            <option value="1919">1919</option>
                            <option value="1920">1920</option>
                            <option value="1921">1921</option>
                            <option value="1922">1922</option>
                            <option value="1923">1923</option>
                            <option value="1924">1924</option>
                            <option value="1925">1925</option>
                            <option value="1926">1926</option>
                            <option value="1927">1927</option>
                            <option value="1928">1928</option>
                            <option value="1929">1929</option>
                            <option value="1930">1930</option>
                            <option value="1931">1931</option>
                            <option value="1932">1932</option>
                            <option value="1933">1933</option>
                            <option value="1934">1934</option>
                            <option value="1935">1935</option>
                            <option value="1936">1936</option>
                            <option value="1937">1937</option>
                            <option value="1938">1938</option>
                            <option value="1939">1939</option>
                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998" selected>1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                          </select>
                        </span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="form__select">
                                            Пол
                                            <span class="lk-form__select-wrap mt-15 arrow arrow--down">
                      <select name="sex">
                        <option value="man">Мужской</option>
                        <option value="woman">Женский</option>
                      </select>
                    </span>
                                        </label>
                                        <label class="form__select">
                                            Семейное положение
                                            <span class="lk-form__select-wrap mt-15 arrow arrow--down">
                      <select name="family">
                        <option value="married">Женат/Замужем</option>
                        <option value="single">Холост/Не замужем</option>
                        <option value="divorced">Разведен(а)</option>
                        <option value="widow">Вдовец/Вдова</option>
                        <option value="only-sex">Раздельное проживание</option>
                        <option value="so-so">Гражданский брак</option>
                      </select>
                    </span>
                                        </label>
                                        <label class="form__select">
                                            Занятость
                                            <span class="lk-form__select-wrap mt-15 arrow arrow--down"><select name="busyness">
                        <option value="job">Работаю</option>
                        <option value="unemployed">Безработный</option>
                        <option value="student">Учусь</option>
                        <option value="householder">Домохозяйка</option>
                        <option value="householder">Домохозяин</option>
                        <option value="pensioner">Пенсионер</option>
                      </select>
                    </span>
                                        </label>
                                    </div>
                                    <div class="lk-form__buttons">
                                        <button class="btn btn-purple lk-form__save" type="button">Сохранить</button>
                                        <button class="btn btn-white lk-form__cancel" type="reset">Отменить</button>
                                        <button class="lk-form__remove" type="button">
                                            Удалить учетную запись
                                            <svg width="18" height="18">
                                                <use href="#icon-delete"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </fieldset>
                                <button class="btn btn-white lk-btn-change lk-btn-change--private lk-form__change"
                                        type="button">
                                    Изменить данные
                                    <svg width="18" height="18">
                                        <use href="#icon-edit"></use>
                                    </svg>
                                </button>
                            </form>
                            <form class="form lk-form" method="post" autocomplete="on">
                                <h2 class="title" data-edit="Редактирование профиля">Публичные данные</h2>
                                <fieldset class="lk-form__inner lk-form__inner--public" disabled>
                                    <legend class="visually-hidden">Публичные данные</legend>
                                    <label class="form__field-wrap">
                                        Имя
                                        <input type="text" placeholder="Введите ваше имя" name="name" data-validate required
                                               value="Александр">
                                    </label>
                                    <label class="form__field-wrap">
                                        Город
                                        <input type="text" placeholder="Введите ваше имя" name="city" data-validate required
                                               value="Санкт-Петербург">
                                    </label>
                                    <div class="lk-form__buttons">
                                        <button class="btn btn-purple lk-form__save" type="button">Сохранить</button>
                                        <button class="btn btn-white lk-form__cancel" type="reset">Отменить</button>
                                    </div>
                                </fieldset>
                                <button class="btn btn-white lk-btn-change lk-btn-change--private lk-form__change"
                                        type="button">
                                    Изменить данные
                                    <svg width="18" height="18">
                                        <use href="#icon-edit"></use>
                                    </svg>
                                </button>
                            </form>
                            <form class="form lk-form lk-form--password" method="post" autocomplete="on">
                                <h2 class="title" data-edit="Смена пароля">Пароль</h2>
                                <fieldset class="lk-form__inner lk-form__inner--password" disabled>
                                    <legend class="visually-hidden">Пароль</legend>
                                    <span class="form__field-wrap">
                  <label class="form__field-password">
                    <input type="password" placeholder="••••••" name="password" data-validate="password" required>
                    <span class="show-password">
                      <svg width="20" height="20">
                        <use href="#icon-password-eye"></use>
                      </svg>
                    </span>
                  </label>
                </span>
                                    <span class="form__field-wrap">
                  Введите новый пароль
                  <label class="form__field-password">
                    <input type="password" placeholder="Введите новый пароль" name="password" data-pass-origin
                           data-validate="password" required>
                    <span class="show-password">
                      <svg width="20" height="20">
                        <use href="#icon-password-eye"></use>
                      </svg>
                    </span>
                  </label>
                </span>
                                    <span class="form__field-wrap">
                  Повторите новый пароль
                  <label class="form__field-password password-repeat">
                    <input type="password" placeholder="Повторите ввод пароля" name="password-rep" data-pass-repeat
                           data-validate="password" required>
                    <span class="show-password">
                      <svg width="20" height="20">
                        <use href="#icon-password-eye"></use>
                      </svg>
                    </span>
                  </label>
                </span>
                                    <div class="lk-form__buttons">
                                        <button class="btn btn-purple lk-form__save" type="button">Сохранить</button>
                                        <button class="btn btn-white lk-form__cancel" type="reset">Отменить</button>
                                    </div>
                                </fieldset>
                                <div class="lk-form__change-wrap">
                                    <button class="btn btn-white lk-btn-change lk-btn-change--border lk-form__change"
                                            type="button">
                                        Изменить пароль
                                    </button>
                                </div>
                            </form>
                            <form class="form lk-form" method="post" autocomplete="on">
                                <h2 class="title">Мои адреса</h2>
                                <div class="lk-form__address-inner">
                                    <div class="lk-form__address">
                                        <p class="form__field-wrap ">
                                            Санкт-Петербург, ул. Лиговский проспект, д. 20, стр. 42, под. 1, кв. 254
                                        </p>
                                        <div class="lk-form__edit">
                                            <button class="lk-form__address-change" type="button" aria-label="Изменить адрес"
                                                    data-modal-open="add-address">
                                                <svg width="24" height="24">
                                                    <use href="#icon-edit"></use>
                                                </svg>
                                            </button>
                                            <button class="lk-form__address-delete" type="button" aria-label="Удалить адрес">
                                                <svg width="24" height="24">
                                                    <use href="#icon-delete"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="lk-form__add-block">
                                        <button class="btn btn-white lk-btn-change lk-btn-change--border lk-form__add-address"
                                                type="button"
                                                data-modal-open="add-address">Добавить новый адрес
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="lk__social">
                                <strong class="title">Ваши привязанные соцсети</strong>
                                <ul class="social-icons lk__social-list">
                                    <li>
                                        <a class=active href="#!" aria-label="наша страница фейсбук">
                                            <svg width="40" height="40">
                                                <use href="#icon-fb"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=active href="#!" aria-label="наша страница в контакте">
                                            <svg width="40" height="40">
                                                <use href="#icon-vk"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" aria-label="наша страница твиттер">
                                            <svg width="40" height="40">
                                                <use href="#icon-tw"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" aria-label="наша страница одноклассники">
                                            <svg width="40" height="40">
                                                <use href="#icon-ok"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" aria-label="наша страница гугл плюс">
                                            <svg width="40" height="40">
                                                <use href="#icon-gp"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" aria-label="наша страница майл ру">
                                            <svg width="40" height="40">
                                                <use href="#icon-mr"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lk__mailing">
                                <strong class="title">Управление подписками</strong>
                                <label class="form__checkbox-wrap">
                                    <input class="visually-hidden" type="checkbox" name="mailing">
                                    <span class="checkbox-item"></span>
                                    Согласен на рассылку по электронной почте
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <footer-main></footer-main>
        <template id="template">
            <!-- На всех страницах -->
            <modal-login></modal-login>
            <modal-fast-order></modal-fast-order>
            <modal-register></modal-register>
            <modal-recover></modal-recover>
            <modal-recover-next></modal-recover-next>
            <modal-call></modal-call>
            <modal-location></modal-location>
            <modal-search-header></modal-search-header>
            <modal-success-order></modal-success-order>
            <modal-fail></modal-fail>
            <modal-error></modal-error>
            <modal-subscribe></modal-subscribe>
            <modal-help></modal-help>
            <!-- Только на этой странице -->
            <modal-add-address></modal-add-address>
        </template>
        <a class="to-top arrow arrow--up" href="#top-level" aria-label="подняться в начало страницы"></a>
        <cookies></cookies>
    </fragment>
</template>

<script>
export default {
    name: "Page-Profile",
    props:{
        auth_user:{
            default: null
        }
    }
}
</script>

<style scoped>

</style>
