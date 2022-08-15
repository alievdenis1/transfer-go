<template>
    <div>
    <div class="tgc-lie-theme-section-heading"><span>Выберите время доставки:</span><span
        tabindex="0" role="button" class="learn-more">Узнать больше</span>
    </div>
    <div class="tgc-delivery-options">
        <div class="do-list">
            <div class="do-first-list">
                <div class="tgc-delivery-option active"
                     tabindex="0" role="button"
                     id="do-standard"
                     data-qa="delivery-option-standard">
                    <div class="select-indicator">
                        <svg stroke="currentColor"
                             fill="currentColor"
                             stroke-width="0"
                             viewBox="0 0 24 24"
                             class="check-icon" height="1em"
                             width="1em"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
                        </svg>
                    </div>
                    <div class="option-name">
                        <div class="do-name">
                            <div class="name"><span
                                class="emoji">🎁</span><span
                                class="updated-delivery-option-title">Стандарт</span>
                                <span
                                    class="updated-delivery-option-description">(Перевод <b>завтра</b>, в 20:30)</span>
                                <div class="info-icon">
                                    <div
                                        class="tgc-simple-tooltip long">
                                        <div
                                            class="tooltip--container">
                                            <div
                                                class="tooltip--text">
                                                Ваши деньги поступят на банковский счет получателя на следующий рабочий день.
                                            </div>
                                            <div
                                                class="tooltip--tip"></div>
                                        </div>
                                        <div
                                            class="tooltip--source">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="12"
                                                height="12"
                                                class="option-info">
                                                <path
                                                    fill="#307CDB"
                                                    fill-rule="evenodd"
                                                    d="M5.4 9h1.2V5.4H5.4V9zM6 0C2.688 0 0 2.688 0 6s2.688 6 6 6 6-2.688 6-6-2.688-6-6-6zm0 10.8c-2.646 0-4.8-2.154-4.8-4.8S3.354 1.2 6 1.2s4.8 2.154 4.8 4.8-2.154 4.8-4.8 4.8zm-.6-6.6h1.2V3H5.4v1.2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="do-fee discounted free">
                        <div class="fee-block">
                            <div class="previous-fee"><span
                                autocomplete="amount-input"
                                class="tgc-amount">£0.99</span>
                            </div>
                            <div class="current-fee free">
                                Бесплатно
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tgc-delivery-option disabled"
                     tabindex="0" role="button" id="do-now"
                     data-qa="delivery-option-now">
                    <div class="select-indicator">
                        <svg stroke="currentColor"
                             fill="currentColor"
                             stroke-width="0"
                             viewBox="0 0 24 24"
                             class="check-icon" height="1em"
                             width="1em"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
                        </svg>
                    </div>
                    <div class="option-name">
                        <div class="do-name">
                            <div class="name"><span
                                class="emoji">⚡</span><span
                                class="updated-delivery-option-title">Сейчас</span>
                                <span
                                    class="updated-delivery-option-description">(Перевод в течении <b>30 минут</b>)</span>
                            </div>
                        </div>
                        <div class="option-description">
                            В настоящее время недоступно
                        </div>
                    </div>
                    <div class="do-fee discounted free">
                        <div class="fee-block">
                            <div class="previous-fee"><span
                                autocomplete="amount-input"
                                class="tgc-amount">£1.49</span>
                            </div>
                            <div class="current-fee free">
                                Бесплатно
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="delivery-options-hidden"></div>
        </div>
    </div>
    </div>
</template>
