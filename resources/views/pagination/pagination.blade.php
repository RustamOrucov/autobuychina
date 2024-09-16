@if ($paginator->hasPages())
    <div class="paging">
        <ul>
            <!-- Previous Page Link -->
            @if ($paginator->onFirstPage())
                <li class="arrow disabled"><a href="#"><img src="https://image.autowini.com/cdn/auction/web/images/common/ico_backEnd.png"></a></li>
            @else
                <li class="arrow"><a href="{{ $paginator->previousPageUrl() }}"><img src="https://image.autowini.com/cdn/auction/web/images/common/ico_backEnd.png"></a></li>
            @endif

            <!-- Pagination Elements -->
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="disabled"><a href="#"><span>{{ $element }}</span></a></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a href="#" class="on"><span>{{ $page }}</span></a></li>
                        @else
                            <li><a href="{{ $url }}"><span>{{ $page }}</span></a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            <!-- Next Page Link -->
            @if ($paginator->hasMorePages())
                <li class="arrow"><a href="{{ $paginator->nextPageUrl() }}" data-type="next"><img src="https://image.autowini.com/cdn/auction/web/images/common/ico_next.png"></a></li>
                <li class="arrow"><a href="{{ $paginator->url($paginator->lastPage()) }}" data-type="end"><img src="https://image.autowini.com/cdn/auction/web/images/common/ico_nextEnd.png"></a></li>
            @else
                <li class="arrow disabled"><a href="#"><img src="https://image.autowini.com/cdn/auction/web/images/common/ico_next.png"></a></li>
                <li class="arrow disabled"><a href="#"><img src="https://image.autowini.com/cdn/auction/web/images/common/ico_nextEnd.png"></a></li>
            @endif
        </ul>
    </div>
@endif
