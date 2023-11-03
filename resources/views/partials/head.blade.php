<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title',trans('permissions.'.request()->route()->getName()))</title>
	<link href="{{asset('admin/css/Vazirmatn-Variable-font-face.css')}}" rel="stylesheet"/>
	@if(in_array(app()->getLocale(),['fa','ar']))
		<link href="{{asset('admin/css/tabler.rtl.min.css')}}" rel="stylesheet"/>
	@else
		<link href="{{asset('admin/css/tabler.min.css')}}" rel="stylesheet"/>
	@endif
	<link href="{{asset('admin/css/sweetalert2.min.css')}}" rel="stylesheet"/>
	<link href="{{asset('admin/css/custom.css')}}" rel="stylesheet"/>
	@stack('css')
</head>
