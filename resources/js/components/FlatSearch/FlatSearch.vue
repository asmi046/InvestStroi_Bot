<template>
    <div class="flex flex-col">
        <div class="flex flex-col">
            <h2 class="text-sm">Выбор дома:</h2>
            <div class="flex justify-start">
                <home-select :allhomes="all_homes"></home-select>
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
                <input v-model="florot" min="1" class="border  border-cborder px-2 py-1 rounded w-28" type="number" placeholder="От">
                <span class="mx-3 my-auto border border-b-cborder w-3"></span>
                <input v-model="flordo" min="1" class="border border-cborder px-2 py-1 rounded w-28" type="number" placeholder="До">
            </div>
        </div>


    </div>

</template>

<script>
import { onMounted, ref } from 'vue'
import HomeSelectElrment from './HomeSelectElrment.vue'
import HomeSelect from './HomeSelect.vue'
export default {
    components: { HomeSelectElrment, HomeSelect },
    setup() {
        const all_homes = ref({})
        const florot = 1
        const flordo = 10

        onMounted(()=>{
            axios.get('/get_start_param').then((response) => {
                all_homes.value = response.data.all_home
            })
            .catch(error => console.log(error));
        })

        return {
            all_homes, florot, flordo
        }
    }
}
</script>

<style>

</style>
