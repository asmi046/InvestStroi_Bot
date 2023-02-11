import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import axios from 'axios'

import VueAxios from 'vue-axios'

import CustomSelect from './components/CustomSelect.vue'

const global_app = createApp({
    components:{
        CustomSelect
    }
})

global_app.use(VueAxios, axios)
global_app.mount("#global_app")
