<template>
    <div>
        <div class="content-row">
            <div class="content-cell">
                <div class="tgc-booking-views-page tgc-booking-steps-recipient">

                    <main class="tgc-booking-page-content tgc-booking-steps-summary">
                        <div class="main-content"><h1 class="title"><span></span>3. Обзор</h1>
                                <div class="review-container" style="">
                                    <div class="tgc-expandable-section expanded" style="max-height: 800px;">
                                        <div class="recipient-block">
                                            <div class="tgc-lie-theme-section-heading"><span class="heading-content">Сведения о получателе</span>
                                            </div>
                                            <div class="tgc-recipient-details-block">

                                                <div class="row-item">
                                                    <span class="review-label">Приемник</span>
                                                    <span class="review-data">{{userOrder.receiver_get_country}} {{userOrder.receiver_get_currency}}</span>
                                                </div>

                                                <div class="row-item">
                                                    <span class="review-label">Тип оплаты</span>
                                                    <span class="review-data">{{userOrder.type_pay}}</span>
                                                </div>

                                                <div class="row-item">
                                                    <span class="review-label">Название банка</span>
                                                    <span class="review-data">{{userOrder.bank_name}}</span>
                                                </div>

                                                <div v-if="userOrder.type_pay != 'ДЕБЕТОВАЯ/КРЕДИТНАЯ КАРТА'" class="row-item">
                                                    <span class="review-label">Номер счета</span>
                                                    <span class="review-data">{{userOrder.account_number}}</span>
                                                </div>
                                                <div v-else class="row-item">
                                                    <span class="review-label">Номер карты</span>
                                                    <span class="review-data">{{userOrder.number_card}}</span>
                                                </div>

                                                <div class="row-item">
                                                    <span class="review-label">Имя</span>
                                                    <span class="review-data">{{userOrder.first_name}}</span>
                                                </div>

                                                <div class="row-item">
                                                    <span class="review-label">Фамилия</span>
                                                    <span class="review-data">{{userOrder.last_name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tgc-lie-theme-section-heading">
                                            <span class="heading-content">Детали перевода</span>
                                        </div>
                                        <div class="review-info-block">
                                            <div class="row-item">
                                                <div class="review-label">Отправка из</div>
                                                <span class="review-data"><span class="country">
                                                    <span
                                                    class="tgc-country-flag"
                                                    :style="getIconByCountrySlag(userOrder.sending_from_country)">

                                                    </span>{{userOrder.sending_from_country}}</span>
                                                </span>
                                            </div>
                                            <div class="row-item">
                                                <div class="review-label">Сумма</div>
                                                <span class="review-data"><span class="amount"><span
                                                    autocomplete="amount-input" class="tgc-amount">{{userOrder.from_sum}}</span></span></span>
                                            </div>
                                        </div>
                                        <div class="tgc-detailed-review-info">
                                            <div class="row-item"><span class="review-label">Обменный курс</span><span
                                                class="review-data">{{userOrder.exchange_rate}}</span></div>
                                            <div class="row-item"><span class="review-label">Стоимость перевода</span><span
                                                class="review-data">0.00</span></div>
                                            <div class="row-item"><span class="review-label">Перевод</span><span
                                                class="review-data">{{userOrder.created_at}}</span></div>
                                        </div>
                                        <div class="review-info-block">
                                            <div class="row-item">
                                                <div class="review-label">Получение в</div>
                                                <span class="review-data"><span class="country"><span
                                                    class="tgc-country-flag"
                                                    :style="getIconByCountrySlag(userOrder.receiver_get_country)"></span>{{userOrder.receiver_get_country}}</span></span>
                                            </div>
                                            <div class="row-item">
                                                <div class="review-label">Сумма</div>
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
                                                class="button-content">Назад</span></button>
                                        </div>
                                        <div class="confirm-button-wrapper">
                                            <button
                                                @click="sendDataOrder"
                                                class="tgc-button large blue block-mobile" type="submit"><span
                                                class="button-content">Подтвердить</span></button>
                                        </div>
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
    props: ['userOrder'],
    created() {
    },
    data: () => ({

    }),
    methods: {
        getIconByCountrySlag(countrySlug) {
            return 'background-image: url(/img/' + countrySlug + '.svg);';
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
