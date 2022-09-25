<!doctype html>
@php($direction = config('artist.dir'))
<html lang="{{app()->getLocale()}}"  dir="{{$direction}}">
@include('tabler::partials.head')








{{--<body class="header-static sidebar-fixed sidebar-dark header-light" id="body">--}}
{{--<div class="wrapper">--}}
{{--    <div class="page-wrapper">--}}
{{--        @include('artist::header')--}}
{{--        <div class="content-wrapper">--}}
{{--            <div class="content">--}}
{{--                @yield('content')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<body class="layout-fluid">
<div class="page">
    @include('tabler::partials.sidebar')
    <div class="page-wrapper">
        <div class="container-fluid">
        </div>
        <div class="page-body">
            <div class="container-fluid">
                <div class="row row-deck row-cards">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{asset('admin/js/app.js')}}"></script>
@include('artist::notifications')
@stack('js')
</body>
</html>
