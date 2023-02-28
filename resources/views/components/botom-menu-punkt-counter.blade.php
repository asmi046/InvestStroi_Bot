<a href="{{$href}}" class="flex flex-col w-1/5 text-center group border-r border-r-cborder last:border-none " href="#">
    <i @class(['block', 'mx-auto', 'mt-1', 'w-5', 'h-5', 'bg-no-repeat', 'bg-center', 'relative', 'bg-contain', $icon, $iconH]) > <like-counter class="absolute right-[-4px]"></like-counter> </i>

    <p class="text-min mt-auto mb-1 group-hover:text-sred lg:text-sm">{{$msg}}</p>
</a>
