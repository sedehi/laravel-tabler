@extends('tabler::layout')

@section('content')
	<form action="" method="post" class="card">
		<div class="card-header">
			<h4 class="card-title">Form elements</h4>
		</div>
		<div class="card-body">
			<div class="row">
				<x:form::input placeholder="salam" class="date" name="navid"/>
				<x:form::input placeholder="salam" Disabled name="navid"/>
				<x:form::input type="password" placeholder="salam" name="navid"/>
				<x:form::checkbox name="newsletter_subscription" :checked="true"/>
				@php($options = [1 => 'Laravel', 2 => 'Bootstrap', 3 => 'Tailwind', 4 => 'Livewire'])
				<x:form::select name="hobby" placeholder="What is your hobby prefered hobby?" :options="$options" selected="1"/>
				<x:form::select name="hobbies" :options="$options" :selected="[2, 3]" allowPlaceholderToBeSelected multiple/> {{-- You'll be able to selected the placeholder and the name will be converted to hobbies[] --}}
				<x:form::checkbox name="newsletter_subscription" :checked="true"/>
				<x:form::toggle-switch name="active" :checked="false" inline/>

				<x:form::textarea id="custom-id" name="first_name"/>
				<x:form::input name="name" caption="Please fill this input with your full name." />
			</div>
		</div>
		<div class="card-footer text-end">
			<div class="d-flex">
				<button type="submit" class="btn btn-primary ms-auto">Send data</button>
				<a href="#" class="btn btn-link">Cancel</a>

			</div>
		</div>
	</form>

@endsection