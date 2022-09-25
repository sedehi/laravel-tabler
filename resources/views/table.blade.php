@extends('tabler::layout')
@section('content')
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<div class="page-pretitle">
					Overview
				</div>
				<h2 class="page-title">
					Dashboard
				</h2>
			</div>
			<div class="col-auto ms-auto">
				<div class="btn-list">
        <span class="d-none d-sm-inline">
          <a href="#" class="btn btn-white">
            New view
          </a>
        </span>
					<a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
						Create new report
					</a>
					<a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
					</a>
				</div>
			</div>
		</div>
	</div>
	<x-tabler::table />
@endsection