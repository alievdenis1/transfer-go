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
                    <div class="progress-bar" style="width: 12.5%;"></div>
                </div>
            </div>
        </header>
        <step1 :user-data="user"/>
    </div>
</template>
<script>
import step1 from './pages/step1'
export default {
    props: ['userId'],
    data: () => ({
        user: null,
    }),
    components: {
        step1
    },
    created() {
        this.getDataUser().then(res => {
            this.user = res.data.data.user;
        });
    },
    methods: {
        async getDataUser() {
            return await axios.get('api/users/' + this.userId);
        }
    }
}
</script>
