<template>
        <modal-window-ipoteka rout="/send_consult" redirect="/thencs" hesh="showModalIpoteka" :title="'Бронирование квартиры: №' + kvartirainfo" :subtitle="ipotekaString" ></modal-window-ipoteka>

            <div class="w-full border border-cborder rounded-xl p-4 flex flex-wrap my-2 cursor-pointer" :class="{'border-sred': (payType === 'ipoteka')}">
                <div class="w-11/12">
                    <h2 class="pt-0">Семейная ипотека</h2>

                    <p class="font-semibold" :class="{'text-sred': (payType === 'ipoteka'), 'text-sblue': (payType !== 'ipoteka')}">Ежемесячный платеж: {{ Number(ipotekaMonthPay).toLocaleString('ru-RU') }} ₽ / мес.</p>

                </div>
                <div class="w-1/12 flex">
                    <check-box @click="chengePayType('ipoteka')" :active="payType == 'ipoteka'"></check-box>
                </div>
            </div>

            <div class="w-full border border-cborder rounded-xl p-4 flex flex-wrap cursor-pointer" :class="{'border-sred': (payType === 'nal')}"  >
                <div class="w-11/12">
                    <h2 class="pt-0">Оплата наличьными</h2>
                    <p class="font-semibold" :class="{'text-sred': (payType === 'nal'), 'text-sblue': (payType !== 'nal')}"> со скидкой {{ Number(sales).toLocaleString('ru-RU')}} ₽
                        <span class=" text-white px-2 py-[2px] bg-sblue rounded-md" :class="{'bg-sred': (payType === 'nal') }">5%</span>
                    </p>
                </div>
                <div class="w-1/12 flex">
                    <check-box @click="chengePayType('nal')" :active="payType === 'nal'"></check-box>
                </div>
            </div>
            <div class="w-full mt-3">
                <a href="#showModalIpoteka" class="bg-sred text-white text-center px-5 py-2 rounded-lg text-xs ssm:text-xs xl:text-sm w-full block">Забронировать</a>
            </div>
</template>

<script>
    import CheckBox from './CheckBox.vue'
    import ModalWindowIpoteka from './ModalWindowIpoteka.vue';

    export default {
        data() {
            return {
                payType:"nal",
                percent: 5.4,
                month: 242,
                sales: 567000,
            }
        },

        components: {
            CheckBox,
            ModalWindowIpoteka
        },

        computed:{
            payOne() {
                return (parseFloat(this.homeprice) * 0.1).toFixed(2);
            },

            ipotekaMonthPay() {
                var i = parseFloat( this.percent / 100 / 12 );
                var n = parseFloat( this.month );
                var r = ( parseFloat(this.homeprice) - this.payOne ) * ( ( i * Math.pow( 1+i, n ) ) / ( Math.pow( 1+i, n ) - 1 ) )
                return r.toFixed(2);
            },

            ipotekaString() {
                let rez_str = "";

                if (this.payType == "nal")
                    rez_str = "Оплата наличными со скидкой: " + Number(this.sales).toLocaleString('ru-RU') + " ₽"
                else
                    rez_str = "Симейная ипотека, платеж: " + Number(this.ipotekaMonthPay).toLocaleString('ru-RU') + " ₽"
                return rez_str;
            }


        },


        mounted:function() {
        },

        methods: {
            chengePayType(value) {
                this.payType = value
            }
        },

        props:['homeprice', 'kvartirainfo'],

    }
</script>

<style>

</style>
