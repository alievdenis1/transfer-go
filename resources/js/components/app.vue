<template>
    <div class="tgc-layouts-full-height-table tgc-booking">
        <header>
            <div class="tgc-header-progress-bar">
                <div class="navigation">
                    <ul>
                        <li tabindex="0" role="button" class="current-step" style="width: 25%;">
                            1. Transfer details
                        </li>
                        <li tabindex="0" role="button" class="" style="width: 25%;">2. Receiver
                            details
                        </li>
                        <li tabindex="0" role="button" class="" style="width: 25%;">3. Review
                        </li>
                        <li tabindex="0" role="button" class="" style="width: 25%;">4. Pay in
                        </li>
                    </ul>
                </div>
                <div class="progress">
                    <div class="progress-bar" :style="progressBarStyle"></div>
                </div>
            </div>
        </header>
        <step1 v-if="currentStep === 1" :user-data="user" v-on:order="orderHandler1($event)"/>
        <step2 v-if="currentStep === 2" :user-order="userOrder" v-on:order="orderHandler2($event)"
               v-on:back="currentStep = $event; percentLoad=12.5"/>
        <step3 v-if="currentStep === 3" :user-order="userOrder" v-on:order="orderHandler3($event)"
               v-on:back="currentStep = $event; percentLoad=37.5"/>


    </div>
</template>
<script>
import step1 from './pages/step1'
import step2 from './pages/step2'
import step3 from './pages/step3'

export default {
    props: ['userId'],
    data: () => ({
        user: null,
        currentStep: 1,
        percentLoad: 12.5,
        userOrder: null
    }),
    components: {
        step1,
        step2,
        step3,
    },
    created() {
        this.getDataUser().then(res => {
            this.user = res.data.data.user;
        });
    },
    computed: {
        progressBarStyle() {
            return "width: " + this.percentLoad + "%;";
        }
    },
    methods: {
        async getDataUser() {
            return await axios.get('api/users/' + this.userId);
        },
        orderHandler1(e) {
            this.currentStep = 2
            this.percentLoad = 37.5;
            this.userOrder = e;
        },
        orderHandler2(e) {
            this.currentStep = 3
            this.percentLoad = 62.5;
            this.userOrder = e;
        },
        orderHandler3(e) {
            this.currentStep = 4
            this.percentLoad = 100;
            this.userOrder = e;
        },
    }
}
</script>
