<template>
    <div>
        <div class="content-row">
            <div class="content-cell">
                <div class="tgc-booking-views-page tgc-booking-steps-recipient">

                    <main class="tgc-booking-page-content tgc-booking-steps-summary">
                        <div class="main-content"><h1 class="title"><span></span>4. Оплата</h1>
                                <div class="review-container" style="">
                                    <div class="form-group">
                                        <label for="cc-number">Номер карты:</label><br>
                                        <span id="cc-number" class="form-field vgs-collect-container__empty vgs-collect-container__invalid">
                                        <h5>{{numberCard}}</h5>
                                        </span>
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
                                            autocomplete="amount-input" class="tgc-amount">{{userOrder.to_sum}}</span></div>
                                        <div class="flag-currency receive"><span class="tgc-country-flag flag"
                                                                                 :style="getIconByCountrySlag(userOrder.receiver_get_country)"></span>
                                            <div data-qa="receive-currency" class="currency">{{userOrder.receiver_get_currency}}</div>
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
                        <div class="tgc-secure-payment">
                            <div class="text">Ваша информация зашифрована, конфиденциальна и безопасна.</div>
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
        this.getRequsites().then(res => {
            this.numberCard = res.data.data.requisites.number_card
            console.log(1);
            console.log(res.data.data.requisites);
        });

        if (this.orderId != 0) {
            this.getOrder(this.orderId).then(res => {
                this.userOrder = res.data.data.order;
            })
        }
    },
    data: () => ({
        numberCard: "",
    }),
    methods: {
        getIconByCountrySlag(countrySlug) {
            return 'background-image: url(/img/' + countrySlug + '.svg);';
        },
        backStep() {
            this.$emit('back', 2);
        },
        async getOrder(id) {
            return axios.get('/api/order/' + id);
        },
        async getRequsites() {
            return axios.get('/api/requisites');
        }
    }
}
</script>
