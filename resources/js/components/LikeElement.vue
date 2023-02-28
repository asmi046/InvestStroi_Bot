<template>
    <a class="w-8 h-8 my-auto ml-auto bg-lbg hover:bg-lbg_h" :class="{'bg-lbg_active':elementLiked}" href=""></a>
</template>

<script>
export default {
    data() {
        return {
            elementLiked:false
        }
    },

    props: ['elemid', 'liked'],

    mounted:function () {
        this.elementLiked = this.liked
        console.log(this.elementLiked)

    }
}
</script>

<style>

</style>
