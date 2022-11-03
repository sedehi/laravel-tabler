@extends('tabler::layout')
@section('content')
	<div class="page-header">
		<x-tabler::page-title title="Dashboard" pretitle="OVERVIEW"/>
	</div>
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Base info</h3>
			</div>
			<div class="card-body">
				<div class="datagrid">
					<div class="datagrid-item">
						<div class="datagrid-title">Registrar</div>
						<div class="datagrid-content">Third Party</div>
					</div>
					<div class="datagrid-item">
						<div class="datagrid-title">Nameservers</div>
						<div class="datagrid-content">Third Party</div>
					</div>
					<div class="datagrid-item">
						<div class="datagrid-title">Port number</div>
						<div class="datagrid-content">3306</div>
					</div>
					<div class="datagrid-item">
						<div class="datagrid-title">Expiration date</div>
						<div class="datagrid-content">–</div>
					</div>
					<div class="datagrid-item">
						<div class="datagrid-title">Creator</div>
						<div class="datagrid-content">
							<div class="d-flex align-items-center">
								Paweł Kuna
							</div>
						</div>
					</div>
					<div class="datagrid-item">
						<div class="datagrid-title">Age</div>
						<div class="datagrid-content">15 days</div>
					</div>
					<div class="datagrid-item">
						<div class="datagrid-title">Edge network</div>
						<div class="datagrid-content">
                      <span class="status status-green">
                        Active
                      </span>
						</div>
					</div>
					<div class="datagrid-item">
						<div class="datagrid-title">Checkbox</div>
						<div class="datagrid-content">
							<label class="form-check">
								<input class="form-check-input" type="checkbox" checked>
								<span class="form-check-label">Click me</span>
							</label>
						</div>
					</div>
					<div class="datagrid-item">
						<div class="datagrid-title">Form control</div>
						<div class="datagrid-content">
							<input type="text" class="form-control form-control-flush" placeholder="Input placeholder">
						</div>
					</div>
					<div class="datagrid-item">
						<div class="datagrid-title">Longer description</div>
						<div class="datagrid-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection