<!doctype html>
@php($direction = 'rtl')
<html lang="{{app()->getLocale()}}"  dir="{{$direction}}">
@include('tabler::partials.head')
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
<script src="{{asset('admin/js/tabler.min.js')}}"></script>
<script src="{{asset('admin/js/jquery-3.6.1.min.js')}}"></script>
@stack('js')
</body>
</html>
