<div class="col-12">
	<div class="card">
		<div class="table-responsive">
			<table class="table table-vcenter table-mobile-md card-table">
				<thead>
				<tr>
					<th class="width-50">
						<input class="form-check-input m-0 align-middle" type="checkbox">
					</th>
					<th>Name</th>
					<th>Title</th>
					<th>Role</th>
					<th class="w-1"></th>
				</tr>
				</thead>
				<tbody>
				@for($i = 0;$i < 10;$i++)
					<tr>
						<td>
							<input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice">
						</td>
						<td >
							<div class="d-flex py-1 align-items-center">
								<div class="flex-fill">
									<div class="font-weight-medium">Thatcher Keel</div>
									<div class="text-muted"><a href="#" class="text-reset">tkeelf@blogger.com</a></div>
								</div>
							</div>
						</td>
						<td>
							<div>VP Sales</div>
							<div class="text-muted">Business Development</div>
						</td>
						<td class="text-muted">
							User
						</td>
						<td>
							<div class="btn-list flex-nowrap">
								<a href="#" class="btn">
									ویرایش
								</a>
								<div class="dropdown">
									<button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
										عملیات
									</button>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="#">
											Action
										</a>
										<a class="dropdown-item" href="#">
											Another action
										</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
				@endfor
				</tbody>
			</table>
		</div>
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
</div>
</div>








