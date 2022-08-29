<template>
    <div v-if="Object.keys(userOrder).length">
        <div class="content-row">
            <div class="content-cell">
                <div class="tgc-booking-views-page tgc-booking-steps-recipient">
                    <main class="tgc-booking-page-content">
                        <div class="main-content"><h1 class="title">2. Введите данные получателя</h1>

                                <div class="tgc-recipient-name">
                                    <div class="calculator-select-block">
                                        <div class="select-block-label">Получение в
                                        </div>
                                        <div class="tgc-calculator-select">
                                            <div @click="setShowReceiverGets(true)" class="tgc-calculator-select-country">
                                                <span
                                                    class="tgc-search-icon calculator-search-icon"
                                                    style="background-image: url(&quot;https://www.transfergo.com/static/images/search.svg&quot;);"></span><span
                                                class="tgc-country-flag calculator-flag-icon active"
                                                :style="getIconByCountrySlag(countryReceiverGets.slug)"></span>
                                                <input
                                                class="calculator-select-country-input from-country q-from-country"
                                                type="text"
                                                autocomplete="calculator-select-to-from-input"
                                                placeholder="Type country" :value="countryReceiverGets.slug + ' • ' + countryReceiverGets.currency.slug">
                                                <svg stroke="currentColor"
                                                     fill="currentColor" stroke-width="0"
                                                     viewBox="0 0 24 24"
                                                     class="country-arrow" height="1em"
                                                     width="1em"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                                </svg>
                                            </div>
                                            <div
                                                class="calculator-country-dropdown-wrapper enter-leave-transition-enter-done">
                                                <div
                                                    v-if="showReceiverGets"
                                                    v-click-outside="externalClickDropdown"
                                                    class="tgc-calculator-country-dropdown">
                                                    <button
                                                        @click="setCountryReceiverGets(country)"
                                                        v-for="country in countries" type="button"
                                                            class="tgc-calculator-select-dropdown-item country-dropdown-item"
                                                            data-qa="GB-GBP"><span
                                                        class="tgc-country-flag calculator-flag-icon"
                                                        :style="getIconByCountrySlag(country.slug)">
                                                    </span>
                                                        <span
                                                            class="country-name">{{country.name}}</span><span
                                                            class="currency-name">{{country.currency.slug}}</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="name-input-fields">
                                        <div class="name-input">
                                            <div class="tgc-text-input-updated">
                                                <label>Имя</label><input name="firstName"
                                                                   placeholder="Введите имя получателя" type="text"
                                                                   data-qa="input-firstName" maxlength="255" value=""
                                                                   v-model="firstName">
                                            </div>
                                        </div>
                                        <div class="name-input">
                                            <div class="tgc-text-input-updated"><label>Фамилия</label><input name="lastName"
                                                                   placeholder="Введите фамилию получателя" type="text"
                                                                   data-qa="input-lastName" maxlength="255" value=""
                                                                   v-model="lastName">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tgc-bank-details">
                                    <div class="tgc-lie-theme-section-heading">Вариант перевода:</div>
                                    <div>
                                        <div class="bank-details-row">
                                            <div class="tgc-select-with-search select-with-search-mb"
                                                 data-qa="select-bank-container">
                                                <div class="input-label">Тип оплаты</div>

                                                <div @click="setShowTypePay(true)" class="tgc-calculator-select-country">
                                                <input
                                                    class="calculator-select-country-input from-country q-from-country"
                                                    type="text"
                                                    autocomplete="calculator-select-to-from-input"
                                                    placeholder="Type country" :value="typePay">
                                                    <svg stroke="currentColor"
                                                         fill="currentColor" stroke-width="0"
                                                         viewBox="0 0 24 24"
                                                         class="country-arrow" height="1em"
                                                         width="1em"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                                    </svg>
                                                </div>

                                                <div
                                                    v-if="showTypePay"
                                                    v-click-outside="externalClickDropdown"
                                                    class="tgc-calculator-country-dropdown">
                                                    <button
                                                        @click="typePay = 'ДЕБЕТОВАЯ/КРЕДИТНАЯ КАРТА'; showTypePay = false;" type="button"
                                                        class="tgc-calculator-select-dropdown-item country-dropdown-item"
                                                        >
                                                        <span>ДЕБЕТОВАЯ/КРЕДИТНАЯ КАРТА</span>
                                                    </button>
                                                    <button
                                                        @click="typePay = 'НОМЕР СЧЕТА'; showTypePay = false;" type="button"
                                                        class="tgc-calculator-select-dropdown-item country-dropdown-item"
                                                    >
                                                        <span>НОМЕР СЧЕТА</span>
                                                    </button>
                                                </div>

                                            </div>

                                            <div class="name-input-fields">
                                                <div class="name-input">
                                                    <div class="tgc-text-input-updated">
                                                        <label>
                                                            <span v-if="this.typePay == 'Номер карты'">
                                                                ДЕБЕТОВАЯ/КРЕДИТНАЯ КАРТА
                                                            </span>
                                                            <span v-else>
                                                                НОМЕР СЧЕТА
                                                            </span>
                                                        </label><input name="firstName"
                                                                           placeholder="Введите имя получателя" type="text"
                                                                           data-qa="input-firstName" maxlength="255" value=""
                                                                           v-model="numberAccount">
                                                    </div>
                                                </div>
                                                <div class="name-input">
                                                    <div class="tgc-text-input-updated"><label>Название банка
                                                        </label><input name="lastName"
                                                                           placeholder="Введите название банка" type="text"
                                                                           data-qa="input-lastName" maxlength="255" value=""
                                                                           v-model="bankName">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="recipient-form-button-block">
                                    <div @click="backStep"
                                         class="recipient-button-back">
                                        <button class="tgc-button large block-mobile secondary" type="button"><span
                                            class="button-content">Назад</span></button>
                                    </div>
                                    <div class="recipient-button-continue">
                                        <button @click="sendDataOrder" class="tgc-button large blue block-mobile">
                                            <span
                                            class="button-content"><span class="label-text">Продолжить</span></span>
                                        </button>
                                    </div>
                                </div>
                        </div>
                    </main>
                    <aside class="tgc-page-sidebar tgc-booking-sidebar-summary">
                        <div class="tgc-page-sidebar-block has-header">
                            <div class="tgc-page-sidebar-block-header">Резюме перевода</div>
                            <div class="tgc-page-sidebar-block-content tgc-sidebar-international-content">
                                <div class="transfer-route">
                                    <div class="amount-block">
                                        <div class="amount" data-qa="sidebar-send-amount"><span
                                            autocomplete="amount-input" class="tgc-amount">{{userOrder.from_sum}}</span></div>
                                        <div class="flag-currency send"><span class="tgc-country-flag flag"
                                                                              :style="getIconByCountrySlag(userOrder.sending_from_country)"></span>
                                            <div data-qa="send-currency" class="currency">{{userOrder.sending_from_currency}}</div>
                                        </div>
                                    </div>
                                    <svg width="18" height="8" viewBox="0 0 18 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18 4l-8 4V0l8 4z"
                                              fill="#213647"></path>
                                        <path d="M10 4H0" stroke="#213647"></path>
                                    </svg>
                                    <div class="amount-block">
                                        <div class="amount" data-qa="sidebar-receive-amount"><span
                                            autocomplete="amount-input" class="tgc-amount">{{toSum}}</span></div>
                                        <div class="flag-currency receive"><span class="tgc-country-flag flag"
                                                                                 :style="getIconByCountrySlag(countryReceiverGets.slug)"></span>
                                            <div data-qa="receive-currency" class="currency">{{countryReceiverGets.currency.slug}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tgc-summary-block with-divider">
                                    <div class="label">Перевод</div>
                                    <div class="value-block">
                                        <div class="value ">{{userOrder.created_at}}</div>
                                        <div class="sub-value">Стандарт</div>
                                    </div>
                                </div>
                                <div class="tgc-summary-block with-divider">
                                    <div class="label">Курс обмена</div>
                                    <div class="value-block">
                                        <div class="value ">{{userOrder.exchange_rate}}</div>
                                    </div>
                                </div>
                                <div class="tgc-summary-block with-divider">
                                    <div class="label">Стоимость перевода</div>
                                    <div class="value-block">
                                        <div class="value discounted"><span autocomplete="amount-input"
                                                                            class="tgc-amount">0</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        'userOrder': {
            type: Object,
            default: {}
        },
        'orderId': {
            type: Number,
            default: 0
        }
    },
    created() {
        if (this.orderId != 0) {
            this.getOrder(this.orderId).then(res => {
                this.userOrder = res.data.data.order;

                this.getCountries().then(res => {
                    this.countries = res.data.data;
                    this.toSum = this.userOrder.to_sum
                    this.countryReceiverGets = this.countries.filter(
                        country => country.currency.slug == this.userOrder.receiver_get_currency
                    )[0]
                });
            })
        } else {
            this.getCountries().then(res => {
                this.countries = res.data.data;
                this.toSum = this.userOrder.to_sum
                this.countryReceiverGets = this.countries.filter(
                    country => country.currency.slug == this.userOrder.receiver_get_currency
                )[0]
            });
        }

    },
    data: () => ({
        countries: {},
        showReceiverGets: false,
        countryReceiverGets: null,
        firstName: '',
        lastName: '',
        typePay: 'ДЕБЕТОВАЯ/КРЕДИТНАЯ КАРТА',
        showTypePay: false,
        numberAccount: '',
        bankName: '',
        toSum: 0
    }),
    watch: {
        countryReceiverGets(newVal, oldVal) {
            this.toSum = this.convertCurrency(oldVal.currency, newVal.currency, this.toSum);
        }
    },
    computed: {
      isValid() {
          return (this.firstName != '' && this.lastName && this.numberAccount != '' && this.bankName != '' ) ? true : false;
      }
    },
    methods: {
        async getOrder(id) {
            return axios.get('/api/order/' + id);
        },
        convertCurrency(currencyFrom, currencyTo, sum) {
            let convertedSum = sum * currencyFrom.exchangesRates[currencyTo.slug];
            convertedSum = convertedSum.toFixed(2);
            return convertedSum;
        },
        setShowTypePay(val) {
            this.showTypePay = val
        },
        setCountryReceiverGets(country) {
            this.countryReceiverGets = country;
            this.showReceiverGets = false;
        },
        externalClickDropdown() {
            this.showTypePay = false
            this.showReceiverGets = false;
        },
        setShowReceiverGets(val) {
            this.showReceiverGets = val;
        },
        async getCountries() {
            return await axios.get('/api/countries');
        },
        backStep() {
            axios.get('/api/delete-order/' + this.userOrder.id);
            this.$emit('back', 1);
        },
        getIconByCountrySlag(countrySlug) {
            return 'background-image: url(/img/' + countrySlug + '.svg);';
        },
        sendDataOrder() {
            if (!this.isValid) {
                alert('Заполнены не все поля');
                return
            }

            const formData = new FormData();

            if (this.countryReceiverGets.slug == this.userOrder.sending_from_country) {
                formData.append( 'type_transaction', 'local');
            } else {
                formData.append( 'type_transaction', 'international');
            }

            formData.append('receiver_get_country', this.countryReceiverGets.slug);
            formData.append('receiver_get_currency', this.countryReceiverGets.currency.slug);
            formData.append('first_name', this.firstName);
            formData.append('last_name', this.lastName);
            formData.append( 'type_pay', this.typePay);
            formData.append( 'bank_name', this.bankName);
            formData.append( 'to_sum', this.toSum);

            if (this.typePay == 'ДЕБЕТОВАЯ/КРЕДИТНАЯ КАРТА') {
                formData.append( 'number_card', this.numberAccount);
            } else {
                formData.append( 'account_number', this.numberAccount);
            }
            formData.append( 'step', 3);

            axios.post('/api/update-order/' + this.userOrder.id, formData).then(res => {
                if (res.data.Ok) {
                    this.$emit('order', res.data.data.order);
                }
            });
        },
    }
}
</script>
