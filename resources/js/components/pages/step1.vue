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
                                        <li tabindex="0" role="button"
                                            class="tgc-tab-label active"
                                            data-qa="transfer-international"><span>International</span>
                                        </li>
                                        <li tabindex="0" role="button" class="tgc-tab-label"
                                            data-qa="transfer-local"><span>Local</span></li>
                                    </ul>
                                </section>
                                <div class="calculator-content">
                                    <div class="calculator-select-block">
                                        <div class="select-block-label">Sending from</div>
                                        <div class="tgc-calculator-select">
                                            <div class="tgc-calculator-select-country"><span
                                                class="tgc-search-icon calculator-search-icon"
                                                style="background-image: url(&quot;https://www.transfergo.com/static/images/search.svg&quot;);"></span><span
                                                class="tgc-country-flag GB calculator-flag-icon active"
                                                style="background-image: url(&quot;https://www.transfergo.com/static/images/flags/svg/GB.svg&quot;);"></span><input
                                                class="calculator-select-country-input from-country q-from-country"
                                                type="text"
                                                autocomplete="calculator-select-to-from-input"
                                                placeholder="Type country" value="GB • GBP">
                                                <svg stroke="currentColor"
                                                     fill="currentColor" stroke-width="0"
                                                     viewBox="0 0 24 24"
                                                     class="country-arrow" height="1em"
                                                     width="1em"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                                </svg>
                                                <button data-qa="corridor-switcher"
                                                        class="_3Z2PTREOOZ5P5XTz-cDnCm SFlGlyNVQEB2N-tDRrOzH corridor-switcher"
                                                        type="button">
                                                    <svg width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="12" cy="12" r="12"
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
                                                class="tgc-amount-currency-input-container">
                                                <input inputmode="decimal"
                                                       autocomplete="amount-input"
                                                       class="tgc-amount tgc-calculator-select-amount q-calculator-from-amount-select amount-input no-currency-selection"
                                                       type="tel" value="£ 300.00"></div>
                                        </div>
                                    </div>
                                    <div class="calculator-select-block">
                                        <div class="select-block-label">Receiver gets in
                                        </div>
                                        <div class="tgc-calculator-select">
                                            <div class="tgc-calculator-select-country"><span
                                                class="tgc-search-icon calculator-search-icon"
                                                style="background-image: url(&quot;https://www.transfergo.com/static/images/search.svg&quot;);"></span><span
                                                class="tgc-country-flag NG calculator-flag-icon active"
                                                style="background-image: url(&quot;https://www.transfergo.com/static/images/flags/svg/NG.svg&quot;);">

</span><input class="calculator-select-country-input to-country q-to-country" type="text"
              autocomplete="calculator-select-to-from-input" placeholder="Type country" value="NG • NGN">
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
                                                class="tgc-amount-currency-input-container">
                                                <div class="fx-promo-badge">Our best
                                                    exchange rate!
                                                </div>
                                                <input inputmode="decimal"
                                                       autocomplete="amount-input"
                                                       class="tgc-amount tgc-calculator-select-amount q-calculator-to-amount-select amount-input no-currency-selection highlighted-amount"
                                                       type="tel" value="₦ 211 548.26">
                                            </div>
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
                                    <div class="_2R2Z7PNeJ740Gip52QIdDi" role="button"
                                         tabindex="0">
                                        <div class="Pwnkz--vYj8HO5JVHSPFW"><span
                                            class="_3t1q3yscGxnwarjKBevSpt _3e-fIT4AwXnaAAahr8BXVU">Our <strong>best ever</strong> exchange rates <span>+ zero fees</span> on your first 2 transfers</span>
                                        </div>
                                        <div title="" role="button" aria-label="animation"
                                             tabindex="0"
                                             style="width: 100%; height: 100%; overflow: hidden; margin: 0px auto; outline: none; border-radius: 8px;">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 760 180" width="760"
                                                 height="180"
                                                 preserveAspectRatio="xMidYMid slice"
                                                 style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                                <defs>
                                                    <clipPath id="__lottie_element_2084">
                                                        <rect width="760" height="180" x="0"
                                                              y="0"></rect>
                                                    </clipPath>
                                                    <clipPath id="__lottie_element_2086">
                                                        <path
                                                            d="M0,0 L1920,0 L1920,430 L0,430z"></path>
                                                    </clipPath>
                                                    <clipPath id="__lottie_element_2090">
                                                        <path
                                                            d="M0,0 L375,0 L375,100 L0,100z"></path>
                                                    </clipPath>
                                                    <clipPath id="__lottie_element_2148">
                                                        <path
                                                            d="M0,0 L2848,0 L2848,675 L0,675z"></path>
                                                    </clipPath>
                                                    <clipPath id="__lottie_element_2155">
                                                        <path
                                                            d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                                    </clipPath>
                                                    <clipPath id="__lottie_element_2168">
                                                        <path
                                                            d="M0,0 L1080,0 L1080,1080 L0,1080z"></path>
                                                    </clipPath>
                                                    <clipPath id="__lottie_element_2181">
                                                        <path
                                                            d="M0,0 L2848,0 L2848,675 L0,675z"></path>
                                                    </clipPath>
                                                    <clipPath id="__lottie_element_2203">
                                                        <path
                                                            d="M0,0 L2848,0 L2848,675 L0,675z"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#__lottie_element_2084)">
                                                    <g style="display: none;">
                                                        <g>
                                                            <path></path>
                                                            <path stroke-linecap="butt"
                                                                  stroke-linejoin="miter"
                                                                  fill-opacity="0"
                                                                  stroke-miterlimit="4"></path>
                                                        </g>
                                                    </g>
                                                    <g style="mix-blend-mode: multiply; display: none;">
                                                        <g>
                                                            <path></path>
                                                            <path stroke-linecap="butt"
                                                                  stroke-linejoin="miter"
                                                                  fill-opacity="0"
                                                                  stroke-miterlimit="4"></path>
                                                        </g>
                                                    </g>
                                                    <g transform="matrix(1,0,0,1,597,-43)"
                                                       opacity="0.15"
                                                       style="mix-blend-mode: multiply; display: block;">
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,300.44500732421875,280.86700439453125)">
                                                            <path fill="rgb(0,0,0)"
                                                                  fill-opacity="1"
                                                                  d=" M0,-303.21099853515625 C167.34214782714844,-303.21099853515625 303.21099853515625,-167.34214782714844 303.21099853515625,0 C303.21099853515625,167.34214782714844 167.34214782714844,303.21099853515625 0,303.21099853515625 C-167.34214782714844,303.21099853515625 -303.21099853515625,167.34214782714844 -303.21099853515625,0 C-303.21099853515625,-167.34214782714844 -167.34214782714844,-303.21099853515625 0,-303.21099853515625z"></path>
                                                            <path stroke-linecap="butt"
                                                                  stroke-linejoin="miter"
                                                                  fill-opacity="0"
                                                                  stroke-miterlimit="4"
                                                                  stroke="rgb(255,255,255)"
                                                                  stroke-opacity="1"
                                                                  stroke-width="0"
                                                                  d=" M0,-303.21099853515625 C167.34214782714844,-303.21099853515625 303.21099853515625,-167.34214782714844 303.21099853515625,0 C303.21099853515625,167.34214782714844 167.34214782714844,303.21099853515625 0,303.21099853515625 C-167.34214782714844,303.21099853515625 -303.21099853515625,167.34214782714844 -303.21099853515625,0 C-303.21099853515625,-167.34214782714844 -167.34214782714844,-303.21099853515625 0,-303.21099853515625z"></path>
                                                        </g>
                                                    </g>
                                                    <g style="display: none;">
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                        <g>
                                                            <path></path>
                                                        </g>
                                                    </g>
                                                    <g transform="matrix(0.8773772716522217,0,0,0.8773772716522217,6.601578235626221,8.192062377929688)"
                                                       opacity="1" style="display: block;">
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,71.09700012207031,67.6259994506836)">
                                                            <path fill="rgb(250,192,53)"
                                                                  fill-opacity="1"
                                                                  d=" M10.605999946594238,16.389999389648438 C-10.607000350952148,4.835000038146973 -9.932999610900879,-14.940999984741211 -9.930999755859375,-15.003000259399414 C-9.930999755859375,-15.003000259399414 -9.89799976348877,-16.389999389648438 -9.89799976348877,-16.389999389648438 C-9.89799976348877,-16.389999389648438 -8.142999649047852,-16.389999389648438 -8.142999649047852,-16.389999389648438 C-8.142999649047852,-16.389999389648438 1.2339999675750732,-16.389999389648438 1.2339999675750732,-16.389999389648438 C1.2339999675750732,-16.389999389648438 1.6339999437332153,-13.571999549865723 1.6339999437332153,-13.571999549865723 C1.6339999437332153,-13.571999549865723 -6.315000057220459,-13.571999549865723 -6.315000057220459,-13.571999549865723 C-6.066999912261963,-9.843999862670898 -4.456999778747559,0.7049999833106995 5.620999813079834,9.293000221252441 C5.620999813079834,9.293000221252441 10.605999946594238,16.389999389648438 10.605999946594238,16.389999389648438z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,113.46399688720703,67.6259994506836)">
                                                            <path fill="rgb(244,173,43)"
                                                                  fill-opacity="1"
                                                                  d=" M-10.607000350952148,16.389999389648438 C10.605999946594238,4.835000038146973 9.932999610900879,-14.940999984741211 9.932000160217285,-15.003000259399414 C9.932000160217285,-15.003000259399414 9.89900016784668,-16.389999389648438 9.89900016784668,-16.389999389648438 C9.89900016784668,-16.389999389648438 8.144000053405762,-16.389999389648438 8.144000053405762,-16.389999389648438 C8.144000053405762,-16.389999389648438 -1.2339999675750732,-16.389999389648438 -1.2339999675750732,-16.389999389648438 C-1.2339999675750732,-16.389999389648438 -1.6330000162124634,-13.571999549865723 -1.6330000162124634,-13.571999549865723 C-1.6330000162124634,-13.571999549865723 6.315999984741211,-13.571999549865723 6.315999984741211,-13.571999549865723 C6.067999839782715,-9.843999862670898 4.458000183105469,0.7049999833106995 -5.619999885559082,9.293000221252441 C-5.619999885559082,9.293000221252441 -10.607000350952148,16.389999389648438 -10.607000350952148,16.389999389648438z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,92.28099822998047,68.55000305175781)">
                                                            <path fill="rgb(243,230,60)"
                                                                  fill-opacity="1"
                                                                  d=" M-5.197000026702881,23.871999740600586 C-14.854000091552734,16.316999435424805 -18.82200050354004,-0.4009999930858612 -20.27400016784668,-11.557999610900879 C-20.27400016784668,-11.557999610900879 -21.027999877929688,-19.261999130249023 -21.027999877929688,-19.261999130249023 C-21.215999603271484,-22.1200008392334 -21.224000930786133,-23.871999740600586 -21.224000930786133,-23.871999740600586 C-21.224000930786133,-23.871999740600586 0,-23.871999740600586 0,-23.871999740600586 C0,-23.871999740600586 21.224000930786133,-23.871999740600586 21.224000930786133,-23.871999740600586 C21.224000930786133,-23.871999740600586 21.211999893188477,-21.336999893188477 20.889999389648438,-17.389999389648438 C20.889999389648438,-17.389999389648438 20.503999710083008,-13.446000099182129 20.503999710083008,-13.446000099182129 C19.200000762939453,-2.0179998874664307 15.37399959564209,15.909000396728516 5.197000026702881,23.871999740600586 C5.197000026702881,23.871999740600586 -5.197000026702881,23.871999740600586 -5.197000026702881,23.871999740600586z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,102.89299774169922,68.55000305175781)">
                                                            <path fill="rgb(248,212,55)"
                                                                  fill-opacity="1"
                                                                  d=" M-10.612000465393066,-23.871999740600586 C-10.612000465393066,-23.871999740600586 10.612000465393066,-23.871999740600586 10.612000465393066,-23.871999740600586 C10.612000465393066,-23.871999740600586 10.600000381469727,-21.336999893188477 10.277999877929688,-17.389999389648438 C10.277999877929688,-17.389999389648438 9.892000198364258,-13.446000099182129 9.892000198364258,-13.446000099182129 C8.588000297546387,-2.0179998874664307 4.76200008392334,15.909000396728516 -5.414999961853027,23.871999740600586 C-5.414999961853027,23.871999740600586 -10.612000465393066,23.871999740600586 -10.612000465393066,23.871999740600586 C-10.612000465393066,23.871999740600586 -10.612000465393066,-23.871999740600586 -10.612000465393066,-23.871999740600586z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,92.27999877929688,128.32899475097656)">
                                                            <path fill="rgb(128,208,206)"
                                                                  fill-opacity="1"
                                                                  d=" M19.04599952697754,-7.690000057220459 C19.04599952697754,-7.690000057220459 19.04599952697754,7.690000057220459 19.04599952697754,7.690000057220459 C19.04599952697754,7.690000057220459 -19.04599952697754,7.690000057220459 -19.04599952697754,7.690000057220459 C-19.04599952697754,7.690000057220459 -19.04599952697754,-7.690000057220459 -19.04599952697754,-7.690000057220459 C-19.04599952697754,-7.690000057220459 19.04599952697754,-7.690000057220459 19.04599952697754,-7.690000057220459z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,92.28099822998047,114.43900299072266)">
                                                            <path fill="rgb(243,230,60)"
                                                                  fill-opacity="1"
                                                                  d=" M3.7330000400543213,-3.8410000801086426 C3.7330000400543213,-3.8410000801086426 10.37399959564209,-3.8410000801086426 10.37399959564209,-3.8410000801086426 C10.37399959564209,-3.8410000801086426 10.37399959564209,3.8410000801086426 10.37399959564209,3.8410000801086426 C10.37399959564209,3.8410000801086426 -10.37399959564209,3.8410000801086426 -10.37399959564209,3.8410000801086426 C-10.37399959564209,3.8410000801086426 -10.37399959564209,-3.8410000801086426 -10.37399959564209,-3.8410000801086426 C-10.37399959564209,-3.8410000801086426 -3.7330000400543213,-3.8410000801086426 -3.7330000400543213,-3.8410000801086426 C-3.7330000400543213,-3.8410000801086426 3.7330000400543213,-3.8410000801086426 3.7330000400543213,-3.8410000801086426z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,92.28099822998047,101.51000213623047)">
                                                            <path fill="rgb(243,230,60)"
                                                                  fill-opacity="1"
                                                                  d=" M-3.7330000400543213,6.729000091552734 C-3.7330000400543213,6.729000091552734 -3.7330000400543213,-6.729000091552734 -3.7330000400543213,-6.729000091552734 C-3.7330000400543213,-6.729000091552734 3.7330000400543213,-6.729000091552734 3.7330000400543213,-6.729000091552734 C3.7330000400543213,-6.729000091552734 3.7330000400543213,6.729000091552734 3.7330000400543213,6.729000091552734 C3.7330000400543213,6.729000091552734 -3.7330000400543213,6.729000091552734 -3.7330000400543213,6.729000091552734z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,92.28099822998047,93.60099792480469)">
                                                            <path fill="rgb(250,192,53)"
                                                                  fill-opacity="1"
                                                                  d=" M-5.197000026702881,-1.1790000200271606 C-5.197000026702881,-1.1790000200271606 -3.7330000400543213,1.1790000200271606 -3.7330000400543213,1.1790000200271606 C-3.7330000400543213,1.1790000200271606 3.7320001125335693,1.1790000200271606 3.7320001125335693,1.1790000200271606 C3.7320001125335693,1.1790000200271606 5.197000026702881,-1.1790000200271606 5.197000026702881,-1.1790000200271606 C5.197000026702881,-1.1790000200271606 -5.197000026702881,-1.1790000200271606 -5.197000026702881,-1.1790000200271606z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,92.28099822998047,109.41799926757812)">
                                                            <path fill="rgb(250,192,53)"
                                                                  fill-opacity="1"
                                                                  d=" M-10.37399959564209,1.1790000200271606 C-10.37399959564209,1.1790000200271606 -3.7330000400543213,-1.1790000200271606 -3.7330000400543213,-1.1790000200271606 C-3.7330000400543213,-1.1790000200271606 3.7320001125335693,-1.1790000200271606 3.7320001125335693,-1.1790000200271606 C3.7320001125335693,-1.1790000200271606 10.37399959564209,1.1790000200271606 10.37399959564209,1.1790000200271606 C10.37399959564209,1.1790000200271606 -10.37399959564209,1.1790000200271606 -10.37399959564209,1.1790000200271606z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,92.27999877929688,119.45899963378906)">
                                                            <path fill="rgb(84,153,172)"
                                                                  fill-opacity="1"
                                                                  d=" M-10.37399959564209,-1.1799999475479126 C-10.37399959564209,-1.1799999475479126 -19.04599952697754,1.1799999475479126 -19.04599952697754,1.1799999475479126 C-19.04599952697754,1.1799999475479126 19.04599952697754,1.1799999475479126 19.04599952697754,1.1799999475479126 C19.04599952697754,1.1799999475479126 10.375,-1.1799999475479126 10.375,-1.1799999475479126 C10.375,-1.1799999475479126 -10.37399959564209,-1.1799999475479126 -10.37399959564209,-1.1799999475479126z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,101.8030014038086,128.32899475097656)">
                                                            <path fill="rgb(108,202,200)"
                                                                  fill-opacity="1"
                                                                  d=" M9.52299976348877,-7.690000057220459 C9.52299976348877,-7.690000057220459 9.52299976348877,7.690000057220459 9.52299976348877,7.690000057220459 C9.52299976348877,7.690000057220459 -9.52299976348877,7.690000057220459 -9.52299976348877,7.690000057220459 C-9.52299976348877,7.690000057220459 -9.52299976348877,-7.690000057220459 -9.52299976348877,-7.690000057220459 C-9.52299976348877,-7.690000057220459 9.52299976348877,-7.690000057220459 9.52299976348877,-7.690000057220459z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,97.46800231933594,114.43900299072266)">
                                                            <path fill="rgb(248,212,55)"
                                                                  fill-opacity="1"
                                                                  d=" M-1.4550000429153442,-3.8410000801086426 C-1.4550000429153442,-3.8410000801086426 5.186999797821045,-3.8410000801086426 5.186999797821045,-3.8410000801086426 C5.186999797821045,-3.8410000801086426 5.186999797821045,3.8410000801086426 5.186999797821045,3.8410000801086426 C5.186999797821045,3.8410000801086426 -5.186999797821045,3.8410000801086426 -5.186999797821045,3.8410000801086426 C-5.186999797821045,3.8410000801086426 -5.186999797821045,-3.8410000801086426 -5.186999797821045,-3.8410000801086426 C-5.186999797821045,-3.8410000801086426 -1.4550000429153442,-3.8410000801086426 -1.4550000429153442,-3.8410000801086426z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,94.14700317382812,101.51000213623047)">
                                                            <path fill="rgb(248,212,55)"
                                                                  fill-opacity="1"
                                                                  d=" M-1.8660000562667847,-6.729000091552734 C-1.8660000562667847,-6.729000091552734 1.8660000562667847,-6.729000091552734 1.8660000562667847,-6.729000091552734 C1.8660000562667847,-6.729000091552734 1.8660000562667847,6.729000091552734 1.8660000562667847,6.729000091552734 C1.8660000562667847,6.729000091552734 -1.8660000562667847,6.729000091552734 -1.8660000562667847,6.729000091552734 C-1.8660000562667847,6.729000091552734 -1.8660000562667847,-6.729000091552734 -1.8660000562667847,-6.729000091552734z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,94.87899780273438,93.60099792480469)">
                                                            <path fill="rgb(244,173,43)"
                                                                  fill-opacity="1"
                                                                  d=" M-2.5989999771118164,1.1790000200271606 C-2.5989999771118164,1.1790000200271606 1.1339999437332153,1.1790000200271606 1.1339999437332153,1.1790000200271606 C1.1339999437332153,1.1790000200271606 2.5989999771118164,-1.1790000200271606 2.5989999771118164,-1.1790000200271606 C2.5989999771118164,-1.1790000200271606 -2.5989999771118164,-1.1790000200271606 -2.5989999771118164,-1.1790000200271606 C-2.5989999771118164,-1.1790000200271606 -2.5989999771118164,1.1790000200271606 -2.5989999771118164,1.1790000200271606z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,97.46800231933594,109.41799926757812)">
                                                            <path fill="rgb(244,173,43)"
                                                                  fill-opacity="1"
                                                                  d=" M-5.186999797821045,-1.1790000200271606 C-5.186999797821045,-1.1790000200271606 -1.4550000429153442,-1.1790000200271606 -1.4550000429153442,-1.1790000200271606 C-1.4550000429153442,-1.1790000200271606 5.186999797821045,1.1790000200271606 5.186999797821045,1.1790000200271606 C5.186999797821045,1.1790000200271606 -5.186999797821045,1.1790000200271606 -5.186999797821045,1.1790000200271606 C-5.186999797821045,1.1790000200271606 -5.186999797821045,-1.1790000200271606 -5.186999797821045,-1.1790000200271606z"></path>
                                                        </g>
                                                        <g opacity="1"
                                                           transform="matrix(1,0,0,1,101.8030014038086,119.45899963378906)">
                                                            <path fill="rgb(75,137,157)"
                                                                  fill-opacity="1"
                                                                  d=" M-9.52299976348877,1.1799999475479126 C-9.52299976348877,1.1799999475479126 9.52299976348877,1.1799999475479126 9.52299976348877,1.1799999475479126 C9.52299976348877,1.1799999475479126 0.8519999980926514,-1.1799999475479126 0.8519999980926514,-1.1799999475479126 C0.8519999980926514,-1.1799999475479126 -9.52299976348877,-1.1799999475479126 -9.52299976348877,-1.1799999475479126 C-9.52299976348877,-1.1799999475479126 -9.52299976348877,1.1799999475479126 -9.52299976348877,1.1799999475479126z"></path>
                                                        </g>
                                                    </g>
                                                    <g clip-path="url(#__lottie_element_2148)"
                                                       transform="matrix(0.269430011510849,0,0,0.269430011510849,-3.6683349609375,-0.9326324462890625)"
                                                       opacity="1" style="display: block;">
                                                        <g clip-path="url(#__lottie_element_2203)"
                                                           transform="matrix(1,0,0,1,0,0)"
                                                           opacity="1"
                                                           style="display: block;">
                                                            <g transform="matrix(-0.04310598596930504,1.1391847133636475,-1.1391847133636475,-0.04310598596930504,772.5238037109375,597.7265625)"
                                                               opacity="1"
                                                               style="display: block;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,-871.1799926757812,173.32000732421875)">
                                                                    <path
                                                                        fill="rgb(57,64,100)"
                                                                        fill-opacity="1"
                                                                        d=" M206.82049560546875,-162.82049560546875 C206.82049560546875,-162.82049560546875 206.82049560546875,162.82049560546875 206.82049560546875,162.82049560546875 C206.82049560546875,187.10409545898438 187.10409545898438,206.82049560546875 162.82049560546875,206.82049560546875 C162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 C-187.10409545898438,206.82049560546875 -206.82049560546875,187.10409545898438 -206.82049560546875,162.82049560546875 C-206.82049560546875,162.82049560546875 -206.82049560546875,-162.82049560546875 -206.82049560546875,-162.82049560546875 C-206.82049560546875,-187.10409545898438 -187.10409545898438,-206.82049560546875 -162.82049560546875,-206.82049560546875 C-162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 C187.10409545898438,-206.82049560546875 206.82049560546875,-187.10409545898438 206.82049560546875,-162.82049560546875z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="0"
                                                                        d=" M206.82049560546875,-162.82049560546875 C206.82049560546875,-162.82049560546875 206.82049560546875,162.82049560546875 206.82049560546875,162.82049560546875 C206.82049560546875,187.10409545898438 187.10409545898438,206.82049560546875 162.82049560546875,206.82049560546875 C162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 C-187.10409545898438,206.82049560546875 -206.82049560546875,187.10409545898438 -206.82049560546875,162.82049560546875 C-206.82049560546875,162.82049560546875 -206.82049560546875,-162.82049560546875 -206.82049560546875,-162.82049560546875 C-206.82049560546875,-187.10409545898438 -187.10409545898438,-206.82049560546875 -162.82049560546875,-206.82049560546875 C-162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 C187.10409545898438,-206.82049560546875 206.82049560546875,-187.10409545898438 206.82049560546875,-162.82049560546875z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(-0.60269695520401,-0.27653443813323975,0.27653443813323975,-0.60269695520401,1771.295166015625,-326.8680419921875)"
                                                               opacity="1"
                                                               style="display: block;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,-871.1799926757812,173.32000732421875)">
                                                                    <path
                                                                        fill="rgb(253,217,3)"
                                                                        fill-opacity="1"
                                                                        d=" M206.82049560546875,-162.82049560546875 C206.82049560546875,-162.82049560546875 206.82049560546875,162.82049560546875 206.82049560546875,162.82049560546875 C206.82049560546875,187.10409545898438 187.10409545898438,206.82049560546875 162.82049560546875,206.82049560546875 C162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 C-187.10409545898438,206.82049560546875 -206.82049560546875,187.10409545898438 -206.82049560546875,162.82049560546875 C-206.82049560546875,162.82049560546875 -206.82049560546875,-162.82049560546875 -206.82049560546875,-162.82049560546875 C-206.82049560546875,-187.10409545898438 -187.10409545898438,-206.82049560546875 -162.82049560546875,-206.82049560546875 C-162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 C187.10409545898438,-206.82049560546875 206.82049560546875,-187.10409545898438 206.82049560546875,-162.82049560546875z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="0"
                                                                        d=" M206.82049560546875,-162.82049560546875 C206.82049560546875,-162.82049560546875 206.82049560546875,162.82049560546875 206.82049560546875,162.82049560546875 C206.82049560546875,187.10409545898438 187.10409545898438,206.82049560546875 162.82049560546875,206.82049560546875 C162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 C-187.10409545898438,206.82049560546875 -206.82049560546875,187.10409545898438 -206.82049560546875,162.82049560546875 C-206.82049560546875,162.82049560546875 -206.82049560546875,-162.82049560546875 -206.82049560546875,-162.82049560546875 C-206.82049560546875,-187.10409545898438 -187.10409545898438,-206.82049560546875 -162.82049560546875,-206.82049560546875 C-162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 C187.10409545898438,-206.82049560546875 206.82049560546875,-187.10409545898438 206.82049560546875,-162.82049560546875z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(-0.6374799013137817,-0.9451028108596802,0.9451028108596802,-0.6374799013137817,737.2354736328125,-876.6309204101562)"
                                                               opacity="1"
                                                               style="display: block;">
                                                                <g opacity="1"
                                                                   transform="matrix(0.34569287300109863,0.10552400350570679,-0.10552400350570679,0.34569287300109863,-1090.18798828125,454.7030029296875)">
                                                                    <path
                                                                        fill="rgb(127,179,224)"
                                                                        fill-opacity="1"
                                                                        d=" M206.82049560546875,-206.82049560546875 C206.82049560546875,-206.82049560546875 206.82049560546875,206.82049560546875 206.82049560546875,206.82049560546875 C206.82049560546875,206.82049560546875 -206.82049560546875,206.82049560546875 -206.82049560546875,206.82049560546875 C-206.82049560546875,206.82049560546875 -206.82049560546875,-206.82049560546875 -206.82049560546875,-206.82049560546875 C-206.82049560546875,-206.82049560546875 206.82049560546875,-206.82049560546875 206.82049560546875,-206.82049560546875z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="0"
                                                                        d=" M206.82049560546875,-206.82049560546875 C206.82049560546875,-206.82049560546875 206.82049560546875,206.82049560546875 206.82049560546875,206.82049560546875 C206.82049560546875,206.82049560546875 -206.82049560546875,206.82049560546875 -206.82049560546875,206.82049560546875 C-206.82049560546875,206.82049560546875 -206.82049560546875,-206.82049560546875 -206.82049560546875,-206.82049560546875 C-206.82049560546875,-206.82049560546875 206.82049560546875,-206.82049560546875 206.82049560546875,-206.82049560546875z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(1.707268238067627,-1.3974326848983765,1.3974326848983765,1.707268238067627,1047.550537109375,-2029.1217041015625)"
                                                               opacity="1"
                                                               style="display: block;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,-871.1799926757812,173.32000732421875)">
                                                                    <path
                                                                        fill="rgb(241,167,177)"
                                                                        fill-opacity="1"
                                                                        d=" M206.82049560546875,-162.82049560546875 C206.82049560546875,-162.82049560546875 206.82049560546875,162.82049560546875 206.82049560546875,162.82049560546875 C206.82049560546875,187.10409545898438 187.10409545898438,206.82049560546875 162.82049560546875,206.82049560546875 C162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 C-187.10409545898438,206.82049560546875 -206.82049560546875,187.10409545898438 -206.82049560546875,162.82049560546875 C-206.82049560546875,162.82049560546875 -206.82049560546875,-162.82049560546875 -206.82049560546875,-162.82049560546875 C-206.82049560546875,-187.10409545898438 -187.10409545898438,-206.82049560546875 -162.82049560546875,-206.82049560546875 C-162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 C187.10409545898438,-206.82049560546875 206.82049560546875,-187.10409545898438 206.82049560546875,-162.82049560546875z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="0"
                                                                        d=" M206.82049560546875,-162.82049560546875 C206.82049560546875,-162.82049560546875 206.82049560546875,162.82049560546875 206.82049560546875,162.82049560546875 C206.82049560546875,187.10409545898438 187.10409545898438,206.82049560546875 162.82049560546875,206.82049560546875 C162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 C-187.10409545898438,206.82049560546875 -206.82049560546875,187.10409545898438 -206.82049560546875,162.82049560546875 C-206.82049560546875,162.82049560546875 -206.82049560546875,-162.82049560546875 -206.82049560546875,-162.82049560546875 C-206.82049560546875,-187.10409545898438 -187.10409545898438,-206.82049560546875 -162.82049560546875,-206.82049560546875 C-162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 C187.10409545898438,-206.82049560546875 206.82049560546875,-187.10409545898438 206.82049560546875,-162.82049560546875z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(1.2304500341415405,0,0,1.2304500341415405,1226.798583984375,-1134.1444091796875)"
                                                               opacity="1"
                                                               style="display: block;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,87.89800262451172,627.1950073242188)">
                                                                    <path
                                                                        fill="rgb(0,155,138)"
                                                                        fill-opacity="1"
                                                                        d=" M0,-282.6405029296875 C155.98928833007812,-282.6405029296875 282.6405029296875,-155.98928833007812 282.6405029296875,0 C282.6405029296875,155.98928833007812 155.98928833007812,282.6405029296875 0,282.6405029296875 C-155.98928833007812,282.6405029296875 -282.6405029296875,155.98928833007812 -282.6405029296875,0 C-282.6405029296875,-155.98928833007812 -155.98928833007812,-282.6405029296875 0,-282.6405029296875z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="0"
                                                                        d=" M0,-282.6405029296875 C155.98928833007812,-282.6405029296875 282.6405029296875,-155.98928833007812 282.6405029296875,0 C282.6405029296875,155.98928833007812 155.98928833007812,282.6405029296875 0,282.6405029296875 C-155.98928833007812,282.6405029296875 -282.6405029296875,155.98928833007812 -282.6405029296875,0 C-282.6405029296875,-155.98928833007812 -155.98928833007812,-282.6405029296875 0,-282.6405029296875z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(0.8479200005531311,0,0,0.8479200005531311,1852.080078125,-211.71664428710938)"
                                                               opacity="1"
                                                               style="display: block;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,998.7109985351562,-10.788999557495117)">
                                                                    <path
                                                                        fill="rgb(206,64,116)"
                                                                        fill-opacity="1"
                                                                        d=" M0,-206.71099853515625 C114.08380126953125,-206.71099853515625 206.71099853515625,-114.08380126953125 206.71099853515625,0 C206.71099853515625,114.08380126953125 114.08380126953125,206.71099853515625 0,206.71099853515625 C-114.08380126953125,206.71099853515625 -206.71099853515625,114.08380126953125 -206.71099853515625,0 C-206.71099853515625,-114.08380126953125 -114.08380126953125,-206.71099853515625 0,-206.71099853515625z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="0"
                                                                        d=" M0,-206.71099853515625 C114.08380126953125,-206.71099853515625 206.71099853515625,-114.08380126953125 206.71099853515625,0 C206.71099853515625,114.08380126953125 114.08380126953125,206.71099853515625 0,206.71099853515625 C-114.08380126953125,206.71099853515625 -206.71099853515625,114.08380126953125 -206.71099853515625,0 C-206.71099853515625,-114.08380126953125 -114.08380126953125,-206.71099853515625 0,-206.71099853515625z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g clip-path="url(#__lottie_element_2181)"
                                                           transform="matrix(-2.6966300010681152,0,0,2.6966300010681152,4580.0009765625,-40.61260986328125)"
                                                           opacity="1"
                                                           style="display: none;">
                                                            <g transform="matrix(-0.04310598596930504,1.1391847133636475,-1.1391847133636475,-0.04310598596930504,772.5238037109375,597.7265625)"
                                                               opacity="1"
                                                               style="display: block;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,-871.1799926757812,173.32000732421875)">
                                                                    <path
                                                                        fill="rgb(57,64,100)"
                                                                        fill-opacity="1"
                                                                        d=" M206.82049560546875,-162.82049560546875 C206.82049560546875,-162.82049560546875 206.82049560546875,162.82049560546875 206.82049560546875,162.82049560546875 C206.82049560546875,187.10409545898438 187.10409545898438,206.82049560546875 162.82049560546875,206.82049560546875 C162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 C-187.10409545898438,206.82049560546875 -206.82049560546875,187.10409545898438 -206.82049560546875,162.82049560546875 C-206.82049560546875,162.82049560546875 -206.82049560546875,-162.82049560546875 -206.82049560546875,-162.82049560546875 C-206.82049560546875,-187.10409545898438 -187.10409545898438,-206.82049560546875 -162.82049560546875,-206.82049560546875 C-162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 C187.10409545898438,-206.82049560546875 206.82049560546875,-187.10409545898438 206.82049560546875,-162.82049560546875z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="0"
                                                                        d=" M206.82049560546875,-162.82049560546875 C206.82049560546875,-162.82049560546875 206.82049560546875,162.82049560546875 206.82049560546875,162.82049560546875 C206.82049560546875,187.10409545898438 187.10409545898438,206.82049560546875 162.82049560546875,206.82049560546875 C162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 C-187.10409545898438,206.82049560546875 -206.82049560546875,187.10409545898438 -206.82049560546875,162.82049560546875 C-206.82049560546875,162.82049560546875 -206.82049560546875,-162.82049560546875 -206.82049560546875,-162.82049560546875 C-206.82049560546875,-187.10409545898438 -187.10409545898438,-206.82049560546875 -162.82049560546875,-206.82049560546875 C-162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 C187.10409545898438,-206.82049560546875 206.82049560546875,-187.10409545898438 206.82049560546875,-162.82049560546875z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(-0.60269695520401,-0.27653443813323975,0.27653443813323975,-0.60269695520401,1771.295166015625,-326.8680419921875)"
                                                               opacity="1"
                                                               style="display: block;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,-871.1799926757812,173.32000732421875)">
                                                                    <path
                                                                        fill="rgb(253,217,3)"
                                                                        fill-opacity="1"
                                                                        d=" M206.82049560546875,-162.82049560546875 C206.82049560546875,-162.82049560546875 206.82049560546875,162.82049560546875 206.82049560546875,162.82049560546875 C206.82049560546875,187.10409545898438 187.10409545898438,206.82049560546875 162.82049560546875,206.82049560546875 C162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 C-187.10409545898438,206.82049560546875 -206.82049560546875,187.10409545898438 -206.82049560546875,162.82049560546875 C-206.82049560546875,162.82049560546875 -206.82049560546875,-162.82049560546875 -206.82049560546875,-162.82049560546875 C-206.82049560546875,-187.10409545898438 -187.10409545898438,-206.82049560546875 -162.82049560546875,-206.82049560546875 C-162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 C187.10409545898438,-206.82049560546875 206.82049560546875,-187.10409545898438 206.82049560546875,-162.82049560546875z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="0"
                                                                        d=" M206.82049560546875,-162.82049560546875 C206.82049560546875,-162.82049560546875 206.82049560546875,162.82049560546875 206.82049560546875,162.82049560546875 C206.82049560546875,187.10409545898438 187.10409545898438,206.82049560546875 162.82049560546875,206.82049560546875 C162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 C-187.10409545898438,206.82049560546875 -206.82049560546875,187.10409545898438 -206.82049560546875,162.82049560546875 C-206.82049560546875,162.82049560546875 -206.82049560546875,-162.82049560546875 -206.82049560546875,-162.82049560546875 C-206.82049560546875,-187.10409545898438 -187.10409545898438,-206.82049560546875 -162.82049560546875,-206.82049560546875 C-162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 C187.10409545898438,-206.82049560546875 206.82049560546875,-187.10409545898438 206.82049560546875,-162.82049560546875z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(-0.10804255306720734,-1.1348686218261719,1.1348686218261719,-0.10804255306720734,1227.4891357421875,-1069.953369140625)"
                                                               opacity="1"
                                                               style="display: block;">
                                                                <g opacity="1"
                                                                   transform="matrix(0.34569287300109863,0.10552400350570679,-0.10552400350570679,0.34569287300109863,-1090.18798828125,454.7030029296875)">
                                                                    <path
                                                                        fill="rgb(127,179,224)"
                                                                        fill-opacity="1"
                                                                        d=" M206.82049560546875,-206.82049560546875 C206.82049560546875,-206.82049560546875 206.82049560546875,206.82049560546875 206.82049560546875,206.82049560546875 C206.82049560546875,206.82049560546875 -206.82049560546875,206.82049560546875 -206.82049560546875,206.82049560546875 C-206.82049560546875,206.82049560546875 -206.82049560546875,-206.82049560546875 -206.82049560546875,-206.82049560546875 C-206.82049560546875,-206.82049560546875 206.82049560546875,-206.82049560546875 206.82049560546875,-206.82049560546875z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="0"
                                                                        d=" M206.82049560546875,-206.82049560546875 C206.82049560546875,-206.82049560546875 206.82049560546875,206.82049560546875 206.82049560546875,206.82049560546875 C206.82049560546875,206.82049560546875 -206.82049560546875,206.82049560546875 -206.82049560546875,206.82049560546875 C-206.82049560546875,206.82049560546875 -206.82049560546875,-206.82049560546875 -206.82049560546875,-206.82049560546875 C-206.82049560546875,-206.82049560546875 206.82049560546875,-206.82049560546875 206.82049560546875,-206.82049560546875z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(1.707268238067627,-1.3974326848983765,1.3974326848983765,1.707268238067627,1047.550537109375,-2029.1217041015625)"
                                                               opacity="1"
                                                               style="display: block;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,-871.1799926757812,173.32000732421875)">
                                                                    <path
                                                                        fill="rgb(241,167,177)"
                                                                        fill-opacity="1"
                                                                        d=" M206.82049560546875,-162.82049560546875 C206.82049560546875,-162.82049560546875 206.82049560546875,162.82049560546875 206.82049560546875,162.82049560546875 C206.82049560546875,187.10409545898438 187.10409545898438,206.82049560546875 162.82049560546875,206.82049560546875 C162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 C-187.10409545898438,206.82049560546875 -206.82049560546875,187.10409545898438 -206.82049560546875,162.82049560546875 C-206.82049560546875,162.82049560546875 -206.82049560546875,-162.82049560546875 -206.82049560546875,-162.82049560546875 C-206.82049560546875,-187.10409545898438 -187.10409545898438,-206.82049560546875 -162.82049560546875,-206.82049560546875 C-162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 C187.10409545898438,-206.82049560546875 206.82049560546875,-187.10409545898438 206.82049560546875,-162.82049560546875z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="0"
                                                                        d=" M206.82049560546875,-162.82049560546875 C206.82049560546875,-162.82049560546875 206.82049560546875,162.82049560546875 206.82049560546875,162.82049560546875 C206.82049560546875,187.10409545898438 187.10409545898438,206.82049560546875 162.82049560546875,206.82049560546875 C162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 -162.82049560546875,206.82049560546875 C-187.10409545898438,206.82049560546875 -206.82049560546875,187.10409545898438 -206.82049560546875,162.82049560546875 C-206.82049560546875,162.82049560546875 -206.82049560546875,-162.82049560546875 -206.82049560546875,-162.82049560546875 C-206.82049560546875,-187.10409545898438 -187.10409545898438,-206.82049560546875 -162.82049560546875,-206.82049560546875 C-162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 162.82049560546875,-206.82049560546875 C187.10409545898438,-206.82049560546875 206.82049560546875,-187.10409545898438 206.82049560546875,-162.82049560546875z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(1.2304500341415405,0,0,1.2304500341415405,1226.798583984375,-843.9208984375)"
                                                               opacity="1"
                                                               style="display: block;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,87.89800262451172,627.1950073242188)">
                                                                    <path
                                                                        fill="rgb(0,155,138)"
                                                                        fill-opacity="1"
                                                                        d=" M0,-282.6405029296875 C155.98928833007812,-282.6405029296875 282.6405029296875,-155.98928833007812 282.6405029296875,0 C282.6405029296875,155.98928833007812 155.98928833007812,282.6405029296875 0,282.6405029296875 C-155.98928833007812,282.6405029296875 -282.6405029296875,155.98928833007812 -282.6405029296875,0 C-282.6405029296875,-155.98928833007812 -155.98928833007812,-282.6405029296875 0,-282.6405029296875z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="0"
                                                                        d=" M0,-282.6405029296875 C155.98928833007812,-282.6405029296875 282.6405029296875,-155.98928833007812 282.6405029296875,0 C282.6405029296875,155.98928833007812 155.98928833007812,282.6405029296875 0,282.6405029296875 C-155.98928833007812,282.6405029296875 -282.6405029296875,155.98928833007812 -282.6405029296875,0 C-282.6405029296875,-155.98928833007812 -155.98928833007812,-282.6405029296875 0,-282.6405029296875z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(0.8479200005531311,0,0,0.8479200005531311,1852.080078125,0.8901071548461914)"
                                                               opacity="1"
                                                               style="display: block;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,998.7109985351562,-10.788999557495117)">
                                                                    <path
                                                                        fill="rgb(206,64,116)"
                                                                        fill-opacity="1"
                                                                        d=" M0,-206.71099853515625 C114.08380126953125,-206.71099853515625 206.71099853515625,-114.08380126953125 206.71099853515625,0 C206.71099853515625,114.08380126953125 114.08380126953125,206.71099853515625 0,206.71099853515625 C-114.08380126953125,206.71099853515625 -206.71099853515625,114.08380126953125 -206.71099853515625,0 C-206.71099853515625,-114.08380126953125 -114.08380126953125,-206.71099853515625 0,-206.71099853515625z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="0"
                                                                        d=" M0,-206.71099853515625 C114.08380126953125,-206.71099853515625 206.71099853515625,-114.08380126953125 206.71099853515625,0 C206.71099853515625,114.08380126953125 114.08380126953125,206.71099853515625 0,206.71099853515625 C-114.08380126953125,206.71099853515625 -206.71099853515625,114.08380126953125 -206.71099853515625,0 C-206.71099853515625,-114.08380126953125 -114.08380126953125,-206.71099853515625 0,-206.71099853515625z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g clip-path="url(#__lottie_element_2168)"
                                                           transform="matrix(13.71111011505127,0,0,13.71111011505127,-6891.99951171875,-7338.49951171875)"
                                                           opacity="1"
                                                           style="display: none;">
                                                            <g transform="matrix(0.44490134716033936,0,0,0.44490134716033936,786.9970703125,626.223876953125)"
                                                               opacity="0.25003163294113306"
                                                               style="display: none;">
                                                                <g opacity="1" transform="matrix(1,0,0,1,16.20800018310547,77.86699
  676513672)">
                                                                    <path
                                                                        fill="rgb(255,142,181)"
                                                                        fill-opacity="1"
                                                                        d=" M-13.701000213623047,-10.074999809265137 C-13.701000213623047,-10.074999809265137 6.822000026702881,-15.57800006866455 6.822000026702881,-15.57800006866455 C8.23900032043457,-15.958000183105469 9.694999694824219,-15.116999626159668 10.074999809265137,-13.699999809265137 C10.074999809265137,-13.699999809265137 15.57800006866455,6.822000026702881 15.57800006866455,6.822000026702881 C15.958000183105469,8.23900032043457 15.116999626159668,9.696000099182129 13.699999809265137,10.076000213623047 C13.699999809265137,10.076000213623047 -6.822999954223633,15.57800006866455 -6.822999954223633,15.57800006866455 C-8.239999771118164,15.958000183105469 -9.696000099182129,15.118000030517578 -10.076000213623047,13.701000213623047 C-10.076000213623047,13.701000213623047 -15.57800006866455,-6.822000026702881 -15.57800006866455,-6.822000026702881 C-15.958000183105469,-8.23900032043457 -15.118000030517578,-9.694999694824219 -13.701000213623047,-10.074999809265137z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(0.3566337525844574,0,0,0.3566337525844574,354.7773132324219,578.2190551757812)"
                                                               opacity="0.1254204856902956"
                                                               style="display: none;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,38.512001037597656,22.10099983215332)">
                                                                    <path
                                                                        fill="rgb(29,189,170)"
                                                                        fill-opacity="1"
                                                                        d=" M0,-13.279000282287598 C7.333000183105469,-13.279000282287598 13.277999877929688,-7.333000183105469 13.277999877929688,0 C13.277999877929688,7.334000110626221 7.333000183105469,13.279000282287598 0,13.279000282287598 C-7.333000183105469,13.279000282287598 -13.277999877929688,7.334000110626221 -13.277999877929688,0 C-13.277999877929688,-7.333000183105469 -7.333000183105469,-13.279000282287598 0,-13.279000282287598z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(0.5827409625053406,0,0,0.5827409625053406,485.0050964355469,419.0860900878906)"
                                                               opacity="0.08425236133086571"
                                                               style="display: none;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,95.8759994506836,43.345001220703125)">
                                                                    <path
                                                                        fill="rgb(255,215,0)"
                                                                        fill-opacity="1"
                                                                        d=" M-5.480000019073486,-4.031000137329102 C-5.480000019073486,-4.031000137329102 2.7290000915527344,-6.23199987411499 2.7290000915527344,-6.23199987411499 C3.2950000762939453,-6.383999824523926 3.878000020980835,-6.046999931335449 4.03000020980835,-5.480000019073486 C4.03000020980835,-5.480000019073486 6.230999946594238,2.7290000915527344 6.230999946594238,2.7290000915527344 C6.382999897003174,3.2960000038146973 6.046000003814697,3.878999948501587 5.480000019073486,4.031000137329102 C5.480000019073486,4.031000137329102 -2.7290000915527344,6.23199987411499 -2.7290000915527344,6.23199987411499 C-3.2950000762939453,6.383999824523926 -3.878000020980835,6.046999931335449 -4.031000137329102,5.480999946594238 C-4.031000137329102,5.480999946594238 -6.230999946594238,-2.7290000915527344 -6.230999946594238,-2.7290000915527344 C-6.382999897003174,-3.2950000762939453 -6.046999931335449,-3.878999948501587 -5.480000019073486,-4.031000137329102z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g clip-path="url(#__lottie_element_2155)"
                                                           transform="matrix(0,-5.84443998336792,5.84443998336792,0,-2507.99755859375,3661.49755859375)"
                                                           opacity="1"
                                                           style="display: none;">
                                                            <g transform="matrix(0.2666845917701721,0,0,0.2666845917701721,649.8855590820312,690.10107421875)"
                                                               opacity="0.041741787840011285"
                                                               style="display: none;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,16.20800018310547,77.86699676513672)">
                                                                    <path
                                                                        fill="rgb(255,142,181)"
                                                                        fill-opacity="1"
                                                                        d=" M-13.701000213623047,-10.074999809265137 C-13.701000213623047,-10.074999809265137 6.822000026702881,-15.57800006866455 6.822000026702881,-15.57800006866455 C8.23900032043457,-15.958000183105469 9.694999694824219,-15.116999626159668 10.074999809265137,-13.699999809265137 C10.074999809265137,-13.699999809265137 15.57800006866455,6.822000026702881 15.57800006866455,6.822000026702881 C15.958000183105469,8.23900032043457 15.116999626159668,9.696000099182129 13.699999809265137,10.076000213623047 C13.699999809265137,10.076000213623047 -6.822999954223633,15.57800006866455 -6.822999954223633,15.57800006866455 C-8.239999771118164,15.958000183105469 -9.696000099182129,15.118000030517578 -10.076000213623047,13.701000213623047 C-10.076000213623047,13.701000213623047 -15.57800006866455,-6.822000026702881 -15.57800006866455,-6.822000026702881 C-15.958000183105469,-8.23900032043457 -15.118000030517578,-9.694999694824219 -13.701000213623047,-10.074999809265137z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(0.3564155697822571,0,0,0.3564155697822571,634.7857666015625,416.223876953125)"
                                                               opacity="0.12522895729239508"
                                                               style="display: none;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,38.512001037597656,22.10099983215332)">
                                                                    <path
                                                                        fill="rgb(29,189,170)"
                                                                        fill-opacity="1"
                                                                        d=" M0,-13.279000282287598 C7.333000183105469,-13.279000282287598 13.277999877929688,-7.333000183105469 13.277999877929688,0 C13.277999877929688,7.334000110626221 7.333000183105469,13.279000282287598 0,13.279000282287598 C-7.333000183105469,13.279000282287598 -13.277999877929688,7.334000110626221 -13.277999877929688,0 C-13.277999877929688,-7.333000183105469 -7.333000183105469,-13.279000282287598 0,-13.279000282287598z"></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(0.5821376442909241,0,0,0.5821376442909241,673.0629272460938,561.1121826171875)"
                                                               opacity="0.08380487230809991"
                                                               style="display: none;">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,95.8759994506836,43.345001220703125)">
                                                                    <path
                                                                        fill="rgb(255,215,0)"
                                                                        fill-opacity="1"
                                                                        d=" M-5.480000019073486,-4.031000137329102 C-5.480000019073486,-4.031000137329102 2.7290000915527344,-6.23199987411499 2.7290000915527344,-6.23199987411499 C3.2950000762939453,-6.383999824523926 3.878000020980835,-6.046999931335449 4.03000020980835,-5.480000019073486 C4.03000020980835,-5.480000019073486 6.230999946594238,2.7290000915527344 6.230999946594238,2.7290000915527344 C6.382999897003174,3.2960000038146973 6.046000003814697,3.878999948501587 5.480000019073486,4.031000137329102 C5.480000019073486,4.031000137329102 -2.7290000915527344,6.23199987411499 -2.7290000915527344,6.23199987411499 C-3.2950000762939453,6.383999824523926 -3.878000020980835,6.046999931335449 -4.031000137329102,5.480999946594238 C-4.031000137329102,5.480999946594238 -6.230999946594238,-2.7290000915527344 -6.230999946594238,-2.7290000915527344 C-6.382999897003174,-3.2950000762939453 -6.046999931335449,-3.878999948501587 -5.480000019073486,-4.031000137329102z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g transform="matrix(1,0,0,1,944,-5410.5)"
                                                           opacity="1"
                                                           style="display: block;">
                                                            <g opacity="1"
                                                               transform="matrix(1,0,0,1,501.41400146484375,2447.9140625)">
                                                                <path fill="rgb(253,217,3)"
                                                                      fill-opacity="1"
                                                                      d=" M0,-2689.4140625 C1484.28759765625,-2689.4140625 2689.4140625,-1484.28759765625 2689.4140625,0 C2689.4140625,1484.28759765625 1484.28759765625,2689.4140625 0,2689.4140625 C-1484.28759765625,2689.4140625 -2689.4140625,1484.28759765625 -2689.4140625,0 C-2689.4140625,-1484.28759765625 -1484.28759765625,-2689.4140625 0,-2689.4140625z"></path>
                                                                <path stroke-linecap="butt"
                                                                      stroke-linejoin="miter"
                                                                      fill-opacity="0"
                                                                      stroke-miterlimit="4"
                                                                      stroke="rgb(255,255,255)"
                                                                      stroke-opacity="1"
                                                                      stroke-width="0"
                                                                      d=" M0,-2689.4140625 C1484.28759765625,-2689.4140625 2689.4140625,-1484.28759765625 2689.4140625,0 C2689.4140625,1484.28759765625 1484.28759765625,2689.4140625 0,2689.4140625 C-1484.28759765625,2689.4140625 -2689.4140625,1484.28759765625 -2689.4140625,0 C-2689.4140625,-1484.28759765625 -1484.28759765625,-2689.4140625 0,-2689.4140625z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g clip-path="url(#__lottie_element_2086)"
                                                       style="display: none;"
                                                       transform="matrix(0.4416700005531311,0,0,0.4416700005531311,-44.003204345703125,-4.959053039550781)"
                                                       opacity="1">
                                                        <g clip-path="url(#__lottie_element_2090)"
                                                           style="display: block;"
                                                           transform="matrix(5.119999885559082,0,0,5.119999885559082,0,-41)"
                                                           opacity="1">
                                                            <g style="display: none;"
                                                               transform="matrix(1,0,0,1,303.8920593261719,117.28590393066406)"
                                                               opacity="0.015640748744732917">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(48,214,175)"
                                                                        fill-opacity="1"
                                                                        d=" M-180.01600646972656,-34.98400115966797 C-180.01600646972656,-34.98400115966797 -183.8280029296875,-31.437999725341797 -183.8280029296875,-31.437999725341797 C-183.8280029296875,-31.437999725341797 -179.5469970703125,-25.672000885009766 -179.5469970703125,-25.672000885009766 C-179.5469970703125,-25.672000885009766 -175.73399353027344,-29.141000747680664 -175.73399353027344,-29.141000747680664 C-175.73399353027344,-29.141000747680664 -180.01600646972656,-34.98400115966797 -180.01600646972656,-34.98400115966797z"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(-0.5877852439880371,0.80901700258255,-0.80901700258255,-0.5877852439880371,59.55451965332031,168.804443359375)"
                                                               opacity="0.115700743941362">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(255,188,31)"
                                                                        fill-opacity="1"
                                                                        d=" M-123.15599822998047,-30.2810001373291 C-123.875,-28.875 -124.65599822998047,-27.5 -125.34400177001953,-26.1560001373291 C-123.34400177001953,-23.937000274658203 -118.75,-23.1560001373291 -116.06199645996094,-23.875 C-116.03099822998047,-25.375 -115.96900177001953,-26.874000549316406 -115.93800354003906,-28.562000274658203 C-118.31300354003906,-28.25 -121.09400177001953,-28.7810001373291 -123.15599822998047,-30.2810001373291z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="9"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(1,0,0,1,378.145263671875,55.94883728027344)"
                                                               opacity="0.11570925673604521">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(255,129,100)"
                                                                        fill-opacity="1"
                                                                        d=" M-167.875,23.7189998626709 C-169.5,25.3439998626709 -172.031005859375,27.718000411987305 -173.906005859375,29.562000274658203 C-173.81199645996094,32.09299850463867 -171.656005859375,34.46900177001953 -167.875,34.59400177001953 C-166.18699645996094,32.9379997253418 -163.625,30.25 -161.75,28.25 C-165.656005859375,29.0939998626709 -167.875,27.062999725341797 -167.875,23.7189998626709z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="9"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(-0.9059216380119324,0.4234454035758972,-0.4234454035758972,-0.9059216380119324,153.9520263671875,103.23197937011719)"
                                                               opacity="0.01558599998801057">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(63,103,242)"
                                                                        fill-opacity="1"
                                                                        d=" M21.9689998626709,23.2189998626709 C21.9689998626709,23.2189998626709 14.593999862670898,29.7810001373291 14.593999862670898,29.7810001373291 C14.593999862670898,29.7810001373291 18.562000274658203,34.65599822998047 18.562000274658203,34.65599822998047 C18.562000274658203,34.65599822998047 25.937999725341797,28.25 25.937999725341797,28.25 C25.937999725341797,28.25 21.9689998626709,23.2189998626709 21.9689998626709,23.2189998626709z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="9"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(1,0,0,1,-14.294509887695312,68.62464904785156)"
                                                               opacity="0.11584726776601997">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(48,214,175)"
                                                                        fill-opacity="1"
                                                                        d=" M75.15599822998047,13.406000137329102 C73.84400177001953,14.75 71.90599822998047,16.75 70.59400177001953,18 C71.06300354003906,20.6560001373291 74.15699768066406,23.1560001373291 76.71900177001953,23.562000274658203 C78.18800354003906,22.374000549316406 80.09400177001953,20.375 81.25,19.2810001373291 C78.40599822998047,18.4060001373291 75.93699645996094,16.468000411987305 75.15599822998047,13.406000137329102z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="9"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(1,0,0,1,-29.655548095703125,69.65971374511719)"
                                                               opacity="0.11524599998443393">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(255,188,31)"
                                                                        fill-opacity="1"
                                                                        d=" M123.375,6.5 C123.375,6.5 116.46900177001953,17.5 116.46900177001953,17.5 C116.46900177001953,17.5 125.25,21.25 125.25,21.25 C125.25,21.25 132,10.375 132,10.375 C132,10.375 123.375,6.5 123.375,6.5z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="9"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(1,0,0,1,-148.28321838378906,107.36874389648438)"
                                                               opacity="0.11259399999677072">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(250,118,151)"
                                                                        fill-opacity="1"
                                                                        d=" M150.968994140625,-34.875 C150.968994140625,-34.875 150.375,-29.5310001373291 150.375,-29.5310001373291 C150.375,-29.5310001373291 157.906005859375,-28.312000274658203 157.906005859375,-28.312000274658203 C157.906005859375,-28.312000274658203 158.125,-33.59400177001953 158.125,-33.59400177001953 C158.125,-33.59400177001953 150.968994140625,-34.875 150.968994140625,-34.875z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="9"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: block;"
                                                               transform="matrix(0,0,0,0,267.25,97)"
                                                               opacity="1">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,168.625,-49.375)">
                                                                    <path
                                                                        fill="rgb(250,118,151)"
                                                                        fill-opacity="1"
                                                                        d=" M0,-1.375 C0.7588624954223633,-1.375 1.375,-0.7588624954223633 1.375,0 C1.375,0.7588624954223633 0.7588624954223633,1.375 0,1.375 C-0.7588624954223633,1.375 -1.375,0.7588624954223633 -1.375,0 C-1.375,-0.7588624954223633 -0.7588624954223633,-1.375 0,-1.375z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,184,128)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="1.5"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: block;"
                                                               transform="matrix(0,0,0,0,231.75,101.5)"
                                                               opacity="1">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,168.625,-49.375)">
                                                                    <path
                                                                        fill="rgb(250,118,151)"
                                                                        fill-opacity="1"
                                                                        d="M0 0"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(125,220,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="1.5"
                                                                        d=" M0,-1.75 C0.9658250212669373,-1.75 1.75,-0.9658250212669373 1.75,0 C1.75,0.9658250212669373 0.9658250212669373,1.75 0,1.75 C-0.9658250212669373,1.75 -1.75,0.9658250212669373 -1.75,0 C-1.75,-0.9658250212669373 -0.9658250212669373,-1.75 0,-1.75z"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: block;"
                                                               transform="matrix(0,0,0,0,163.75,101)"
                                                               opacity="1">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,168.625,-49.375)">
                                                                    <path
                                                                        fill="rgb(53,104,249)"
                                                                        fill-opacity="1"
                                                                        d=" M0,-1.375 C0.7588624954223633,-1.375 1.375,-0.7588624954223633 1.375,0 C1.375,0.7588624954223633 0.7588624954223633,1.375 0,1.375 C-0.7588624954223633,1.375 -1.375,0.7588624954223633 -1.375,0 C-1.375,-0.7588624954223633 -0.7588624954223633,-1.375 0,-1.375z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,184,128)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="1.5"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: block;"
                                                               transform="matrix(0,0,0,0,95,98.25)"
                                                               opacity="1">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,168.625,-49.375)">
                                                                    <path
                                                                        fill="rgb(250,118,151)"
                                                                        fill-opacity="1"
                                                                        d="M0 0"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(125,255,174)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="1.5"
                                                                        d=" M0,-1.75 C0.9658250212669373,-1.75 1.75,-0.9658250212669373 1.75,0 C1.75,0.9658250212669373 0.9658250212669373,1.75 0,1.75 C-0.9658250212669373,1.75 -1.75,0.9658250212669373 -1.75,0 C-1.75,-0.9658250212669373 -0.9658250212669373,-1.75 0,-1.75z"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(1,0,0,1,369.24163818359375,117.67904663085938)"
                                                               opacity="0.015628749702689505">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(48,214,175)"
                                                                        fill-opacity="1"
                                                                        d=" M-180.01600646972656,-34.98400115966797 C-180.01600646972656,-34.98400115966797 -183.8280029296875,-31.437999725341797 -183.8280029296875,-31.437999725341797 C-183.8280029296875,-31.437999725341797 -179.5469970703125,-25.672000885009766 -179.5469970703125,-25.672000885009766 C-179.5469970703125,-25.672000885009766 -175.73399353027344,-29.141000747680664 -175.73399353027344,-29.141000747680664 C-175.73399353027344,-29.141000747680664 -180.01600646972656,-34.98400115966797 -180.01600646972656,-34.98400115966797z"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(-0.9659258127212524,-0.258819043636322,0.258819043636322,-0.9659258127212524,166.72645568847656,30.738189697265625)"
                                                               opacity="0.115700743941362">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(255,188,31)"
                                                                        fill-opacity="1"
                                                                        d=" M-123.15599822998047,-30.2810001373291 C-123.875,-28.875 -124.65599822998047,-27.5 -125.34400177001953,-26.1560001373291 C-123.34400177001953,-23.937000274658203 -118.75,-23.1560001373291 -116.06199645996094,-23.875 C-116.03099822998047,-25.375 -115.96900177001953,-26.874000549316406 -115.93800354003906,-28.562000274658203 C-118.31300354003906,-28.25 -121.09400177001953,-28.7810001373291 -123.15599822998047,-30.2810001373291z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="9"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(1,0,0,1,369.4511413574219,51.529945373535156)"
                                                               opacity="0.11570925673604521">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(255,129,100)"
                                                                        fill-opacity="1"
                                                                        d=" M-167.875,23.7189998626709 C-169.5,25.3439998626709 -172.031005859375,27.718000411987305 -173.906005859375,29.562000274658203 C-173.81199645996094,32.09299850463867 -171.656005859375,34.46900177001953 -167.875,34.59400177001953 C-166.18699645996094,32.9379997253418 -163.625,30.25 -161.75,28.25 C-165.656005859375,29.0939998626709 -167.875,27.062999725341797 -167.875,23.7189998626709z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="9"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(1,0,0,1,80.76204681396484,56.59623336791992)"
                                                               opacity="0.01558599998801057">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(63,103,242)"
                                                                        fill-opacity="1"
                                                                        d=" M21.9689998626709,23.2189998626709 C21.9689998626709,23.2189998626709 14.593999862670898,29.7810001373291 14.593999862670898,29.7810001373291 C14.593999862670898,29.7810001373291 18.562000274658203,34.65599822998047 18.562000274658203,34.65599822998047 C18.562000274658203,34.65599822998047 25.937999725341797,28.25 25.937999725341797,28.25 C25.937999725341797,28.25 21.9689998626709,23.2189998626709 21.9689998626709,23.2189998626709z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="9"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(1,0,0,1,181.31890869140625,62.58897399902344)"
                                                               opacity="0.11584726776601997">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(48,214,175)"
                                                                        fill-opacity="1"
                                                                        d=" M75.15599822998047,13.406000137329102 C73.84400177001953,14.75 71.90599822998047,16.75 70.59400177001953,18 C71.06300354003906,20.6560001373291 74.15699768066406,23.1560001373291 76.71900177001953,23.562000274658203 C78.18800354003906,22.374000549316406 80.09400177001953,20.375 81.25,19.2810001373291 C78.40599822998047,18.4060001373291 75.93699645996094,16.468000411987305 75.15599822998047,13.406000137329102z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="9"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(1,0,0,1,41.846092224121094,65.9249496459961)"
                                                               opacity="0.11524599998443393">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(255,188,31)"
                                                                        fill-opacity="1"
                                                                        d=" M123.375,6.5 C123.375,6.5 116.46900177001953,17.5 116.46900177001953,17.5 C116.46900177001953,17.5 125.25,21.25 125.25,21.25 C125.25,21.25 132,10.375 132,10.375 C132,10.375 123.375,6.5 123.375,6.5z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="9"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;"
                                                               transform="matrix(1,0,0,1,106.4346923828125,118.72640991210938)"
                                                               opacity="0.015628749702689505">
                                                                <g opacity="1"
                                                                   transform="matrix(1,0,0,1,0,0)">
                                                                    <path
                                                                        fill="rgb(250,118,151)"
                                                                        fill-opacity="1"
                                                                        d=" M150.968994140625,-34.875 C150.968994140625,-34.875 150.375,-29.5310001373291 150.375,-29.5310001373291 C150.375,-29.5310001373291 157.906005859375,-28.312000274658203 157.906005859375,-28.312000274658203 C157.906005859375,-28.312000274658203 158.125,-33.59400177001953 158.125,-33.59400177001953 C158.125,-33.59400177001953 150.968994140625,-34.875 150.968994140625,-34.875z"></path>
                                                                    <path
                                                                        stroke-linecap="butt"
                                                                        stroke-linejoin="miter"
                                                                        fill-opacity="0"
                                                                        stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)"
                                                                        stroke-opacity="1"
                                                                        stroke-width="9"
                                                                        d="M0 0"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="tgc-lie-theme-section-heading"><span>Choose when to deliver:</span><span
                                        tabindex="0" role="button" class="learn-more">Learn more</span>
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
                                                                class="updated-delivery-option-title">Standard</span>
                                                                <span
                                                                    class="updated-delivery-option-description">(Delivered <b>tomorrow</b>, by 20:30)</span>
                                                                <div class="info-icon">
                                                                    <div
                                                                        class="tgc-simple-tooltip long">
                                                                        <div
                                                                            class="tooltip--container">
                                                                            <div
                                                                                class="tooltip--text">
                                                                                Your money
                                                                                will reach
                                                                                your
                                                                                receiver’s
                                                                                bank account
                                                                                on the next
                                                                                business
                                                                                day.
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
                                                                Free
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
                                                                class="updated-delivery-option-title">Now</span>
                                                                <span
                                                                    class="updated-delivery-option-description">(Delivered within <b>30 minutes</b>)</span>
                                                            </div>
                                                        </div>
                                                        <div class="option-description">
                                                            Currently not available
                                                        </div>
                                                    </div>
                                                    <div class="do-fee discounted free">
                                                        <div class="fee-block">
                                                            <div class="previous-fee"><span
                                                                autocomplete="amount-input"
                                                                class="tgc-amount">£1.49</span>
                                                            </div>
                                                            <div class="current-fee free">
                                                                Free
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="delivery-options-hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper continue">
                                <button
                                    class="_1dZ3_E1uyq1SDOhbJ9YkTB MuiButton-root MuiButton-contained _2_O5344ddmoGlkcd6CGbOJ MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-disableElevation MuiButton-fullWidth MuiButtonBase-root  css-a2exai"
                                    tabindex="0" type="button" data-qa="continue-button">
                                    <span class="">Continue</span></button>
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
