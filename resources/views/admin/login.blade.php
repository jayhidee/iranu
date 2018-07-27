@extends('admin.addnew')

@section('content')
{!!Form::open(['action' => '', 'method' => 'POST'])!!}
        {{-- {{form::label('username', 'Username')}} --}}
        {{-- {{form::text('Username', '', ['class' => 'form-control', 'placeholder', 'Username'])}} --}}
    {!!Form::close()!!}
@endsection