<template>

<div :data-prodid="item.id" class="tovar_wrap w-full h-auto p-2 border mb-5 border-solid border-cborder rounded-lg flex flex-col overflow-hidden ssm:w-[48%]">
    <a :href="'/home/'+item.id" class="w-full h-full border-b border-solid border-b-cfill">
        <img class="w-3/4 h-full mx-auto py-5 object-contain" :src="item.plan_img" alt="">
    </a>

    <h2>{{item.type}}, {{item.area}} м²</h2>
    <p>{{item.home_info.addres}}</p>
    <p>Этаж {{item.flor}}</p>
    <p>Цена: <strong>{{item.price}} р</strong> </p>
    <div class="w-full flex flex-wrap pt-2 mt-auto">
        <a  class="bg-sred text-white text-center px-5 py-2 rounded-lg text-xs ssm:text-xs xl:text-sm"  href="'/home/'+item.id">Подробнее</a>
        <like-element :elemid="item.id"></like-element>
    </div>
</div>

</template>

<script>
import { ref } from 'vue'
import LikeElement from '../LikeElement.vue'
export default {
  components: { LikeElement },
props: {
    item:Object
},

setup(props) {
  const {item} = ref(props)

  return{
    props
  }
}

}
</script>

<style>

</style>
