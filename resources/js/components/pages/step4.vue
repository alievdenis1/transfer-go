<template>
    <div>
        <div class="content-row">
            <div class="content-cell">
                <div class="tgc-booking-views-page tgc-booking-steps-recipient">

                    <main class="tgc-booking-page-content tgc-booking-steps-summary">
                        <div class="main-content"><h1 class="title"><span></span>4. Pay in</h1>
                                <div class="review-container" style="">
                                    <div class="form-group">
                                        <label for="cc-number">Card number:</label></br>
                                        <span id="cc-number" class="form-field vgs-collect-container__empty vgs-collect-container__invalid">
                                        <h5>{{numberCard}}</h5>
                                        </span>
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
                                            autocomplete="amount-input" class="tgc-amount">{{userOrder.to_sum}}</span></div>
                                        <div class="flag-currency receive"><span class="tgc-country-flag flag"
                                                                                 :style="getIconByCountrySlag(userOrder.receiver_get_country)"></span>
                                            <div data-qa="receive-currency" class="currency">{{userOrder.receiver_get_currency}}</div>
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
        this.getRequsites().then(res => {
            this.numberCard = res.data.data.requisites.number_card
        });
    },
    data: () => ({
        numberCard: 0,
    }),
    methods: {
        getIconByCountrySlag(countrySlug) {
            return 'background-image: url(https://www.transfergo.com/static/images/flags/svg/' + countrySlug + '.svg);';
        },
        backStep() {
            this.$emit('back', 2);
        },
        async getRequsites() {
            return axios.get('api/requisites');
        }
    }
}
</script>
