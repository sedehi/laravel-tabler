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
					<a href="#" class="btn btn-primary">
						ایجاد
					</a>
					<a href="#" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#modal-report">
						جستجو
					</a>
					<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">جستجو</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									<div class="row">
										<x:form::input placeholder="salam" class="date" name="navid"/>
										<x:form::input placeholder="salam" Disabled name="navid"/>
										<x:form::input type="password" placeholder="salam" name="navid"/>
										<x:form::checkbox name="newsletter_subscription" :checked="true"/>
										@php($options = [1 => 'Laravel', 2 => 'Bootstrap', 3 => 'Tailwind', 4 => 'Livewire'])
										<x:form::select name="hobby" placeholder="What is your hobby prefered hobby?" :options="$options" selected="1"/>
									</div>
								</div>
								<div class="modal-footer">
									<a href="#" class="btn btn-primary me-auto">
										جستجو
									</a>
									<a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
										لغو
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<x-tabler::table />
@endsection