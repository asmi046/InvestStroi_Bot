<template>

            <div class="w-full border border-cborder rounded-xl p-4 flex flex-wrap my-2">
                <div class="w-11/12">
                    <h2 class="pt-0">Семейная ипотека</h2>
                </div>
                <div class="w-1/12 flex">
                    <check-box @click="chengePayType('nal')" :active="payType == 'nal'"></check-box>
                </div>
            </div>

            <div class="w-full border border-cborder rounded-xl p-4 flex flex-wrap">
                <div class="w-11/12">
                    <h2 class="pt-0">Оплата наличьными</h2>
                </div>
                <div class="w-1/12 flex">
                    <check-box @click="chengePayType('ipoteka')" :active="payType === 'ipoteka'"></check-box>
                </div>
            </div>

</template>

<script>
    import CheckBox from './CheckBox.vue'

    export default {
        data() {
            return {
                payType:"nal"
            }
        },

        components: {
            CheckBox
        },

        methods: {
            chengePayType(value) {
                this.payType = value;
            }
        }
    }
</script>

<style>

</style>
