<template>
    <div class="flex px-4 flex-col">
        <div class="flex flex-col">
            <h2 class="text-sm">Выбор дома:</h2>
            <div class="flex justify-start">
                <home-select-elrment></home-select-elrment>
                <home-select-elrment></home-select-elrment>
            </div>
        </div>

        <div class="flex flex-col">
            <h2 class="text-sm">Комнат:</h2>
            <div class="flex justify-start flex-wrap">
                <span class="border border-cborder rounded py-1 px-3 mr-2 mb-2">1</span>
                <span class="border border-cborder rounded py-1 px-3 mr-2 mb-2">2 (Евро)</span>
                <span class="border border-cborder rounded py-1 px-3 mr-2 mb-2">3 (Евро)</span>
                <span class="border border-cborder rounded py-1 px-3 mr-2 mb-2">Студия</span>
            </div>
        </div>

        <div class="flex flex-col">
            <h2 class="text-sm">Этаж:</h2>
            <div class="flex justify-start">
                <input min="1" class="border  border-cborder px-2 py-1 rounded w-28" type="number" placeholder="От">
                <span class="mx-3 my-auto border border-b-cborder w-3"></span>
                <input min="1" class="border border-cborder px-2 py-1 rounded w-28" type="number" placeholder="До">
            </div>
        </div>


    </div>

</template>

<script>
import { onMounted } from 'vue'
import HomeSelectElrment from './HomeSelectElrment.vue'
export default {
    components: { HomeSelectElrment },
    setup(props) {

        onMounted(()=>{
            axios.get('/query', {
                params: {
                    home:"hommm",
                    florot:1,
                    florto:5
                }
            }) .then((response) => {
                console.log(response)
            })
            .catch(error => console.log(error));
        })
    }
}
</script>

<style>

</style>
