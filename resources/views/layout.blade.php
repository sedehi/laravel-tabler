<!doctype html>
@php($direction = 'rtl')
<html lang="{{app()->getLocale()}}"  dir="{{$direction}}">
@include('tabler::partials.head')
<body class="layout-fluid">
<div class="page">
    @include('tabler::partials.sidebar')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-fluid">
                <div class="row row-deck row-cards">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
@if(session()->has('success'))
    <x-tabler::toast message="{{session('success')}}" type="success" />
@endif
@if(session()->has('error'))
    <x-tabler::toast message="{{session('error')}}" type="error" />
@endif
</body>
<script src="{{asset('admin/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('admin/js/tabler.min.js')}}"></script>
<script src="{{asset('admin/js/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('admin/js/custom.js')}}"></script>
@stack('js')
</body>
</html>
