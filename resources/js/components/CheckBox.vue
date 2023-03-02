<template>
    <span class=" block w-5 h-5 rounded-sm mr-0 ml-auto bg-chek_hover bg-cover border border-cborder" :class="{ 'bg-sred' :active, 'bg-chek_hover' :active }"></span>
</template>

<script>
export default {
    props: ["active"]
}
</script>
