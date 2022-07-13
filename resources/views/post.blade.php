@extends('layouts.master')

@section('content')

    <h1>Lista {{$id}}</h1>
	
	Información de https://laravel.com/docs/5.2/blade
	
	@if (count($records) === 1)
		I have one record!
	@elseif (count($records) > 1)
		I have multiple records!
	@else
		I don't have any records!
	@endif
	
	@unless (Auth::check())
		You are not signed in.
	@endunless
	
	@for ($i = 0; $i < 10; $i++)
		The current value is {{ $i }}
	@endfor
	 

@stop
