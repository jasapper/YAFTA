@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            @if (!is_null($user))
                <div class="panel-heading">Welcome, {{ $user->name }}!</div>

                <div class="panel-body">
                    @if (!$meals->isEmpty())

                        <p>Here's what you've eaten today.</p>

                        <br>

                        <ul class="list-group">
                        @foreach ($meals as $meal)
                            <li class="list-group-item">
                                <a href="/meals/{{ $meal->id }}">{{ $meal->name }}</a>
                                <a href="/meals/delete/{{ $meal->id }}"> <i class="fa fa-trash"></i></a>
                                <span class="pull-right">
                                    {{ $meal->created_at->format('g:i A')}}
                                </span>
                            </li>
                        @endforeach
                        </ul>

                        <br>

                        <p>Why not <a href="/meals/create">keep track of your next meal</a>, too?</p>
                    @else
                        <p>Looks like you haven't eaten anything today. Let's <a href="/meals/create">whip up a little something</a>!</p>
                    @endif
                </div>
            @else
                <div class="panel-heading">Welcome stranger!</div>

                <div class="panel-body">
                <a href="/login">Login</a> or <a href="/register">register</a> to get started!
                </div>
            @endif


            </div>
        </div>
    </div>
</div>
@endsection
