@php($linkUrl = $link ?? '#')
@php($hasChildren = false)
@php($canShow = false)

@isset($route)
    @if(!isset($title))
        @php($title = trans('permissions.'.$route))
    @endif
    @if(auth(config('module.admin_guard'))->user()->hasRoute($route))
        @php($canShow = true)
    @endif
    @php($linkUrl = route($route))
@endisset
@if($canShow)
    <a class="dropdown-item" href="{{$linkUrl}}">
        <span class="nav-link-icon d-md-none d-lg-inline-block ml-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="12" cy="12" r="4"></circle>
            </svg>
        </span>
        {{$title}}
    </a>
@endif
