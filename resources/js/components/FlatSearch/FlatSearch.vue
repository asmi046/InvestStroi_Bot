<template>
    <div class="flex flex-col">
        <div class="flex flex-col">
            <h2 class="text-sm">Выбор дома:</h2>
            <home-select v-model="selectedHome" :allhomes="all_homes"></home-select>

        </div>

        <div class="flex flex-col">
            <h2 class="text-sm">Комнат:</h2>
            <room-select v-model="rooms" :allrooms="all_rooms"></room-select>
        </div>

        <div class="flex flex-col">
            <h2 class="text-sm">Этаж:</h2>
            <div class="flex justify-start">
                <input v-model="florot" min="1" class="border  border-cborder px-2 py-1 rounded w-28" type="number" placeholder="От">
                <span class="mx-3 my-auto border border-b-cborder w-3"></span>
                <input v-model="flordo" min="1" max="10" class="border border-cborder px-2 py-1 rounded w-28" type="number" placeholder="До">
            </div>
        </div>


    </div>

        <div class="py-2 flex mt-4 justify-start">
            <p class="bg-sblue text-white px-4 py-2 rounded-md">Найден: <strong class="font-black text-sm"> {{flat_count}} </strong> квартир</p>
        </div>

        <div v-if="flat_load" class="flex flex-col justify-center">
            <img class="mx-auto mt-5 w-14" :src="'/img/icons/loader.svg'" alt="">
            <p class="mx-auto mt-5">Загружаем квартиры...</p>
        </div>
        <div v-else class="flex flex-wrap justify-between mt-4">
            <flat-card v-for="(item, index) in searchResult" :key="index" :item="item"></flat-card>
        </div>



</template>

<script>
import { onMounted, ref, watch } from 'vue'
import HomeSelectElrment from './HomeSelectElrment.vue'
import HomeSelect from './HomeSelect.vue'
import RoomSelect from './RoomSelect.vue'
import FlatCard from './FlatCard.vue'
export default {
    components: { HomeSelectElrment, HomeSelect, RoomSelect, FlatCard },
    setup() {


        const all_homes = ref({})
        const all_rooms = ref({})

        const rooms = ref("Все")
        const selectedHome = ref(0)
        const florot = ref(1)
        const flordo = ref(10)

        const searchResult = ref({})

        const flat_load = ref(true)
        const flat_count = ref(0)

        const chengeSearchParam = () => {

            flat_load.value = true
            axios.get('/query', {
                params:{
                    rooms:rooms.value,
                    selectedhome:selectedHome.value,
                    florot:florot.value,
                    flordo:flordo.value
                }
            }).then((response) => {
                searchResult.value = response.data.results
                flat_count.value = response.data.count
                flat_load.value = false
            })
            .catch(error => console.log(error));
        }

        const getStartParam = ()=>{
            axios.get('/get_start_param').then((response) => {
                all_homes.value = response.data.all_home
                all_rooms.value = response.data.flats

            })
            .catch(error => console.log(error));
        }

        onMounted(getStartParam)




        watch([selectedHome, rooms, florot, flordo, all_homes], chengeSearchParam)


        return {
            all_homes, florot, flordo, selectedHome, rooms, all_rooms, searchResult, flat_load, flat_count
        }
    }
}
</script>

<style>

</style>
