<!-- Post Share Options -->
<div class="styled-pagination">
    <ul class="clearfix">
        @if($posts->currentPage()!=1)
            <li><a href="?page=1">Перша</a></li>
            <li><a href="{{$posts->previousPageUrl()}}"> <span class="ti-angle-left"></span></a></li>
        @endif
        @if($posts->count()>1)
            @for($count = 1; $count <= $posts->lastPage(); $count++)
                @if($count > $posts->currentPage()-3 and $count < $posts->currentPage()+3)
                    <li class="@if($count == $posts->currentPage()) active @endif">
                        <a href="?page={{$count}}">{{$count}}</a></li>
                @endif
            @endfor
        @endif
        @if($posts->currentPage()!= $posts->lastPage())
            <li class="next"><a href="{{$posts->nextPageUrl()}}"><span class="ti-angle-right"></span></a></li>
            <li><a href="?page={{$posts->lastPage()}}"> Остання</a></li>
        @endif

    </ul>
</div>
