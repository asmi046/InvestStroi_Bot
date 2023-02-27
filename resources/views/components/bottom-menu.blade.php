<div class="z-50 fixed flex-wrap left-0 bottom-0 w-full h-12 bg-white borderShadow flex justify-between text-cborder px-1 py-1 xl:px-4">
    <x-botom-menu-punkt :href="'#'" :msg="'Поделиться'" :icon="'bg-shreBg'" :icon_h="'group-hover:bg-shreBg_h'"></x-botom-menu-punkt>
    <x-botom-menu-punkt :href="'#'" :msg="'Позвонить'" :icon="'bg-callBg'" :icon_h="'group-hover:bg-callBg_h'"></x-botom-menu-punkt>
    <x-botom-menu-punkt :href="'#'" :msg="'Написать'" :icon="'bg-msgBg'" :icon_h="'group-hover:bg-msgBg_h'"></x-botom-menu-punkt>
    <x-botom-menu-punkt :href="route('favorites')" :msg="'Избраное'" :icon="'bg-likeBg'" :icon_h="'group-hover:bg-likeBg_h'"></x-botom-menu-punkt>
    <x-botom-menu-punkt :href="route('home')" :msg="'Подбор'" :icon="'bg-searchBg'" :icon_h="'group-hover:bg-searchBg_h'"></x-botom-menu-punkt>
</div>
