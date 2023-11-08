
@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Management')])


@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
	@yield('body')
	</div>
  </div>
</div>
@endsection