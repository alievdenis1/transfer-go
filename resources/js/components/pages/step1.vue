<template>
    <div class="content-row">
        <div class="content-cell">
            <div class="tgc-booking-steps-transfer">
                <div class="tgc-booking-views-page">
                    <h1 class="title">1. Transfer details</h1>
                    <div class="calculator-container">
                        <div class="full-height-container">
                            <div class="tgc-calculator lie-calculator">
                                <section class="tgc-tabs calculator-tabs">
                                    <ul>
                                        <li
                                            @click="setLocal(false)"
                                            tabindex="0" role="button"
                                            class="tgc-tab-label"
                                            :class="{active: !isLocal}"
                                            data-qa="transfer-international"><span>International</span>
                                        </li>
                                        <li
                                            @click="setLocal(true)"
                                            tabindex="0" role="button" class="tgc-tab-label"
                                            :class="{active: isLocal}"
                                            data-qa="transfer-local"><span>Local</span></li>
                                    </ul>
                                </section>
                                <div class="calculator-content" v-if="!isLocal">
                                    <div v-if="!isMoreMinSum" class="calculator-alert alert-warning">
                                        <svg height="24" viewBox="0 0 24 24" width="24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M11 15h2v2h-2zm0-8h2v6h-2zm.99-5C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path>
                                        </svg>
                                        The amount is too small to transfer
                                    </div>
                                    <div class="calculator-select-block">
                                        <div class="select-block-label">Sending from</div>
                                        <div class="tgc-calculator-select">

                                            <div @click="setShowSendingFrom(true)" class="tgc-calculator-select-country">
                                                <span
                                                class="tgc-search-icon calculator-search-icon"
                                                style="background-image: url(&quot;https://www.transfergo.com/static/images/search.svg&quot;);"></span><span
                                                class="tgc-country-flag calculator-flag-icon active"
                                                :style="getIconByCountrySlag(sendingFrom.slug)"></span><input
                                                class="calculator-select-country-input from-country q-from-country"
                                                type="text"
                                                autocomplete="calculator-select-to-from-input"
                                                placeholder="Type country" :value="getNameCountryCurrency(sendingFrom)">
                                                <svg stroke="currentColor"
                                                     fill="currentColor" stroke-width="0"
                                                     viewBox="0 0 24 24"
                                                     class="country-arrow" height="1em"
                                                     width="1em"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                                </svg>
                                                <button
                                                    @click.stop="revert"
                                                    data-qa="corridor-switcher"
                                                        class="_3Z2PTREOOZ5P5XTz-cDnCm SFlGlyNVQEB2N-tDRrOzH corridor-switcher"
                                                        type="button">
                                                    <svg width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle
                                                            cx="12" cy="12" r="12"
                                                                transform="rotate(90 12 12)"
                                                                fill="#317FF5"></circle>
                                                        <path
                                                            d="M15 12v6M9 12V6M18 15l-3 3-3-3M6 9l3-3 3 3"
                                                            stroke="#fff" stroke-width="1.4"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div
                                                class="calculator-country-dropdown-wrapper enter-leave-transition-enter-done">
                                                <div
                                                    v-if="showSendingFrom"
                                                    v-click-outside="externalClickDropdown"
                                                    class="tgc-calculator-country-dropdown">
                                                    <button v-for="country in countries" @click="setCountrySendingFrom(country)" type="button"
                                                            class="tgc-calculator-select-dropdown-item country-dropdown-item"
                                                            data-qa="GB-GBP"><span
                                                        class="tgc-country-flag calculator-flag-icon"
                                                        :class="country.currency.slug"
                                                        :style="getIconByCountrySlag(country.slug)">
                                                    </span>
                                                        <span
                                                        class="country-name">{{country.name}}</span><span
                                                        class="currency-name">{{country.currency.slug}}</span>
                                                    </button>
                                                </div>
                                            </div>


                                            <div
                                                class="tgc-amount-currency-input-container">
                                                <input inputmode="decimal"
                                                       autocomplete="amount-input"
                                                       class="tgc-amount tgc-calculator-select-amount q-calculator-from-amount-select amount-input no-currency-selection"
                                                       type="number" v-model="sendingFromSum"></div>
                                        </div>
                                    </div>

                                    <div class="calculator-select-block">
                                        <div class="select-block-label">Receiver gets in
                                        </div>
                                        <div class="tgc-calculator-select">

                                            <div @click="setShowReceiverGets(true)" class="tgc-calculator-select-country">
                                                <span
                                                    class="tgc-search-icon calculator-search-icon"
                                                    style="background-image: url(&quot;https://www.transfergo.com/static/images/search.svg&quot;);"></span><span
                                                class="tgc-country-flag calculator-flag-icon active"
                                                :style="getIconByCountrySlag(receiverGets.slug)"></span><input
                                                class="calculator-select-country-input from-country q-from-country"
                                                type="text"
                                                autocomplete="calculator-select-to-from-input"
                                                placeholder="Type country" :value="getNameCountryCurrency(receiverGets)">
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
                                                    <button v-for="country in countries" @click="setCountryReceiverGets(country)" type="button"
                                                            class="tgc-calculator-select-dropdown-item country-dropdown-item"
                                                            data-qa="GB-GBP"><span
                                                        class="tgc-country-flag calculator-flag-icon"
                                                        :class="country.currency.slug"
                                                        :style="getIconByCountrySlag(country.slug)">
                                                    </span>
                                                        <span
                                                            class="country-name">{{country.name}}</span><span
                                                            class="currency-name">{{country.currency.slug}}</span>
                                                    </button>
                                                </div>
                                            </div>


                                            <div
                                                class="tgc-amount-currency-input-container">
                                                <input inputmode="decimal"
                                                       autocomplete="amount-input"
                                                       class="tgc-amount tgc-calculator-select-amount q-calculator-from-amount-select amount-input no-currency-selection"
                                                       type="number" v-model="receiverGetsSum"></div>
                                        </div>
                                    </div>

                                    <div class="tgc-calculator-fees">
                                        <div class="rate-block">1 GBP = 705.16087 NGN</div>
                                        <div class="fee-block">
                                            <div class="tgc-simple-tooltip">
                                                <div class="tooltip--container">
                                                    <div class="tooltip--text">Delivery fee
                                                        included
                                                    </div>
                                                    <div class="tooltip--tip"></div>
                                                </div>
                                                <div class="tooltip--source"><span
                                                    class="delivery-fee text-medium fee-hover">Delivery fee: <span
                                                    autocomplete="amount-input"
                                                    class="tgc-amount">£0.00</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <advantage-banner/>
                                    <choose-deliver/>
                                </div>
                                <div class="calculator-content calculator-content-local" v-if="isLocal">
                                    <div class="calculator-select-block">
                                        <div v-if="!isMoreMinSum" class="calculator-alert alert-warning">
                                            <svg height="24" viewBox="0 0 24 24" width="24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M11 15h2v2h-2zm0-8h2v6h-2zm.99-5C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path>
                                            </svg>
                                            The amount is too small to transfer
                                        </div>
                                        <div class="select-block-label">Sending from</div>
                                        <div class="tgc-calculator-select">

                                            <div @click="setShowOutRegion(true)" class="tgc-calculator-select-country">
                                                <span
                                                    class="tgc-search-icon calculator-search-icon"
                                                    style="background-image: url(&quot;https://www.transfergo.com/static/images/search.svg&quot;);"></span><span
                                                class="tgc-country-flag calculator-flag-icon active"
                                                :style="getIconByCountrySlag(outRegion.slug)"></span><input
                                                class="calculator-select-country-input from-country q-from-country"
                                                type="text"
                                                autocomplete="calculator-select-to-from-input"
                                                placeholder="Type country" :value="getNameCountryCurrency(outRegion)">
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
                                                    v-if="showOutRegion"
                                                    v-click-outside="externalClickDropdown"
                                                    class="tgc-calculator-country-dropdown">
                                                    <button v-for="country in countries" @click="setCountryOutRegion(country)" type="button"
                                                            class="tgc-calculator-select-dropdown-item country-dropdown-item"
                                                            data-qa="GB-GBP"><span
                                                        class="tgc-country-flag calculator-flag-icon"
                                                        :class="country.currency.slug"
                                                        :style="getIconByCountrySlag(country.slug)">
                                                    </span>
                                                        <span
                                                            class="country-name">{{country.name}}</span><span
                                                            class="currency-name">{{country.currency.slug}}</span>
                                                    </button>
                                                </div>
                                            </div>

                                            <div
                                                class="tgc-amount-currency-input-container">
                                                <input inputmode="decimal"
                                                       autocomplete="amount-input"
                                                       class="tgc-amount tgc-calculator-select-amount q-calculator-from-amount-select amount-input no-currency-selection"
                                                       type="number" v-model="outRegionSum"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper continue" >
                                <button
                                    @click="sendDataOrder"
                                    class="_1dZ3_E1uyq1SDOhbJ9YkTB MuiButton-root MuiButton-contained _2_O5344ddmoGlkcd6CGbOJ MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-disableElevation MuiButton-fullWidth MuiButtonBase-root  css-a2exai"
                                    :class="{'tgc-delivery-option disabled': !isMoreMinSum}"
                                    tabindex="0"
                                    type="button"
                                    data-qa="continue-button">
                                    <span class="">Continue</span>
                                </button>
                            </div>
                        </div>
                        <div class="tgc-payment-option-badges">
                            <div class="tgc-lie-theme-section-heading section-heading">
                                Available payment methods
                            </div>
                            <div class="options-heading">
                                <div>Available payment methods</div>
                            </div>
                            <div class="options">
                                <div class="tgc-payment-option-badge">
                                    <div class="option-icon">
                                        <svg width="28" height="24" viewBox="0 0 28 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g id="Page-1" stroke="none" stroke-width="1"
                                               fill="none" fill-rule="evenodd">
                                                <g id="1.-Transfer-details"
                                                   transform="translate(-805 -792)"
                                                   fill="#5F6473" fill-rule="nonzero">
                                                    <g id="credit-card"
                                                       transform="translate(805 792)">
                                                        <path
                                                            d="M2.633 9.653v1.201l-1.898.742-.62-1.484a1.573 1.573 0 01.876-2.05L21.065.112c.84-.319 1.789.07 2.117.847l.62 1.485L10.7 7.638H4.714c-1.168 0-2.08.92-2.08 2.015zm0 6.431V13.47l-.949.389.95 2.226zm23.36-8.446l-1.241-2.933-7.446 2.933h8.687zM28 9.653V22.41c0 .883-.73 1.59-1.642 1.59H4.714c-.913 0-1.643-.707-1.643-1.59V9.653c0-.884.73-1.59 1.643-1.59h21.68c.876.035 1.606.742 1.606 1.59zm-17.92 2.085a.682.682 0 00-.694-.672h-3.76c-.365 0-.693.283-.693.672v2.438c0 .353.292.671.693.671h3.76c.365 0 .693-.282.693-.671v-2.438z"
                                                            id="Shape"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="option-info">
                                        <div class="option-name">Debit or credit card</div>
                                        <div class="option-decription"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="secure-payment-block">
                            <div class="tgc-secure-payment">
                                <div class="text">Your information is encrypted, private and
                                    secure.
                                </div>
                                <div class="logo-wrapper">
                                    <div class="secure-payment-logo"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import vClickOutside from 'v-click-outside';
import advantageBanner from '../molecules/advantagesBanner';
import chooseDeliver from '../molecules/chooseDeliver';


export default {
    components: {
        advantageBanner,
        chooseDeliver,
    },
    directives: {
        clickOutside: vClickOutside.directive
    },
    props: ['userData'],
    data: () => ({
        countries: {},
        sendingFrom: null,
        receiverGets: null,
        outRegion: null,
        showSendingFrom: false,
        showReceiverGets: false,
        showOutRegion: false,
        isLocal: false,
        sendingFromSum: 300,
        receiverGetsSum: 0,
        outRegionSum: 300,
        minSum: 0,
    }),
    created() {
        this.getCountries().then(res => {
            this.countries = res.data.data;
            this.sendingFrom = this.countries[0];
            this.receiverGets = this.countries[2];
            this.outRegion = this.countries[0];

            this.receiverGetsSum = this.convertCurrency(this.sendingFrom.currency, this.receiverGets.currency, this.sendingFromSum);
        });
    },
    watch: {
        userData(newVal) {
            this.minSum = newVal.min_payment;
        },
        sendingFromSum(newVal) {
            this.receiverGetsSum = this.convertCurrency(this.sendingFrom.currency, this.receiverGets.currency, newVal);
        },
        receiverGetsSum(newVal) {
            const convertedSum = this.convertCurrency(this.receiverGets.currency, this.sendingFrom.currency, newVal);
            this.sendingFromSum = convertedSum;
        },
        sendingFrom(newVal, oldVal) {
            this.sendingFromSum = this.convertCurrency(oldVal.currency, newVal.currency, this.sendingFromSum);
        },
        receiverGets(newVal, oldVal) {
            this.receiverGetsSum = this.convertCurrency(oldVal.currency, newVal.currency, this.receiverGetsSum);
        }
    },
    computed: {
        isMoreMinSum() {
            if (this.sendingFrom == null) {
                return false;
            }
            if (!this.isLocal) {
                const minSumSendingFrom = this.sendingFrom.currency.equalDollar * this.minSum;
                return this.sendingFromSum > minSumSendingFrom;
            } else {
                const minSumSendingFrom = this.outRegion.currency.equalDollar * this.minSum;
                return this.outRegionSum > minSumSendingFrom;
            }
        }
    },
    methods: {
        sendDataOrder() {
            const formData = new FormData();
            formData.append( 'user_id', this.userData.id);

            axios.post('api/create-order', formData).then(res => {

            });
        },
        revert() {
            this.sendingFromSum = this.receiverGetsSum;
            const sendingFrom = this.sendingFrom;
            this.sendingFrom = this.receiverGets
            this.receiverGets = sendingFrom;
        },
        convertCurrency(currencyFrom, currencyTo, sum) {
            let convertedSum = sum * currencyFrom.exchangesRates[currencyTo.slug];
            convertedSum = convertedSum.toFixed(2);
            return convertedSum;
        },
        async getCountries() {
            return await axios.get('api/countries');
        },
        getNameCountryCurrency(country) {
            return country.slug + ' • ' + country.currency.slug
        },
        getIconByCountrySlag(countrySlug) {
            return 'background-image: url(https://www.transfergo.com/static/images/flags/svg/' + countrySlug + '.svg);';
        },
        externalClickDropdown() {
            this.showSendingFrom = false;
            this.showReceiverGets = false;
            this.showOutRegion = false;
        },
        setShowSendingFrom(val) {
            this.showSendingFrom = val;
        },
        setShowReceiverGets(val) {
            this.showReceiverGets = val;
        },
        setShowOutRegion(val) {
            this.showOutRegion = val;
        },
        setCountrySendingFrom(country) {
            this.showSendingFrom = false;
            this.sendingFrom = country
        },
        setCountryReceiverGets(country) {
            this.showReceiverGets = false;
            this.receiverGets = country
        },
        setCountryOutRegion(val) {
            this.showOutRegion = false;
            this.outRegion = val;
        },
        setLocal(val) {
            this.isLocal = val
        }
    }
}
</script>
