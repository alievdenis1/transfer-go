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
        <step1 v-if="currentStep === 1" :user-data="user" v-on:order="orderHandler($event)"/>
        <step2 v-if="currentStep === 2" :user-order="userOrder"/>

    </div>
</template>
<script>
import step1 from './pages/step1'
import step2 from './pages/step2'

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
        step2
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
        orderHandler(e) {
            this.currentStep = 2
            this.percentLoad = 37.5;
            this.userOrder = e;
        }
    }
}
</script>
