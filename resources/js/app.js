import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import { createStore } from 'vuex'

import axios from 'axios'

import VueAxios from 'vue-axios'

import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';

import FlatSearch from './components/FlatSearch/FlatSearch.vue'
import CustomSelect from './components/CustomSelect.vue'
import LikeElement from './components/LikeElement.vue'
import LikeCounter from './components/LikeCounter.vue'
import ModalWindow from './components/ModalWindow.vue'
import CalcBlk from './components/CalcBlk.vue'


const store = new createStore({
    state: {
      count: 0
    },

    mutations: {
        setCount (state, value) {
            state.count = value
        },

        incrementCount(state) {
            state.count++
        },

        decrementCount(state) {
            state.count--
        },
    },

    actions: {
        setCount (context, value) {
          context.commit('setCount', value)
        },

        incrementCount(context) {
            context.commit('incrementCount')
        },

        decrementCount(context) {
            context.commit('decrementCount')
        },
      }
  })

const global_app = createApp({
    components:{
        FlatSearch,
        CustomSelect,
        LikeElement,
        LikeCounter,
        ModalWindow,
        CalcBlk,
        Swiper,
        SwiperSlide,

    },



    setup() {
        return {
          modules: [Pagination],
        };
      },
})

global_app.use(VueAxios, axios)
global_app.use(store)
global_app.mount("#global_app")


