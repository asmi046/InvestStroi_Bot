<template>
  <home-select-elrment @selectHome="chengeSelectHome" v-for="(item, index) in homes" :key="index" :name="item" :sel="sel"></home-select-elrment>
</template>

<script>
import { ref } from 'vue'
import HomeSelectElrment from './HomeSelectElrment.vue'
export default {
  components: { HomeSelectElrment },

  setup(props, context) {
    const homes = ['г. Курск, Энгельса 142а', 'г. Орел, КРТ Наугорское шоссе']
    const sel = ref("г. Орел, КРТ Наугорское шоссе")


    const chengeSelectHome = home => {
        sel.value = home
        console.log(sel)
    }

    return {
        homes,
        sel,
        chengeSelectHome
    }
  }

}
</script>

<style>

</style>
