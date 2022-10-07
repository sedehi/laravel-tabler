@extends('tabler::layout')
@section('content')
	<div class="page-header">
		<div class="row align-items-center">
			<x-tabler::page-title title="Dashboard" pretitle="OVERVIEW"/>
			<div class="col-auto ms-auto">
				<div class="btn-list">
					<a href="#" class="btn btn-primary">ایجاد</a>
					<a href="#" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#modal-search">جستجو</a>
					<x-tabler::modal name="search" title="جستجو" submit-text="جستجو" form-action="{{route('table')}}" form-method="POST">
						<div class="row">
							<x:form::input placeholder="salam" class="date" name="navid"/>
							<x:form::input placeholder="salam" Disabled name="navid"/>
							<x:form::input type="password" placeholder="salam" name="navid"/>
							<x:form::checkbox name="newsletter_subscription" :checked="true"/>
							@php($options = [1 => 'Laravel', 2 => 'Bootstrap', 3 => 'Tailwind', 4 => 'Livewire'])
							<x:form::select name="hobby" placeholder="What is your hobby prefered hobby?" :options="$options" selected="1"/>
						</div>
					</x-tabler::modal>
				</div>
			</div>
		</div>
	</div>
	@php($new = 8)
	<x-tabler::table
			:new="$new"
			:items="$items"
			:headers="['full name','last name','father name','national code']"
{{--			:fields="['first_name','last_name','father_name','national_code']"--}}
			:fields="function($item){
				return [
				 0 => $item->first_name.' '.$item->last_name,
				 'dqwdqw' => $item->id,
				 'test' => 'qwdqwdqw',
				 'national_code' => 31231231,
					];
			}"
{{--		    fields="tabler::table-row"--}}
{{--			without-delete--}}
{{--			:links="[--}}
{{--				[--}}
{{--				'title' => 'test',--}}
{{--				'url' => function($item) use($new){--}}
{{--					return route('show',[$item->id,'title' => $new]);--}}
{{--				}--}}
{{--				],--}}
{{--				[--}}
{{--				'title' => 'test2',--}}
{{--				'url' => function($item) use($new){--}}
{{--					return route('show',[$item->id]);--}}
{{--				}--}}
{{--				],--}}
{{--			]"--}}
{{--			btns="tabler::table-btn"--}}
{{--			:btns="[--}}
{{--				[--}}
{{--				'title' => 'test',--}}
{{--				'url' => function($item) use($new){--}}
{{--						return route('show',[$item->id,'title' => $new]);--}}
{{--				}--}}
{{--				],--}}
{{--				[--}}
{{--				'title' => 'test2',--}}
{{--				'url' => function($item) use($new){--}}
{{--					return route('show',[$item->id]);--}}
{{--				}--}}
{{--				],--}}
{{--			]"--}}
	/>
@endsection