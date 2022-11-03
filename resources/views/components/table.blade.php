	<div class="card">
		<div class="table-responsive">
			<table class="table table-vcenter table-mobile-md card-table table-hover">
				<thead>
					<tr>
						@if(!isset($withoutSelect))
							<th class="width-50">
								<input class="form-check-input m-0 align-middle select-all" type="checkbox">
							</th>
						@endif
						@foreach($headers as $header)
							<th>{{$header}}</th>
						@endforeach
					</tr>
				</thead>
				<tbody>
				@foreach($items as $item)
					<tr @if(!empty($rowClass($item))) class="{{$rowClass($item)}}" @endif>
						@if(!isset($withoutSelect))
							<td>
								<input class="form-check-input m-0 align-middle table-checkbox" value="{{$item->getKey()}}" name="id[]" type="checkbox">
							</td>
						@endif
						@if(is_array($fields))
							@foreach($fields as $field)
								<td>
									{{$item->$field}}
								</td>
							@endforeach
						@elseif(is_string($fields))
							@include($fields,compact('item'))
						@else
							@foreach(collect($fields($item)) as $data)
									<td>
										{{$data}}
									</td>
							@endforeach
						@endif
						@if(isset($btns) || isset($links))
							<td>
							<div class="btn-list flex-nowrap">
								@isset($btns)
									@if(is_array($btns))
									@foreach($btns as $btn)
										@if(!empty($btn['url']($item)))
											<a href="{{$btn['url']($item)}}" class="btn {{$btn['class'] ?? ''}}">{{$btn['title']}}</a>
										@endif
									@endforeach
									@else
										@include($btns,compact('item'))
									@endif
								@endisset
								@isset($links)
										@if(is_array($links))
											<div class="dropdown">
												<button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
													عملیات
												</button>
												<div class="dropdown-menu dropdown-menu-end">
													@foreach($links as $link)
														@if(!empty($link['url']($item)))
															<a href="{{$link['url']($item)}}" class="dropdown-item {{$link['class'] ?? ''}}">{{$link['title']}}</a>
														@endif
													@endforeach
												</div>
											</div>
										@else
											@include($links,compact('item'))
										@endif
								@endif
							</div>
						</td>
						@endif
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
		@if($items->isNotEmpty())
			@if($items instanceof Illuminate\Pagination\LengthAwarePaginator)
				<div class="card-footer d-flex align-items-center">
					<p class="m-0 text-muted d-none d-md-block d-lg-block">نمایش <span>{{$items->firstItem()}}</span> تا <span>{{$items->lastItem()}}</span> از <span>{{$items->total()}}</span> مورد</p>
					{!! $items->appends(request()->except('page'))->render('tabler::pagination.default') !!}
				</div>
			@elseif($items instanceof Illuminate\Pagination\Paginator)
				<div class="card-footer">
					{!! $items->appends(request()->except('page'))->render('tabler::pagination.sample') !!}
				</div>
			@endif
		@endif
</div>

@push('js')
	<script>
        $(document).ready(function() {
            $('.select-all').change(function(e){
                $(this).parents('table:first').find('td input:checkbox').prop('checked', this.checked);
            });
        });
	</script>
@endpush







