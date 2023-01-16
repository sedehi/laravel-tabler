@php($linkUrl = $link ?? '#')
@php($hasChildren = false)
@php($canShow = false)
@isset($route)
    @if(auth(config('module.admin_guard'))->user()->hasRoute($route))
        @php($canShow = true)
    @endif
    @php($linkUrl = route($route))
@endisset
@if($canShow)
    <a class="dropdown-item" href="{{$linkUrl}}">{{$title}}</a>
@endif
