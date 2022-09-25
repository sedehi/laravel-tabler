@if ($paginator->hasPages())
		<ul class="pagination">
			@if ($paginator->onFirstPage())
				<li class="page-item page-prev disabled" aria-disabled="true">
					<a class="page-link">
						<div class="page-item-title">@lang('pagination.previous')</div>
					</a>
				</li>
			@else
				<li class="page-item page-prev">
					<a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
						<div class="page-item-title">@lang('pagination.previous')</div>
					</a>
				</li>
			@endif
			@if ($paginator->hasMorePages())
				<li class="page-item page-next">
					<a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
						<div class="page-item-title">@lang('pagination.next')</div>
					</a>
				</li>
			@else
				<li class="page-item page-next disabled" aria-disabled="true">
					<span class="page-link">
						<div class="page-item-title">@lang('pagination.next')</div>
					</span>
				</li>
			@endif
		</ul>
@endif

