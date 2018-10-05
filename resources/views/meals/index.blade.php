@extends('layouts.app')

@section('content')
@if (!$meals->isEmpty())
	<h4>All Meals</h4>

	<hr>

	<ul class="list-group">
	@foreach ($meals as $meal)
			<li class="list-group-item">
				<a href="/meals/{{ $meal->id }}">{{ $meal->name }}</a>
				<a href="/meals/delete/{{ $meal->id }}"> <i class="fa fa-trash"></i></a>	
				<span class="pull-right">
					{{ $meal->created_at->format('g:ia \o\n l, F jS') }}
				</span>
			</li>
	@endforeach
	</ul>
@else
	<p>Looks like you've never eaten anything. Let's <a href="/meals/create">get you fed!</a></p>
@endif
@stop