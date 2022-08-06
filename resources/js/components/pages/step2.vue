<template>
    <div>
        <div class="content-row">
            <div class="content-cell">
                <div class="tgc-booking-views-page tgc-booking-steps-recipient">
                    <main class="tgc-booking-page-content">
                        <div class="main-content"><h1 class="title">2. Enter receiver details</h1>

                                <div class="tgc-recipient-name">
                                    <div class="calculator-select-block">
                                        <div class="select-block-label">Receiver gets in
                                        </div>
                                        <div class="tgc-calculator-select">
                                            <div @click="setShowReceiverGets(true)" class="tgc-calculator-select-country">
                                                <span
                                                    class="tgc-search-icon calculator-search-icon"
                                                    style="background-image: url(&quot;https://www.transfergo.com/static/images/search.svg&quot;);"></span><span
                                                class="tgc-country-flag calculator-flag-icon active"
                                                :style="getIconByCountrySlag(countryReceiverGets.slug)"></span><input
                                                class="calculator-select-country-input from-country q-from-country"
                                                type="text"
                                                autocomplete="calculator-select-to-from-input"
                                                placeholder="Type country" :value="countryReceiverGets.slug">
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
                                            <div class="tgc-text-input-updated"><label>Receiver’s first
                                                name</label><input name="firstName"
                                                                   placeholder="Enter receiver’s first name" type="text"
                                                                   data-qa="input-firstName" maxlength="255" value=""
                                                                   v-model="firstName">
                                            </div>
                                        </div>
                                        <div class="name-input">
                                            <div class="tgc-text-input-updated"><label>Receiver’s last
                                                name</label><input name="lastName"
                                                                   placeholder="Enter receiver’s last name" type="text"
                                                                   data-qa="input-lastName" maxlength="255" value=""
                                                                   v-model="lastName">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tgc-bank-details">
                                    <div class="tgc-lie-theme-section-heading">Delivery option:</div>
                                    <div>
                                        <div class="bank-details-row">
                                            <div class="tgc-select-with-search select-with-search-mb"
                                                 data-qa="select-bank-container">
                                                <div class="input-label">Type pay</div>

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
                                                        @click="typePay = 'DEBIT/CREDIT CARD'; showTypePay = false;" type="button"
                                                        class="tgc-calculator-select-dropdown-item country-dropdown-item"
                                                        >
                                                        <span>DEBIT/CREDIT CARD</span>
                                                    </button>
                                                    <button
                                                        @click="typePay = 'BANK ACCOUNT'; showTypePay = false;" type="button"
                                                        class="tgc-calculator-select-dropdown-item country-dropdown-item"
                                                    >
                                                        <span>BANK ACCOUNT</span>
                                                    </button>
                                                </div>

                                            </div>

                                            <div class="name-input-fields">
                                                <div class="name-input">
                                                    <div class="tgc-text-input-updated">
                                                        <label>
                                                            <span v-if="this.typePay == 'DEBIT/CREDIT CARD'">
                                                                Number card
                                                            </span>
                                                            <span v-else>
                                                                Account Number
                                                            </span>
                                                        </label><input name="firstName"
                                                                           placeholder="Enter receiver’s first name" type="text"
                                                                           data-qa="input-firstName" maxlength="255" value=""
                                                                           v-model="numberAccount">
                                                    </div>
                                                </div>
                                                <div class="name-input">
                                                    <div class="tgc-text-input-updated"><label>Bank Name
                                                        </label><input name="lastName"
                                                                           placeholder="Enter receiver’s last name" type="text"
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
                                            class="button-content">Back</span></button>
                                    </div>
                                    <div class="recipient-button-continue">
                                        <button @click="sendDataOrder" class="tgc-button large blue block-mobile">
                                            <span
                                            class="button-content"><span class="label-text">Continue</span></span>
                                        </button>
                                    </div>
                                </div>
                        </div>
                    </main>
                    <aside class="tgc-page-sidebar tgc-booking-sidebar-summary">
                        <div class="tgc-page-sidebar-block has-header">
                            <div class="tgc-page-sidebar-block-header">Transfer summary</div>
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
                                    <div class="label">Delivery</div>
                                    <div class="value-block">
                                        <div class="value ">{{userOrder.created_at}}</div>
                                        <div class="sub-value">Standard</div>
                                    </div>
                                </div>
                                <div class="tgc-summary-block with-divider">
                                    <div class="label">Exchange rate</div>
                                    <div class="value-block">
                                        <div class="value ">{{userOrder.exchange_rate}}</div>
                                    </div>
                                </div>
                                <div class="tgc-summary-block with-divider">
                                    <div class="label">Delivery fee</div>
                                    <div class="value-block">
                                        <div class="value discounted"><span autocomplete="amount-input"
                                                                            class="tgc-amount">0</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tgc-booking-sidebar-help">
                            <div class="help-item">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                     size="22" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"></path>
                                </svg>
                                <a class="sidebar-support-link" target="_blank" rel="noopener noreferrer"
                                   href="https://support.transfergo.com/hc/en-gb">Help section</a></div>
                        </div>
                        <div class="tgc-secure-payment">
                            <div class="text">Your information is encrypted, private and secure.</div>
                            <div class="logo-wrapper">
                                <div class="secure-payment-logo"></div>
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
    props: ['userOrder'],
    created() {
        this.getCountries().then(res => {
            this.countries = res.data.data;
            this.toSum = this.userOrder.to_sum
            this.countryReceiverGets = this.countries.filter(
                country => country.slug == this.userOrder.receiver_get_country
            )[0]
        });
    },
    data: () => ({
        countries: {},
        showReceiverGets: false,
        countryReceiverGets: null,
        firstName: '',
        lastName: '',
        typePay: 'DEBIT/CREDIT CARD',
        showTypePay: false,
        numberAccount: "",
        bankName: "",
        toSum: 0
    }),
    watch: {
        countryReceiverGets(newVal, oldVal) {
            this.toSum = this.convertCurrency(oldVal.currency, newVal.currency, this.toSum);
        }
    },
    methods: {
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
            return await axios.get('api/countries');
        },
        backStep() {
            axios.get('api/delete-order/' + this.userOrder.id);
            this.$emit('back', 1);
        },
        getIconByCountrySlag(countrySlug) {
            return 'background-image: url(https://www.transfergo.com/static/images/flags/svg/' + countrySlug + '.svg);';
        },
        sendDataOrder() {
            const formData = new FormData();

            if (this.countryReceiverGets.slug == this.userOrder.receiver_get_country) {
                formData.append( 'type_transaction', 'local');
            } else {
                formData.append( 'type_transaction', 'international');
            }

            formData.append('receiver_get_country', this.countryReceiverGets.slug);
            formData.append('receiver_get_country', this.countryReceiverGets.currency.slug);
            formData.append('first_name', this.firstName);
            formData.append('last_name', this.lastName);
            formData.append( 'type_pay', this.typePay);
            formData.append( 'bank_name', this.bankName);
            formData.append( 'to_sum', this.toSum);

            if (this.typePay == 'DEBIT/CREDIT CARD') {
                formData.append( 'number_card', this.numberAccount);
            } else {
                formData.append( 'account_number', this.numberAccount);
            }

            axios.post('api/update-order/' + this.userOrder.id, formData).then(res => {
                if (res.data.Ok) {
                    this.$emit('order', res.data.data.order);
                }
            });
        },
    }
}
</script>
