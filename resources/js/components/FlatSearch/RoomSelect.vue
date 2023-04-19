<template>
            <div class="flex justify-start flex-wrap">
                <span @click.prevent="ChengeRoomCount('Все')" :class="{'border-sblue bg-sblue text-white':modelValue == 'Все'}" class="border  border-cborder rounded py-1 px-3 mr-2 mb-2 cursor-pointer  hover:border-sblue hover:bg-sblue hover:text-white">Все</span>
                <span @click.prevent="ChengeRoomCount(item.type)" v-for="(item, index) in allrooms" :key="index" :class="{'border-sblue bg-sblue text-white':modelValue == item.type}" class="border border-cborder rounded py-1 px-3 mr-2 mb-2 cursor-pointer hover:border-sblue hover:bg-sblue hover:text-white">{{item.type}}</span>
            </div>
</template>

<script>
import {toRefs } from 'vue'

export default {
    props: {
        allrooms:Object,
        modelValue:String
    },

    setup(props, context) {
        const {allrooms} = toRefs(props)
        const {modelValue} = toRefs(props)

        const ChengeRoomCount = room => {
            context.emit('update:modelValue', room)
        }

        return {
            allrooms, modelValue, ChengeRoomCount
        }
    }


}
</script>

<style>

</style>
