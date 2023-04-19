<template>
        <div @click.prevent="selectHome" class="w-32 border border-cfill p-2 mr-2 rounded-md cursor-pointer hover:border-sblue hover:bg-sblue hover:text-white " :class="{'border-sblue bg-sblue text-white':(sel == item.id)}">
             <img class="rounded-md w-full border border-white" :src="item.img" alt="">

            <p class="mt-2 text-midi text-center">
                {{item.title}}
            </p>
        </div>
</template>

<script>
import { toRefs } from 'vue'
export default {

    emits:['selectHome'],

    props: {
        item: Object,
        sel: Number
    },

    setup(props, context) {

        const item = props.item
        const {sel} = toRefs(props)


        const selectHome = () => {
            context.emit('selectHome', item.id)
        }

        return{
            item,
            sel,
            selectHome
        }
    }

}
</script>

<style>

</style>
