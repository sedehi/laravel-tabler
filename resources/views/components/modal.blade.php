<div class="modal modal-blur fade" id="modal-{{$name}}" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			@if(empty($formMethod))
				@php($formMethod = 'GET')
			@endif
			@if(!empty($formAction))
				<form action="{{$formAction}}" method="{{$formMethod}}">
			@endif
			<div class="modal-header">
				@isset($title)
					<h5 class="modal-title">{{$title}}</h5>
				@endisset
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				{{ $slot }}
			</div>
			<div class="modal-footer">
				@isset($submitText)
					@if(!empty($formAction))
						<button type="submit" class="btn btn-primary me-auto">{{$submitText}}</button>
					@else
						<button type="submit" class="btn btn-primary me-auto">{{$submitText}}</button>
					@endif
				@endisset
				<a href="#" class="btn btn-secondry" data-bs-dismiss="modal">لغو</a>
			</div>
			@if(!empty($formAction))
				</form>
			@endif
		</div>
	</div>
</div>
