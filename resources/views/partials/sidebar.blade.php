<aside class="navbar navbar-vertical navbar-expand-lg navbar-{{config('tabler.sidebar-color')}}">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<h1 class="navbar-brand navbar-brand-autodark">Admin</h1>
		<div class="collapse navbar-collapse" id="navbar-menu">
			<ul class="navbar-nav pt-lg-3">
				<x-tabler::sidebar-link
						title="Home"
						link="/"
						icon='<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>'/>
			</ul>
		</div>
	</div>
</aside>
