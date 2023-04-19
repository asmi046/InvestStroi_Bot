<template>
    <div class="flex justify-start" :value="modelValue">
        <home-select-elrment @selectHome="chengeSelectHome" :item="{id:0, title:'Все дома', img:'img/allhome.svg'}" :sel="sel"></home-select-elrment>
        <home-select-elrment @selectHome="chengeSelectHome" v-for="(item, index) in homes" :key="index" :item="item" :sel="sel"></home-select-elrment>
    </div>
</template>

<script>
import { toRefs } from 'vue'
import HomeSelectElrment from './HomeSelectElrment.vue'
export default {

    emits: ['update:modelValue'],

  components: { HomeSelectElrment },

  props: {
    allhomes:Object,
    modelValue:Number
  },

  setup(props, context) {

    const {allhomes} = toRefs(props)
    const {modelValue} = toRefs(props)

    const chengeSelectHome = home => {
        // modelValue.value = home
        context.emit('update:modelValue', home)
    }


    return {
        homes:allhomes,
        sel:modelValue,
        chengeSelectHome
    }
  }

}
</script>

<style>

</style>
