<div class="paginations">
  @if ($paginator->hasPages())
    <ul class="pager">
      {{-- Previous Page Link --}}
      @if ($paginator->onFirstPage())
        <li>
          <a class="pager-prev" style="cursor: pointer"></a>
        </li>
      @else
        <li>
          <a wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="pager-prev" style="cursor: pointer"></a>
        </li>
      @endif

      {{-- Pagination Elements --}}
      @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
          <li aria-disabled="true"><a class="pager-number" style="cursor: pointer">{{ $element }}</a></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <li aria-current="page"><a class="pager-number active" style="cursor: pointer">{{ $page }}</a></li>
            @else
              <li><a wire:click="gotoPage({{ $page }})" class="pager-number" style="cursor: pointer">{{ $page }}</a></li>
            @endif
          @endforeach
        @endif
      @endforeach

      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
        <li>
          <a wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="pager-next" style="cursor: pointer"></a>
        </li>
      @else
        <li aria-disabled="true">
          <a class="pager-next" style="cursor: pointer"></a>
        </li>
      @endif
    </ul>
  @endif
</div>
