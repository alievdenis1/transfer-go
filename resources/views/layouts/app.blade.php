<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TransferGo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="dashboard svg">
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-PCJ5ZF" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
</noscript>
<div id="app">
    <div class="_3vy-AK1RgGpBNb28Htno3W">
        <div class="main-view-wrapper">
            <div class="tgc-lie-app-main-view">
                <div class="_2FTmTNGEMpWyxBfyVoKYjt">
                    <div class="_1s8rxzgpLdzWoXGW9Yiwhv">
                        <div class="MuiDrawer-root MuiDrawer-docked css-1tu59u4">
                            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation0 qdc69tKEkSqvo__3A2xHx MuiDrawer-paper MuiDrawer-paperAnchorLeft MuiDrawer-paperAnchorDockedLeft css-16l9v21">
                                <section class="_12jOLfRztRS27KqeHJZp1Q">
                                    <header class="_32MRwcybR6pE9swTJ8f4z"><a class="tgc-links-inner active"
                                                                              href="/">
                                            <svg viewBox="0 0 90 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="_19GEZ2XBJzQO3d6CmKhI-F">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M76.005 24H1.936A1.929 1.929 0 010 22.08V1.92C0 .86.867 0 1.936 0h74.069c1.36 0 2.669.524 3.648 1.46l9.881 9.454a1.5 1.5 0 010 2.172l-9.881 9.453A5.278 5.278 0 0176.005 24z"
                                                      fill="#FAD527"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M12.353 11.092h-1.816l-.315 2.208a3.341 3.341 0 00-.042.498c0 .15.025.28.076.389.05.109.137.193.262.252.123.06.294.089.514.089.11 0 .255-.012.433-.034.18-.023.408-.07.408-.07l-.221 1.617c-.24.082-.484.136-.736.163a6.838 6.838 0 01-.736.042c-.348 0-.664-.037-.949-.11a1.878 1.878 0 01-.721-.347 1.336 1.336 0 01-.426-.62c-.088-.255-.108-.564-.061-.928l.96-6.749h2.063l-.274 1.964h1.814l-.233 1.636zM13.835 9.456h2.062l-.15 1.063h.027c.275-.41.577-.716.908-.92.329-.205.723-.307 1.182-.307.119 0 .238.005.357.013.119.01.23.028.33.055l-.261 1.868a2.738 2.738 0 00-.866-.136c-.394 0-.715.054-.962.163-.248.11-.446.262-.592.457-.147.196-.259.43-.336.702a6.47 6.47 0 00-.186.9l-.386 2.768H12.9l.935-6.626zM22.336 13.015c-.168 0-.377.008-.627.022-.25.015-.496.057-.737.125-.24.068-.452.17-.633.307a.796.796 0 00-.317.57.54.54 0 00.044.344.732.732 0 00.206.24.82.82 0 00.317.147c.123.03.243.044.361.044.217 0 .43-.03.642-.088.211-.058.402-.141.575-.249.171-.107.317-.243.434-.409.118-.165.193-.36.222-.585l.059-.468h-.546zm.258 2.235h-.028c-.275.355-.614.61-1.018.764a3.422 3.422 0 01-1.236.232c-.313 0-.606-.044-.88-.13a1.936 1.936 0 01-.708-.389 1.513 1.513 0 01-.433-.64c-.092-.255-.114-.55-.069-.887.083-.572.3-1.015.653-1.329.353-.314.77-.546 1.252-.695.48-.15.984-.239 1.511-.266a27.74 27.74 0 011.437-.041c.046-.364-.046-.652-.275-.866-.23-.213-.523-.32-.88-.32-.339 0-.658.07-.955.21a3.152 3.152 0 00-.832.58l-.934-1.118c.43-.354.914-.62 1.449-.797a5.167 5.167 0 011.63-.266c.605 0 1.092.075 1.464.225.37.15.652.37.845.661.192.291.304.648.337 1.07.032.423.007.912-.076 1.466l-.467 3.368h-1.898l.11-.832zM26.607 9.456h1.98l-.124.9h.028c.083-.128.192-.255.33-.383a2.593 2.593 0 011.76-.681c.522 0 .934.08 1.236.238.303.16.523.38.661.662.137.282.21.613.22.995.008.382-.02.796-.083 1.24l-.51 3.655h-2.061l.453-3.245c.028-.19.052-.389.07-.593a1.643 1.643 0 00-.042-.566.812.812 0 00-.261-.423c-.129-.109-.325-.163-.59-.163a1.4 1.4 0 00-.667.143c-.18.095-.324.223-.433.382-.11.159-.194.338-.248.538-.055.2-.097.41-.124.627l-.468 3.3h-2.062l.935-6.626zM37.865 11.405c-.248-.372-.623-.559-1.127-.559-.175 0-.349.041-.523.123a.516.516 0 00-.302.423c-.027.163.042.284.206.361.165.077.371.146.619.204.247.06.515.123.804.191.288.069.552.175.79.32.24.146.425.344.557.594.133.25.172.584.117 1.002-.054.427-.197.78-.426 1.057-.228.277-.502.5-.818.668a3.543 3.543 0 01-1.038.354 6.146 6.146 0 01-1.1.102c-.467 0-.93-.065-1.388-.197a2.22 2.22 0 01-1.114-.702l1.444-1.377c.165.236.354.415.57.538.216.123.479.184.791.184.238 0 .458-.034.66-.102.202-.068.315-.193.343-.375.027-.173-.039-.302-.2-.389a2.556 2.556 0 00-.618-.218l-.81-.19a3.041 3.041 0 01-.798-.307 1.455 1.455 0 01-.571-.58c-.137-.25-.173-.584-.11-1.002.056-.39.184-.727.385-1.009.202-.282.447-.513.736-.695.289-.182.607-.316.956-.403.348-.086.695-.13 1.044-.13.44 0 .875.065 1.306.192.43.127.78.354 1.045.681l-1.43 1.241zM40.762 8.283a6.46 6.46 0 01.24-1.03c.106-.322.269-.606.489-.852.22-.245.51-.438.873-.58.362-.14.822-.21 1.381-.21.21 0 .416.009.618.027.202.018.394.05.578.095l-.344 1.732a1.49 1.49 0 00-.646-.136c-.33 0-.586.07-.77.21-.183.142-.307.43-.37.867l-.151 1.05h1.525l-.234 1.636h-1.525l-.701 4.99h-2.063l1.1-7.8zM49.174 12.019c.055-.346-.018-.641-.22-.886-.202-.246-.49-.369-.866-.369-.23 0-.436.037-.618.11a1.765 1.765 0 00-.481.279 1.557 1.557 0 00-.537.866h2.722zm1.334 2.918c-.385.418-.845.74-1.38.968a4.121 4.121 0 01-1.617.34c-.513 0-.985-.081-1.415-.245a2.857 2.857 0 01-1.08-.702 2.77 2.77 0 01-.632-1.098c-.133-.427-.163-.904-.089-1.431a3.828 3.828 0 01.487-1.432 4.06 4.06 0 012.221-1.8c.476-.163.971-.245 1.484-.245.477 0 .9.082 1.266.245.366.164.664.398.893.702.228.305.387.67.475 1.098.087.427.094.905.02 1.432l-.096.64H46.26c.027.391.163.703.405.934.243.232.566.348.97.348.338 0 .634-.075.886-.225a2.95 2.95 0 00.694-.58l1.292 1.05zM52.654 9.456h2.062l-.15 1.063h.026c.275-.41.578-.716.907-.92.33-.205.725-.307 1.182-.307.12 0 .238.005.359.013.119.01.228.028.329.055l-.261 1.868a2.713 2.713 0 00-.866-.136c-.394 0-.715.054-.963.163-.247.11-.444.262-.59.457-.147.196-.259.43-.338.702-.077.273-.14.573-.185.9l-.385 2.768H51.72l.935-6.626zM66.862 15.812a9.15 9.15 0 01-2.09.709c-.707.145-1.416.218-2.131.218-.76 0-1.445-.118-2.055-.355a3.95 3.95 0 01-1.519-1.016 3.858 3.858 0 01-.867-1.601c-.174-.628-.206-1.327-.095-2.1.109-.773.341-1.473.694-2.1a5.722 5.722 0 011.32-1.602 5.73 5.73 0 011.807-1.016 6.513 6.513 0 012.159-.354c.778 0 1.482.093 2.11.28a3.537 3.537 0 011.588.96l-1.747 1.637a2.414 2.414 0 00-.893-.682c-.349-.155-.797-.232-1.347-.232a3.46 3.46 0 00-1.278.232c-.396.155-.743.37-1.046.648a3.522 3.522 0 00-.75.988 3.898 3.898 0 00-.39 1.24c-.064.455-.05.871.04 1.248.092.378.25.705.475.982.224.277.51.493.859.648.348.154.75.231 1.21.231.468 0 .88-.052 1.236-.156a4.9 4.9 0 00.854-.32l.22-1.569h-1.747l.289-1.963h3.807l-.713 5.045zM70.277 12.914c-.076.518.012.938.264 1.258.252.321.648.481 1.19.481.541 0 .987-.16 1.334-.48.346-.32.557-.74.633-1.259.076-.518-.014-.938-.27-1.259-.257-.32-.656-.48-1.199-.48-.54 0-.983.16-1.325.48-.342.321-.551.74-.627 1.259zm-2.137 0a3.966 3.966 0 01.506-1.485c.261-.443.586-.822.976-1.138.39-.316.831-.559 1.326-.729a4.703 4.703 0 011.54-.254c.532 0 1.022.085 1.468.254.447.17.822.413 1.126.729.304.316.526.695.664 1.138.137.443.169.938.093 1.485a3.899 3.899 0 01-.513 1.485 4.309 4.309 0 01-.985 1.138 4.3 4.3 0 01-1.326.728 4.705 4.705 0 01-1.54.255 4.106 4.106 0 01-1.468-.255 2.958 2.958 0 01-1.12-.728 2.857 2.857 0 01-.655-1.138c-.138-.443-.168-.938-.092-1.485z"
                                                      fill="#363733"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M76.005 24H1.936A1.929 1.929 0 010 22.08V1.92C0 .86.867 0 1.936 0h74.069c1.36 0 2.669.524 3.648 1.46l9.881 9.454a1.5 1.5 0 010 2.172l-9.881 9.453A5.278 5.278 0 0176.005 24z"
                                                      fill="#FAD527"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M12.353 11.092h-1.816l-.315 2.208a3.341 3.341 0 00-.042.498c0 .15.025.28.076.389.05.109.137.193.262.252.123.06.294.089.514.089.11 0 .255-.012.433-.034.18-.023.408-.07.408-.07l-.221 1.617c-.24.082-.484.136-.736.163a6.838 6.838 0 01-.736.042c-.348 0-.664-.037-.949-.11a1.878 1.878 0 01-.721-.347 1.336 1.336 0 01-.426-.62c-.088-.255-.108-.564-.061-.928l.96-6.749h2.063l-.274 1.964h1.814l-.233 1.636zM13.835 9.456h2.062l-.15 1.063h.027c.275-.41.577-.716.908-.92.329-.205.723-.307 1.182-.307.119 0 .238.005.357.013.119.01.23.028.33.055l-.261 1.868a2.738 2.738 0 00-.866-.136c-.394 0-.715.054-.962.163-.248.11-.446.262-.592.457-.147.196-.259.43-.336.702a6.47 6.47 0 00-.186.9l-.386 2.768H12.9l.935-6.626zM22.336 13.015c-.168 0-.377.008-.627.022-.25.015-.496.057-.737.125-.24.068-.452.17-.633.307a.796.796 0 00-.317.57.54.54 0 00.044.344.732.732 0 00.206.24.82.82 0 00.317.147c.123.03.243.044.361.044.217 0 .43-.03.642-.088.211-.058.402-.141.575-.249.171-.107.317-.243.434-.409.118-.165.193-.36.222-.585l.059-.468h-.546zm.258 2.235h-.028c-.275.355-.614.61-1.018.764a3.422 3.422 0 01-1.236.232c-.313 0-.606-.044-.88-.13a1.936 1.936 0 01-.708-.389 1.513 1.513 0 01-.433-.64c-.092-.255-.114-.55-.069-.887.083-.572.3-1.015.653-1.329.353-.314.77-.546 1.252-.695.48-.15.984-.239 1.511-.266a27.74 27.74 0 011.437-.041c.046-.364-.046-.652-.275-.866-.23-.213-.523-.32-.88-.32-.339 0-.658.07-.955.21a3.152 3.152 0 00-.832.58l-.934-1.118c.43-.354.914-.62 1.449-.797a5.167 5.167 0 011.63-.266c.605 0 1.092.075 1.464.225.37.15.652.37.845.661.192.291.304.648.337 1.07.032.423.007.912-.076 1.466l-.467 3.368h-1.898l.11-.832zM26.607 9.456h1.98l-.124.9h.028c.083-.128.192-.255.33-.383a2.593 2.593 0 011.76-.681c.522 0 .934.08 1.236.238.303.16.523.38.661.662.137.282.21.613.22.995.008.382-.02.796-.083 1.24l-.51 3.655h-2.061l.453-3.245c.028-.19.052-.389.07-.593a1.643 1.643 0 00-.042-.566.812.812 0 00-.261-.423c-.129-.109-.325-.163-.59-.163a1.4 1.4 0 00-.667.143c-.18.095-.324.223-.433.382-.11.159-.194.338-.248.538-.055.2-.097.41-.124.627l-.468 3.3h-2.062l.935-6.626zM37.865 11.405c-.248-.372-.623-.559-1.127-.559-.175 0-.349.041-.523.123a.516.516 0 00-.302.423c-.027.163.042.284.206.361.165.077.371.146.619.204.247.06.515.123.804.191.288.069.552.175.79.32.24.146.425.344.557.594.133.25.172.584.117 1.002-.054.427-.197.78-.426 1.057-.228.277-.502.5-.818.668a3.543 3.543 0 01-1.038.354 6.146 6.146 0 01-1.1.102c-.467 0-.93-.065-1.388-.197a2.22 2.22 0 01-1.114-.702l1.444-1.377c.165.236.354.415.57.538.216.123.479.184.791.184.238 0 .458-.034.66-.102.202-.068.315-.193.343-.375.027-.173-.039-.302-.2-.389a2.556 2.556 0 00-.618-.218l-.81-.19a3.041 3.041 0 01-.798-.307 1.455 1.455 0 01-.571-.58c-.137-.25-.173-.584-.11-1.002.056-.39.184-.727.385-1.009.202-.282.447-.513.736-.695.289-.182.607-.316.956-.403.348-.086.695-.13 1.044-.13.44 0 .875.065 1.306.192.43.127.78.354 1.045.681l-1.43 1.241zM40.762 8.283a6.46 6.46 0 01.24-1.03c.106-.322.269-.606.489-.852.22-.245.51-.438.873-.58.362-.14.822-.21 1.381-.21.21 0 .416.009.618.027.202.018.394.05.578.095l-.344 1.732a1.49 1.49 0 00-.646-.136c-.33 0-.586.07-.77.21-.183.142-.307.43-.37.867l-.151 1.05h1.525l-.234 1.636h-1.525l-.701 4.99h-2.063l1.1-7.8zM49.174 12.019c.055-.346-.018-.641-.22-.886-.202-.246-.49-.369-.866-.369-.23 0-.436.037-.618.11a1.765 1.765 0 00-.481.279 1.557 1.557 0 00-.537.866h2.722zm1.334 2.918c-.385.418-.845.74-1.38.968a4.121 4.121 0 01-1.617.34c-.513 0-.985-.081-1.415-.245a2.857 2.857 0 01-1.08-.702 2.77 2.77 0 01-.632-1.098c-.133-.427-.163-.904-.089-1.431a3.828 3.828 0 01.487-1.432 4.06 4.06 0 012.221-1.8c.476-.163.971-.245 1.484-.245.477 0 .9.082 1.266.245.366.164.664.398.893.702.228.305.387.67.475 1.098.087.427.094.905.02 1.432l-.096.64H46.26c.027.391.163.703.405.934.243.232.566.348.97.348.338 0 .634-.075.886-.225a2.95 2.95 0 00.694-.58l1.292 1.05zM52.654 9.456h2.062l-.15 1.063h.026c.275-.41.578-.716.907-.92.33-.205.725-.307 1.182-.307.12 0 .238.005.359.013.119.01.228.028.329.055l-.261 1.868a2.713 2.713 0 00-.866-.136c-.394 0-.715.054-.963.163-.247.11-.444.262-.59.457-.147.196-.259.43-.338.702-.077.273-.14.573-.185.9l-.385 2.768H51.72l.935-6.626zM66.862 15.812a9.15 9.15 0 01-2.09.709c-.707.145-1.416.218-2.131.218-.76 0-1.445-.118-2.055-.355a3.95 3.95 0 01-1.519-1.016 3.858 3.858 0 01-.867-1.601c-.174-.628-.206-1.327-.095-2.1.109-.773.341-1.473.694-2.1a5.722 5.722 0 011.32-1.602 5.73 5.73 0 011.807-1.016 6.513 6.513 0 012.159-.354c.778 0 1.482.093 2.11.28a3.537 3.537 0 011.588.96l-1.747 1.637a2.414 2.414 0 00-.893-.682c-.349-.155-.797-.232-1.347-.232a3.46 3.46 0 00-1.278.232c-.396.155-.743.37-1.046.648a3.522 3.522 0 00-.75.988 3.898 3.898 0 00-.39 1.24c-.064.455-.05.871.04 1.248.092.378.25.705.475.982.224.277.51.493.859.648.348.154.75.231 1.21.231.468 0 .88-.052 1.236-.156a4.9 4.9 0 00.854-.32l.22-1.569h-1.747l.289-1.963h3.807l-.713 5.045zM70.277 12.914c-.076.518.012.938.264 1.258.252.321.648.481 1.19.481.541 0 .987-.16 1.334-.48.346-.32.557-.74.633-1.259.076-.518-.014-.938-.27-1.259-.257-.32-.656-.48-1.199-.48-.54 0-.983.16-1.325.48-.342.321-.551.74-.627 1.259zm-2.137 0a3.966 3.966 0 01.506-1.485c.261-.443.586-.822.976-1.138.39-.316.831-.559 1.326-.729a4.703 4.703 0 011.54-.254c.532 0 1.022.085 1.468.254.447.17.822.413 1.126.729.304.316.526.695.664 1.138.137.443.169.938.093 1.485a3.899 3.899 0 01-.513 1.485 4.309 4.309 0 01-.985 1.138 4.3 4.3 0 01-1.326.728 4.705 4.705 0 01-1.54.255 4.106 4.106 0 01-1.468-.255 2.958 2.958 0 01-1.12-.728 2.857 2.857 0 01-.655-1.138c-.138-.443-.168-.938-.092-1.485z"
                                                      fill="#363733"></path>
                                            </svg>
                                        </a></header>
                                    <nav class="MuiList-root MuiList-padding _15TpWECg-EPjPycXG7DXc_ css-1ontqvh">
                                        <li class="MuiListItem-root MuiListItem-gutters MuiListItem-padding _11btEvZNBcBdY7ZO05v6pz css-1rr1cwd">
                                            <a class="_1dZ3_E1uyq1SDOhbJ9YkTB MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-disableElevation MuiButton-fullWidth MuiButtonBase-root _1ABOKPkszDZESmnSM6q50K _308ge9eeJb_IyaGLvyIFvJ css-li77ye _2aQm2mrJyNyMlLVw1hNrA0"
                                               tabindex="0" data-qa="navigation-home" href="/en/user/dashboard"><span
                                                    class="_3F1mtacvw4BxMMtmokZDzR MuiButton-startIcon MuiButton-iconSizeMedium css-6xugel"><svg
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path
                                                            d="M12.434 2.351a1.2 1.2 0 00-1.697 0l-8.4 8.4a1.2 1.2 0 001.697 1.697l.351-.351V20a1.2 1.2 0 001.2 1.2h2.4a1.2 1.2 0 001.2-1.2v-2.4a1.2 1.2 0 011.2-1.2h2.4a1.2 1.2 0 011.2 1.2V20a1.2 1.2 0 001.2 1.2h2.4a1.2 1.2 0 001.2-1.2v-7.903l.352.351a1.2 1.2 0 001.697-1.697l-8.4-8.4z"></path></svg></span><span
                                                    class=""><span>Home</span></span></a></li>
                                        <li class="MuiListItem-root MuiListItem-gutters MuiListItem-padding _11btEvZNBcBdY7ZO05v6pz css-1rr1cwd">
                                            <a class="_1dZ3_E1uyq1SDOhbJ9YkTB MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-disableElevation MuiButton-fullWidth MuiButtonBase-root _1ABOKPkszDZESmnSM6q50K _8WEEHML83_U6t0Og1cNK css-li77ye"
                                               tabindex="0" role="button" data-qa="navigation-create-new-booking"><span
                                                    class="_3F1mtacvw4BxMMtmokZDzR MuiButton-startIcon MuiButton-iconSizeMedium css-6xugel"><svg
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path
                                                            fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10zm-7.172-3.828a1 1 0 011 1v5.656a1 1 0 11-2 0v-3.242l-3.95 3.95a1 1 0 11-1.414-1.415l3.95-3.95H9.172a1 1 0 010-2h5.656z"></path></svg></span><span
                                                    class="">Send money</span></a></li>
                                        <li class="MuiListItem-root MuiListItem-gutters MuiListItem-padding _11btEvZNBcBdY7ZO05v6pz css-1rr1cwd">
                                            <a class="_1dZ3_E1uyq1SDOhbJ9YkTB MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-disableElevation MuiButton-fullWidth MuiButtonBase-root _1ABOKPkszDZESmnSM6q50K _308ge9eeJb_IyaGLvyIFvJ css-li77ye"
                                               tabindex="0" data-qa="navigation-receivers"
                                               href="/en/user/recipients"><span
                                                    class="_3F1mtacvw4BxMMtmokZDzR MuiButton-startIcon MuiButton-iconSizeMedium css-6xugel"><svg
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path
                                                            d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path><path
                                                            d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8z"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path><path
                                                            d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            fill="none"></path><path d="M1 20h16v2H1z"></path></svg></span><span
                                                    class=""><span>Receivers</span></span></a></li>
                                        <li class="MuiListItem-root MuiListItem-gutters MuiListItem-padding _11btEvZNBcBdY7ZO05v6pz css-1rr1cwd">
                                            <a class="_1dZ3_E1uyq1SDOhbJ9YkTB MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-disableElevation MuiButton-fullWidth MuiButtonBase-root _1ABOKPkszDZESmnSM6q50K _2LLO_FALo7qZhxYjsTfrcD css-li77ye"
                                               tabindex="0" data-qa="navigation-invite-and-earn"
                                               href="/en/user/referrals"><span
                                                    class="_3F1mtacvw4BxMMtmokZDzR MuiButton-startIcon MuiButton-iconSizeMedium css-6xugel"><svg
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><path d="M22 7H2v5h20V7z"
                                                                                                 fill="currentColor"></path><path
                                                            fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M20 22v-9h-7v9h7zm-9 0v-9H4v9h7z"
                                                            fill="currentColor"></path><path
                                                            d="M12 7H7.5a2.5 2.5 0 110-5C11 2 12 7 12 7zm0 0h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z"
                                                            fill="transparent" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path></svg></span><span
                                                    class=""><span>Invite &amp; earn ₴750</span></span></a></li>
                                    </nav>
                                    <footer class="MuiList-root Y-CbHi_tF5AsVsdxJUDfk css-1uzmcsd">
                                        <li class="MuiListItem-root MuiListItem-dense MuiListItem-padding css-e6ueh4">
                                            <button class="KqqqZMFlP5kpl8-ypKhNs MuiButton-root MuiButton-text MuiButton-textPrimary _2KO771hNtFGmAQoidtWkkA MuiButton-sizeSmall _2HrONIpPWKXypvO9bjHj8J MuiButton-textSizeSmall MuiButton-disableElevation MuiButtonBase-root  css-1nitmzb"
                                                    tabindex="0" type="button" data-qa="selected-language"><span
                                                    class="_2Eb53JKKc_yIPNODC8m30X MuiButton-startIcon MuiButton-iconSizeSmall css-u0g51i"><svg
                                                        viewBox="0 0 16 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="12"><mask
                                                            id="mask0gb" maskUnits="userSpaceOnUse" x="0" y="0"
                                                            width="16" height="12"><rect width="16" height="12"
                                                                                         rx="4" fill="#fff"></rect></mask><g
                                                            mask="url(#mask0gb)"><path fill-rule="evenodd"
                                                                                       clip-rule="evenodd"
                                                                                       d="M0 0v12h16V0H0z"
                                                                                       fill="#2E42A5"></path><mask
                                                                id="mask1gb" maskUnits="userSpaceOnUse" x="0" y="0"
                                                                width="16" height="12"><path fill-rule="evenodd"
                                                                                             clip-rule="evenodd"
                                                                                             d="M0 0v12h16V0H0z"
                                                                                             fill="#fff"></path></mask><g
                                                                mask="url(#mask1gb)"><mask id="mask2gb"
                                                                                           maskUnits="userSpaceOnUse"
                                                                                           x="0" y="0" width="16"
                                                                                           height="12"><path
                                                                        fill="#fff" d="M0 0h16v12H0z"></path></mask><g
                                                                    mask="url(#mask2gb)"><path
                                                                        d="M-1.782 11.143l3.521 1.489L16.08 1.619l1.858-2.213-3.765-.498-5.85 4.746-4.707 3.198-5.397 4.29z"
                                                                        fill="#fff"></path><path
                                                                        d="M-1.3 12.186l1.794.864L17.27-.8H14.75l-16.05 12.986z"
                                                                        fill="#F50100"></path><path
                                                                        d="M17.782 11.143l-3.521 1.489L-.08 1.619-1.938-.594l3.765-.498 5.85 4.746 4.707 3.198 5.397 4.29z"
                                                                        fill="#fff"></path><path
                                                                        d="M17.662 11.891l-1.794.864-7.143-5.93-2.118-.662-8.723-6.75H.403l8.717 6.59 2.316.794 6.226 5.094z"
                                                                        fill="#F50100"></path><mask
                                                                        id="path-9-inside-1gb" fill="#fff"><path
                                                                            fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M9.889-1H6.11v5H-.986v4H6.11v5h3.778V8h7.125V4H9.889v-5z"></path></mask><path
                                                                        fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M9.889-1H6.11v5H-.986v4H6.11v5h3.778V8h7.125V4H9.889v-5z"
                                                                        fill="#F50100"></path><path
                                                                        d="M6.111-1v-1h-1v1h1zm3.778 0h1v-1h-1v1zM6.11 4v1h1V4h-1zM-.986 4V3h-1v1h1zm0 4h-1v1h1V8zM6.11 8h1V7h-1v1zm0 5h-1v1h1v-1zm3.778 0v1h1v-1h-1zm0-5V7h-1v1h1zm7.125 0v1h1V8h-1zm0-4h1V3h-1v1zM9.889 4h-1v1h1V4zM6.11 0h3.778v-2H6.11v2zm1 4v-5h-2v5h2zM-.986 5H6.11V3H-.986v2zm1 3V4h-2v4h2zM6.11 7H-.986v2H6.11V7zm1 6V8h-2v5h2zm2.778-1H6.11v2h3.778v-2zm-1-4v5h2V8h-2zm8.125-1H9.889v2h7.125V7zm-1-3v4h2V4h-2zM9.889 5h7.125V3H9.889v2zm-1-6v5h2v-5h-2z"
                                                                        fill="#fff"
                                                                        mask="url(#path-9-inside-1gb)"></path></g></g></g><rect
                                                            opacity=".64" x=".5" y=".5" width="15" height="11"
                                                            rx="3.5" stroke="#EDF0F4"></rect></svg></span><span
                                                    class="">EN</span><span
                                                    class="MuiButton-endIcon MuiButton-iconSizeSmall css-hqw408"><svg
                                                        width="8" height="4" viewBox="0 0 8 4" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><path d="M1 .5l3 3 3-3"
                                                                                                 stroke="#A2ABB8"
                                                                                                 stroke-linecap="round"
                                                                                                 stroke-linejoin="round"></path></svg></span>
                                            </button>
                                        </li>
                                    </footer>
                                </section>
                            </div>
                        </div>
                    </div>
                    <main class="x2ZwSwoJn7tFPRpJPtstY">
                        <header class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation4 MuiAppBar-root MuiAppBar-colorPrimary MuiAppBar-positionSticky _38nTFKANjSZ6euSwvFPDVJ _3_cGvCaiW2QflAzgtcon6x css-i1u6zi">
                            <div class="MuiGrid-root MuiGrid-container MuiGrid-wrap-xs-nowrap _2Iz2AjNzRvML8os-5Y74Dn css-jgm9a3">
                                <div class="MuiGrid-root MuiGrid-item _2zExeO6po3w07gwFY2gmBY css-1wxaqej"><h4
                                        class="MuiTypography-root MuiTypography-h4 css-16svqnm"><span>Home</span>
                                    </h4></div>
                                <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-3 MuiGrid-wrap-xs-nowrap css-zo3lhu">
                                        @guest
                                            @if (Route::has('login'))
                                                <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                                    <a class=""
                                                       href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </div>
                                            @endif

                                            @if (Route::has('register'))
                                                <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                                    <a class=""
                                                       href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </div>
                                            @endif
                                        @else

                                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej">
                                                <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium _3Fq2pje0C5be8sQDU1T-rP css-1yxmbwk"
                                                        tabindex="0" type="button" data-qa="phone-button">
                                                    <svg viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         width="22px">
                                                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a15.999 15.999 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"
                                                              stroke="#317FF5" stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej"><span
                                                    class="MuiBadge-root css-1rzb3uu"><button
                                                        class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium _3Fq2pje0C5be8sQDU1T-rP css-1yxmbwk"
                                                        tabindex="0" type="button" data-qa="bell-button"><svg
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg" width="22px"><path
                                                                d="M12 5.333a4 4 0 10-8 0c0 4.667-2 6-2 6h12s-2-1.333-2-6zM9.153 14a1.333 1.333 0 01-2.306 0"
                                                                stroke="#317FF5" stroke-width="1.4"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"></path></svg></button><span
                                                        class="MuiBadge-anchorOriginTopRightRectangular MuiBadge-overlapRectangular MuiBadge-badge _3yN7pD7lMjjX2m6bbL2mug MuiBadge-dot MuiBadge-anchorOriginTopRight css-jxg018"></span></span>
                                            </div>

                                            <div class="MuiGrid-root MuiGrid-item css-1wxaqej ">


                                                <button class="_1dZ3_E1uyq1SDOhbJ9YkTB MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-disableElevation MuiButtonBase-root _2VNxO0Z9n7oPR0Bdrkjx5m _2ILsZ5UPAZdV2Y-q_O4vgb css-xfb273"
                                                        tabindex="0" type="button" data-qa="user-status-button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span
                                                        class="_2HBiqIVM2oo8eE4OTAAuLJ MuiButton-startIcon MuiButton-iconSizeMedium css-6xugel"><div
                                                            class="MuiAvatar-root MuiAvatar-circular MuiAvatar-colorDefault _3ivi3F5qMMZC9sG1-Ldelh css-1hpgapu"><span
                                                                class="MuiTypography-root MuiTypography-subtitle2 css-1g8x1z8">{{ Auth::user()->name[0] }}</span></div></span><span
                                                        class=""><div
                                                            class="MuiGrid-root MuiGrid-container MuiGrid-direction-xs-column css-g7kf87"><span
                                                                class="MuiTypography-root MuiTypography-subtitle2 MuiTypography-noWrap oIS9y4RfdaurFkYUFjObP css-4t2pqj">{{ Auth::user()->name }}</span><div
                                                                class="MuiGrid-root MuiGrid-container MuiGrid-wrap-xs-nowrap css-jgm9a3"><span
                                                                    class="MuiTypography-root MuiTypography-body1 _2o_GBoysLZo1eiUaBqKFEf css-17xmym8">TG000{{ Auth::user()->id }}</span><svg
                                                                    width="8" height="4" viewBox="0 0 8 4"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg" class=""><path
                                                                        d="M1 .5l3 3 3-3" stroke="#A2ABB8"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path></svg></div></div></span>
                                                </button>

                                                <div role="tooltip" aria-labelledby="dropdownMenuButton1" class="dropdown-menu"
                                                     style="border: none;position: absolute; z-index:1; inset: 0px auto auto auto; margin: 0px; transform: translate3d(-56px, 80.8px, 0px);"
                                                     data-popper-placement="bottom-end">
                                                    <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 _2lESYv7PYK_FFqOAy_Iurb css-dbm1zo"
                                                         style="opacity: 1; transform: none; transition: opacity 305ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 203ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                                                        <div class="Fjw7puIUrfZG05yaYxJCV LmnXzjspncmUJLbLkiBq0">
                                                            <nav class="MuiList-root MuiList-dense css-1uzmcsd">

                                                                @role('Admin')
                                                                    <li class="GLJNiydtUyo4syC1vzraA MuiListItem-root MuiListItem-dense MuiListItem-gutters MuiListItem-padding css-1j1r6x2">
                                                                        <a class="tgc-links-inner _3pQ-J4LYnLs4F8dAKi0auR"
                                                                           href="/admin">Admin</a></li>
                                                                @endrole


                                                                <li class="GLJNiydtUyo4syC1vzraA MuiListItem-root MuiListItem-dense MuiListItem-gutters MuiListItem-padding css-1j1r6x2">
                                                                    <a class="tgc-links-inner _3pQ-J4LYnLs4F8dAKi0auR"
                                                                       href="/settings">Settings</a>
                                                                </li>
                                                                <li class="GLJNiydtUyo4syC1vzraA MuiListItem-root MuiListItem-dense MuiListItem-gutters MuiListItem-padding css-1j1r6x2">
                                                                <span class="tgc-links-action _3pQ-J4LYnLs4F8dAKi0auR"
                                                                      role="button" tabindex="0" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                                      data-qa="navigation-logout">Log out</span></li>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                                <!--  -->

                                            </div>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="jHRPSkHspjmJmR8TqBjnQ">
                            <div class="tgc-layouts-full-height-table tgc-dashboard">
                                @yield('content')
                            </div>
                            <footer>
                                <div class="tgc-footer">
                                    <div class="container">
                                        <div class="footer-content-wrapper">
                                            <div class="about-company">
                                                <div class="trust-logos"><span class="ic-trust-visa"></span><span
                                                        class="ic-trust-mc"></span></div>
                                                <p class="text-small">TransferGo Ltd is a registered payment service
                                                    provider. We are supervised by HM Revenue &amp; Customs (HMRC) under
                                                    the Money Laundering Regulations: 12667079 and regulated by the UK
                                                    Financial Conduct Authority (FCA) as an authorised payment
                                                    institution: 600886. Registered address: 241 Southwark Bridge Rd ·
                                                    SE1 6FP London · United Kingdom</p><br>
                                                <p class="text-small">TransferGo Lithuania UAB is an electronic money
                                                    institution established in the Republic of Lithuania, authorised and
                                                    regulated by the Bank of Lithuania. Registered address: Palangos
                                                    str. 4, Vilnius, Lithuania, number of registration 304871705, FI
                                                    Code 32400.</p></div>
                                            <div class="badges">
                                                <div class="tgc-app-badges">
                                                    <div class="badge-wrapper ios"><a
                                                            href="https://transfergo.onelink.me/3553566860?pid=lie&amp;c=en_footer&amp;af_adset=(direct)&amp;af_ad=(none)&amp;af_sub2=https://my.transfergo.com/en/user/logout&amp;af_sub3=null&amp;af_sub1=GB_NG&amp;original_url=[{&quot;source&quot;:&quot;(direct)&quot;,&quot;medium&quot;:&quot;(none)&quot;,&quot;content&quot;:&quot;https://my.transfergo.com/en/user/logout&quot;,&quot;name&quot;:null,&quot;term&quot;:null,&quot;timestamp&quot;:&quot;2022-07-10T18:26:49.180Z&quot;},{&quot;source&quot;:&quot;(direct)&quot;,&quot;medium&quot;:&quot;(none)&quot;,&quot;content&quot;:&quot;https://www.transfergo.com/en-gb&quot;,&quot;name&quot;:null,&quot;term&quot;:null,&quot;timestamp&quot;:&quot;2022-07-10T17:14:08.762Z&quot;},{&quot;source&quot;:&quot;(direct)&quot;,&quot;medium&quot;:&quot;(none)&quot;,&quot;content&quot;:&quot;https://my.transfergo.com/en/user/welcome&quot;,&quot;name&quot;:null,&quot;term&quot;:null,&quot;timestamp&quot;:&quot;2022-07-10T07:31:19.650Z&quot;}]"
                                                            rel="noopener noreferrer" role="link" tabindex="0"><img
                                                                src="img/7270888876dbdcd34161.png"
                                                                alt="mobile app store link"></a></div>
                                                    <div class="badge-wrapper android"><a
                                                            href="https://app.appsflyer.com/com.transfergo.android?pid=lie&amp;c=en_footer&amp;af_adset=(direct)&amp;af_ad=(none)&amp;af_sub2=https://my.transfergo.com/en/user/logout&amp;af_sub3=null&amp;af_sub1=GB_NG&amp;original_url=[{&quot;source&quot;:&quot;(direct)&quot;,&quot;medium&quot;:&quot;(none)&quot;,&quot;content&quot;:&quot;https://my.transfergo.com/en/user/logout&quot;,&quot;name&quot;:null,&quot;term&quot;:null,&quot;timestamp&quot;:&quot;2022-07-10T18:26:49.180Z&quot;},{&quot;source&quot;:&quot;(direct)&quot;,&quot;medium&quot;:&quot;(none)&quot;,&quot;content&quot;:&quot;https://www.transfergo.com/en-gb&quot;,&quot;name&quot;:null,&quot;term&quot;:null,&quot;timestamp&quot;:&quot;2022-07-10T17:14:08.762Z&quot;},{&quot;source&quot;:&quot;(direct)&quot;,&quot;medium&quot;:&quot;(none)&quot;,&quot;content&quot;:&quot;https://my.transfergo.com/en/user/welcome&quot;,&quot;name&quot;:null,&quot;term&quot;:null,&quot;timestamp&quot;:&quot;2022-07-10T07:31:19.650Z&quot;}]"
                                                            rel="noopener noreferrer" role="link" tabindex="0"><img
                                                                src="img/4d867241414e09994d79.png"
                                                                alt="mobile app store link"></a></div>
                                                    <div class="badge-wrapper huawei"><a
                                                            href="https://appgallery.huawei.com/#/app/C103213343"
                                                            rel="noopener noreferrer" role="link" tabindex="0"><img
                                                                src="img/18051082146d27c28866.png"
                                                                alt="mobile app store link"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="disclaimer text-small"><p>By using this website, you accept our <a
                                                    href="https://www.transfergo.com/en/terms-and-conditions">Terms
                                                    of Use</a> and <a
                                                    href="https://www.transfergo.com/en/privacy-policy">Privacy
                                                    Policy</a>. Copyright 2022 TransferGo Ltd.</p></div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="tgo-notifications"></div>
<script>window._language = 'en';

</script>
<script src="/js/en.bundle.js?v=1441b3ad"></script>
<script src="https://www.transfergo.com/shim.min.js"></script>
<script src="https://static.zdassets.com/ekr/snippet.js?key=3c4b4476-4078-4625-8b1c-ad590847ae39" async=""
        data-status="ready" id="ze-snippet"></script>
<iframe data-product="web_widget" title="No content" role="presentation" tabindex="-1" allow="microphone *"
        aria-hidden="true" src="about:blank"
        style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe>
<div>
    <iframe title="Открывает виджет для поиска дополнительной информации" id="launcher" tabindex="-1"
            style="width: 139px; height: 50px; padding: 0px; margin: 10px 20px; position: fixed; bottom: 30px; overflow: visible; opacity: 0; border: 0px; z-index: 999998; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1); transition-property: opacity, top, bottom; top: -9999px; visibility: hidden;"></iframe>
</div>
</body>
</html>
