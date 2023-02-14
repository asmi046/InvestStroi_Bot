import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import axios from 'axios'

import VueAxios from 'vue-axios'

import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination } from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';

import CustomSelect from './components/CustomSelect.vue'

const global_app = createApp({
    components:{
        CustomSelect,
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
global_app.mount("#global_app")
