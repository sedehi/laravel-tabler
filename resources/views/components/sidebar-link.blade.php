@php($linkUrl = $link ?? '#')
@php($hasChildren = false)
@php($canShow = false)
@if(strlen($slot))
    @php($hasChildren = true)
    @php($canShow = true)
@endif
@isset($route)
    @if(!isset($title))
        @php($title = trans('permissions.'.$route))
    @endif
    @if(auth(config('module.admin_guard'))->user()->hasRoute($route))
        @php($canShow = true)
    @else
        @php($canShow = false)
    @endif
    @php($linkUrl = route($route))
@endisset
@if($canShow)
<li class="nav-item {{$hasChildren == true ? 'dropdown' : ''}}">
	<a class="nav-link {{$hasChildren == true ? 'dropdown-toggle' : ''}}"
	   {{$hasChildren == true ? 'data-bs-toggle=dropdown data-bs-auto-close=false role=button aria-expanded=true' : ''}}
	   href="{{$hasChildren == true ? '#' : $linkUrl}}"
	>
		@isset($icon)
			<span class="nav-link-icon d-md-none d-lg-inline-block">{!! $icon !!}</span>
        @else
            <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" stroke-width="0" fill="currentColor"></path>
                </svg> 
            </span>
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
@endif
