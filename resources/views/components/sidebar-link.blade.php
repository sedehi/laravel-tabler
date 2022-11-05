@php($linkUrl = $link ?? '#')
@php($hasChildren = false)
@isset($route)
	@php($linkUrl = route($route))
@endisset
@isset($action)
	@php($linkUrl = action($action))
@endisset
@if(strlen($slot))
	@php($hasChildren = true)
@endif
<li class="nav-item {{$hasChildren == true ? 'dropdown' : ''}}">
	<a class="nav-link {{$hasChildren == true ? 'dropdown-toggle' : ''}}"
	   {{$hasChildren == true ? 'data-bs-toggle=dropdown data-bs-auto-close=false role=button aria-expanded=true' : ''}}
	   href="{{$hasChildren == true ? '#' : $linkUrl}}"
	>
		@isset($icon)
			<span class="nav-link-icon d-md-none d-lg-inline-block">{!! $icon !!}</span>
		@endisset
		<span class="nav-link-title">{{$title}}</span>
	</a>
	@if($hasChildren)
		<div class="dropdown-menu">
			<div class="dropdown-menu-columns">
				<div class="dropdown-menu-column">
					{{$slot}}
				</div>
			</div>
		</div>
	@endif
</li>
