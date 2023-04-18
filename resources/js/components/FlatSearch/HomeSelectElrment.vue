<template>

        <div @click.prevent="selectHome" class="w-32 border border-cfill p-2 mr-2 rounded-md  hover:border-sred" :class="{'border-sred':(sel == name)}">
             <img class="rounded-md" src="img/home_select/engelsa.webp" alt="">

            <p class="mt-2 text-midi text-center">
                {{name}}
            </p>
        </div>
</template>

<script>
import { watch, ref, toRefs } from 'vue'
export default {

    emits:['selectHome'],

    props: {
        name: String,
        sel: String
    },

    setup(props, context) {

        const name = props.name
        const {sel} = toRefs(props)

        console.log(sel)

        const selectHome = () => {
            context.emit('selectHome', name)
        }

        watch(sel, (newValue, oldValue) => {
            console.log(newValue)
            console.log(oldValue)

        })

        return{
            name,
            sel,
            selectHome
        }
    }

}
</script>

<style>

</style>
