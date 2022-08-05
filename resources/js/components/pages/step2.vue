<template>
    <div>
        <div class="content-row">
            <div class="content-cell">
                <div class="tgc-booking-views-page tgc-booking-steps-recipient">
                    <main class="tgc-booking-page-content">
                        <div class="main-content"><h1 class="title">2. Enter receiver details</h1>
                            <form>
                                <div class="tgc-recipient-name">
                                    <div class="tgc-radio-tabs recipient-type-buttons">
                                        <div class="radio-tab-wrapper selected half">
                                            <button type="button" class="tgc-inputs-option radio-tabs-option is-active">
                                                <p class="radio-text type-text" data-qa="personal">Person</p></button>
                                        </div>
                                        <div class="radio-tab-wrapper half">
                                            <div class="tgc-simple-tooltip medium disabled-radio-option">
                                                <div class="tooltip--container">
                                                    <div class="tooltip--text">Sending to business is not allowed in
                                                        this case
                                                    </div>
                                                    <div class="tooltip--tip"></div>
                                                </div>
                                                <div class="tooltip--source radio-option-tooltip-source">
                                                    <button type="button"
                                                            class="tgc-inputs-option radio-tabs-option is-disabled"><p
                                                        class="radio-text type-text" data-qa="business">Business</p>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tgc-recipient-country-change">
                                        <div class="label">Receiver's country</div>
                                        <div class="content">
                                            <div class="country"><span class="tgc-country-flag NG"
                                                                       style="background-image: url(&quot;https://www.transfergo.com/static/images/flags/svg/NG.svg&quot;);"></span><span
                                                class="country-title">Nigeria</span></div>
                                            <button type="button" class="change">Change</button>
                                        </div>
                                    </div>
                                    <div class="name-input-fields">
                                        <div class="name-input">
                                            <div class="tgc-text-input-updated"><label>Receiver’s first
                                                name</label><input name="firstName"
                                                                   placeholder="Enter receiver’s first name" type="text"
                                                                   data-qa="input-firstName" maxlength="255" value="">
                                            </div>
                                        </div>
                                        <div class="name-input">
                                            <div class="tgc-text-input-updated"><label>Receiver’s last
                                                name</label><input name="lastName"
                                                                   placeholder="Enter receiver’s last name" type="text"
                                                                   data-qa="input-lastName" maxlength="255" value="">
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
                                                <div class="input-label">Bank</div>
                                                <div class="css-1pcexqc-container select-bank">
                                                    <div class="css-ms5by8-control react-select__control">
                                                        <div class="css-8sb5yy react-select__value-container">
                                                            <div
                                                                class="css-151xaom-placeholder react-select__placeholder">
                                                                Please select
                                                            </div>
                                                            <div class="css-1g6gooi">
                                                                <div class="react-select__input"
                                                                     style="display: inline-block;"><input
                                                                    autocapitalize="none" autocomplete="off"
                                                                    autocorrect="off" id="react-select-6-input"
                                                                    spellcheck="false" tabindex="0" type="text"
                                                                    aria-autocomplete="list" value=""
                                                                    style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                    <div
                                                                        style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 15px; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="css-1wy0on6 react-select__indicators"><span
                                                            class="css-1hyfx7x react-select__indicator-separator"></span>
                                                            <div aria-hidden="true"
                                                                 class="css-16pqwjk-indicatorContainer react-select__indicator react-select__dropdown-indicator">
                                                                <svg stroke="currentColor" fill="currentColor"
                                                                     stroke-width="0" viewBox="0 0 24 24" size="24"
                                                                     height="24" width="24"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input name="bank" type="hidden" value=""></div>
                                            </div>
                                        </div>
                                        <div class="bank-details-row">
                                            <div class="tgc-text-input-updated account-input"><label>Account number /
                                                NUBAN</label><input name="ngAccountNumber" type="text"
                                                                    data-qa="input-ngAccountNumber" value="••••••••••">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="recipient-form-button-block">
                                    <div class="recipient-button-back">
                                        <button class="tgc-button large block-mobile secondary" type="button"><span
                                            class="button-content">Back</span></button>
                                    </div>
                                    <div class="recipient-button-continue">
                                        <button class="tgc-button large blue block-mobile" type="submit"><span
                                            class="button-content"><span class="label-text">Continue</span></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
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
                                        <div class="flag-currency send"><span class="tgc-country-flag GB flag"
                                                                              style="background-image: url(&quot;https://www.transfergo.com/static/images/flags/svg/GB.svg&quot;);"></span>
                                            <div data-qa="send-currency" class="currency">GBP</div>
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
                                            autocomplete="amount-input" class="tgc-amount">211,548.26</span></div>
                                        <div class="flag-currency receive"><span class="tgc-country-flag NG flag"
                                                                                 style="background-image: url(&quot;https://www.transfergo.com/static/images/flags/svg/NG.svg&quot;);"></span>
                                            <div data-qa="receive-currency" class="currency">NGN</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tgc-summary-block with-divider">
                                    <div class="label">Delivery</div>
                                    <div class="value-block">
                                        <div class="value ">Tomorrow, by 20:30</div>
                                        <div class="sub-value">Standard</div>
                                    </div>
                                </div>
                                <div class="tgc-summary-block with-divider">
                                    <div class="label">Exchange rate</div>
                                    <div class="value-block">
                                        <div class="value ">705.16087</div>
                                    </div>
                                </div>
                                <div class="tgc-summary-block with-divider">
                                    <div class="label">Delivery fee</div>
                                    <div class="value-block">
                                        <div class="value discounted"><span autocomplete="amount-input"
                                                                            class="tgc-amount">£0.00</span></div>
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
      console.log(this.userOrder);
    },
    methods: {
        getIconByCountrySlag(countrySlug) {
            return 'background-image: url(https://www.transfergo.com/static/images/flags/svg/' + countrySlug + '.svg);';
        },
    }
}
</script>
