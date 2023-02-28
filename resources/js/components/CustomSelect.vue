<template>
    <div class="flex flex-col relative text-sm mb-3">
        <div @click.prevent="showList" class="w-100 h-10 rounded-lg border border-solid border-cborder bg-cfill flex" >
            <span class="text-cborder mt-auto mb-auto ml-4">{{(componentValue == "")?label:componentValue}}</span>
            <div class="w-3 h-2 mt-auto mb-auto mr-4 ml-auto" :class="{ 'rotate-180': openList }">
                <svg width="14" height="7" viewBox="0 0 14 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0.333333L6.66667 7L13.3333 0.333333L0 0.333333Z" fill="#979797"/>
                </svg>
            </div>
        </div>

        <div v-show="openList" class="w-full px-5 py-1 rounded-lg border border-cborder text-cborder bg-cfill flex flex-col absolute left-0 top-11 z-50">
            <div @click.prevent="selectItem(item[field])" v-for="(item, index) in list" :key="index" class="w-full pl-0 pr-0 pt-1 pb-1 border-b borde-cborder cursor-pointer hover:font-semibold">{{item[field]}}</div>
        </div>
    </div>

    <select v-model="componentValue" :name="name" id="" class="hidden">
        <option v-for="(item, index) in list" :key="index"  :value="item[field]">{{item[field]}}</option>
    </select>
</template>

<script>
export default {
    data() {
        return {
            openList:false,
            componentValue:""
        }
    },

    props:["selected",'label', "list", 'field', "name"],

    mounted: function () {
        this.componentValue = this.selected;
    },

    methods: {
        showList(){
            this.openList = !this.openList
        },

        selectItem(value) {
            this.componentValue = value;
            this.showList();
        }
    }
}
</script>

<style>

</style>
