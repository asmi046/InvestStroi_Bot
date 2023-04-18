<template>
    <a @click.prevent="to_faforites" class="w-8 h-8 my-auto ml-auto bg-lbg hover:bg-lbg_h" :class="{'bg-lbg_active':elementLiked}" href=""></a>
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

    },

    methods:{
        to_faforites() {

            axios.post('/favorites/add', {
                _token: document.querySelector('meta[name="_token"]').content,
                product_id: this.elemid
            })
            .then((response) => {
                if (response.data[0])
                {
                    this.elementLiked = true;
                    this.$store.dispatch('incrementCount');
                } else {
                    this.elementLiked = false;
                    this.$store.dispatch('decrementCount');
                }
            })
            .catch(error => console.log(error));
        }
    }


}
</script>

<style>

</style>
