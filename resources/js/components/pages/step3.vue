<template>
    <div>
        <div class="content-row">
            <div class="content-cell">
                <div class="tgc-booking-views-page tgc-booking-steps-recipient">

                    <main class="tgc-booking-page-content tgc-booking-steps-summary">
                        <div class="main-content"><h1 class="title"><span></span>3. Review</h1>
                                <div class="review-container" style="">
                                    <div class="tgc-minimal-review-info">
                                        <div class="amounts">
                                            <div class="amount-block"><span class="tgc-country-flag GB"
                                                                            style="background-image: url(&quot;https://www.transfergo.com/static/images/flags/svg/GB.svg&quot;);"></span><span
                                                autocomplete="amount-input"
                                                class="tgc-amount review-amount">300.00</span><span
                                                class="currency">GBP</span></div>
                                            <svg width="18" height="8" viewBox="0 0 18 8" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg" size="30">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18 4l-8 4V0l8 4z"
                                                      fill="#213647"></path>
                                                <path d="M10 4H0" stroke="#213647"></path>
                                            </svg>
                                            <div class="amount-block"><span class="tgc-country-flag NG"
                                                                            style="background-image: url(&quot;https://www.transfergo.com/static/images/flags/svg/NG.svg&quot;);"></span><span
                                                autocomplete="amount-input"
                                                class="tgc-amount review-amount">211,548.26</span><span
                                                class="currency">NGN</span></div>
                                        </div>
                                        <div class="receiver">to&nbsp;<span>adad adad</span></div>
                                    </div>
                                    <div class="tgc-expandable-section expanded" style="max-height: 800px;">
                                        <button type="button" class="expand-button expanded">Transfer details
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                 viewBox="0 0 24 24" size="20" height="20" width="20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                                            </svg>
                                        </button>
                                        <div class="recipient-block">
                                            <div class="tgc-lie-theme-section-heading"><span class="heading-content">Receiver details</span>
                                            </div>
                                            <div class="tgc-recipient-details-block">

                                                <div class="row-item">
                                                    <span class="review-label">Receiver</span>
                                                    <span class="review-data">{{userOrder.receiver_get_country}} {{userOrder.receiver_get_currency}}</span>
                                                </div>

                                                <div class="row-item">
                                                    <span class="review-label">Type pay</span>
                                                    <span class="review-data">{{userOrder.type_pay}}</span>
                                                </div>

                                                <div class="row-item">
                                                    <span class="review-label">Bank name</span>
                                                    <span class="review-data">{{userOrder.bank_name}}</span>
                                                </div>

                                                <div v-if="userOrder.type_pay != 'DEBIT/CREDIT CARD'" class="row-item">
                                                    <span class="review-label">Account number</span>
                                                    <span class="review-data">{{userOrder.account_number}}</span>
                                                </div>
                                                <div v-else class="row-item">
                                                    <span class="review-label">Number card</span>
                                                    <span class="review-data">{{userOrder.number_card}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tgc-lie-theme-section-heading">
                                            <span class="heading-content">Transfer details</span>
                                        </div>
                                        <div class="review-info-block">
                                            <div class="row-item">
                                                <div class="review-label">Sending from</div>
                                                <span class="review-data"><span class="country">
                                                    <span
                                                    class="tgc-country-flag"
                                                    :style="getIconByCountrySlag(userOrder.sending_from_country)">

                                                    </span>{{userOrder.sending_from_country}}</span>
                                                </span>
                                            </div>
                                            <div class="row-item">
                                                <div class="review-label">Amount</div>
                                                <span class="review-data"><span class="amount"><span
                                                    autocomplete="amount-input" class="tgc-amount">{{userOrder.from_sum}}</span></span></span>
                                            </div>
                                        </div>
                                        <div class="tgc-detailed-review-info">
                                            <div class="row-item"><span class="review-label">Exchange rate</span><span
                                                class="review-data">{{userOrder.exchange_rate}}</span></div>
                                            <div class="row-item"><span class="review-label">Delivery fee</span><span
                                                class="review-data">£0.00</span></div>
                                            <div class="row-item"><span class="review-label">Delivered</span><span
                                                class="review-data">{{userOrder.created_at}}</span></div>
                                        </div>
                                        <div class="review-info-block">
                                            <div class="row-item">
                                                <div class="review-label">Receiving in</div>
                                                <span class="review-data"><span class="country"><span
                                                    class="tgc-country-flag"
                                                    :style="getIconByCountrySlag(userOrder.receiver_get_country)"></span>{{userOrder.receiver_get_country}}</span></span>
                                            </div>
                                            <div class="row-item">
                                                <div class="review-label">Amount</div>
                                                <span class="review-data"><span class="amount"><span
                                                    autocomplete="amount-input"
                                                    class="tgc-amount">{{userOrder.to_sum}}</span></span></span></div>
                                        </div>
                                    </div>
                                    <div class="summary-buttons">
                                        <div class="back-button-wrapper">
                                            <button
                                                @click="backStep"
                                                class="tgc-button large secondary" type="button"><span
                                                class="button-content">Back</span></button>
                                        </div>
                                        <div class="confirm-button-wrapper">
                                            <button
                                                @click="sendDataOrder"
                                                class="tgc-button large blue block-mobile" type="submit"><span
                                                class="button-content">Confirm details</span></button>
                                        </div>
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
    },
    data: () => ({

    }),
    methods: {
        getIconByCountrySlag(countrySlug) {
            return 'background-image: url(https://www.transfergo.com/static/images/flags/svg/' + countrySlug + '.svg);';
        },
        backStep() {
            this.$emit('back', 2);
        },
        sendDataOrder() {
            const formData = new FormData();

            formData.append( 'confirmed', 1);

            axios.post('api/update-order/' + this.userOrder.id, formData).then(res => {
                if (res.data.Ok) {
                    this.$emit('order', res.data.data.order);
                }
            });
        },
    }
}
</script>
