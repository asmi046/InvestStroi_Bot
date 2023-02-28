<a href="{{$href}}" onclick="navigator.share({'title': document.title, 'url':document.location.href}); return false;" class="flex flex-col w-1/5 text-center group border-r border-r-cborder last:border-none " href="#">
    <i @class(['block', 'mx-auto', 'mt-1', 'w-5', 'h-5', 'bg-no-repeat', 'bg-center', 'bg-contain', $icon, $iconH]) > </i>

    <p class="text-min mt-auto mb-1 group-hover:text-sred lg:text-sm">{{$msg}}</p>
</a>
