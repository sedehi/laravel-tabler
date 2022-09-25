<div class="col-12">
	<div class="card">
		<div class="table-responsive">
			<table class="table table-vcenter table-mobile-md card-table">
				<thead>
				<tr>
					<th>....</th>
					<th>Name</th>
					<th>Title</th>
					<th>Role</th>
					<th class="w-1"></th>
				</tr>
				</thead>
				<tbody>
				@for($i = 0;$i < 10;$i++)
					<tr>
						<td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
						<td data-label="Name" >
							<div class="d-flex py-1 align-items-center">
								<div class="flex-fill">
									<div class="font-weight-medium">Thatcher Keel</div>
									<div class="text-muted"><a href="#" class="text-reset">tkeelf@blogger.com</a></div>
								</div>
							</div>
						</td>
						<td data-label="Title" >
							<div>VP Sales</div>
							<div class="text-muted">Business Development</div>
						</td>
						<td class="text-muted" data-label="Role" >
							User
						</td>
						<td>
							<div class="btn-list flex-nowrap">
								<a href="#" class="btn">
									Edit
								</a>
								<div class="dropdown">
									<button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
										Actions
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
	</div>
</div>


<div class="container-xl">
	<div class="row row-cards">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<ul class="pagination align-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1" aria-disabled="true">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="15 6 9 12 15 18"></polyline></svg>
								prev
							</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item active"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item">
							<a class="page-link" href="#">
								next
								<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>