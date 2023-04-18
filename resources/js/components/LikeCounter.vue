<template>
  <div class="w-3 h-3 bg-sred text-white text-[8px] rounded-full flex text-center" > <span class="m-auto">{{$store.state.count}}</span></div>
</template>

<script>
export default {

    mounted() {
        axios.get('/favorites/get', {}) .then((response) => {
            this.$store.dispatch('setCount', response.data.count);
        })
        .catch(error => console.log(error));
    }
}
</script>

<style>

</style>
