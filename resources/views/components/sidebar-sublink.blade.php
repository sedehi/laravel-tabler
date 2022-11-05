@php($linkUrl = $link ?? '#')
@php($hasChildren = false)
@isset($route)
	@php($linkUrl = route($route))
@endisset
@isset($action)
	@php($linkUrl = action($action))
@endisset
<a class="dropdown-item" href="{{$linkUrl}}">{{$title}}</a>
