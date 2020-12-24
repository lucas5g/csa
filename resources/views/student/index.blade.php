@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.{{ $test ?? 'teste'}}</p>
@endsection

@section('content')
    <p>This is my body content. uiiuy</p>
    <p>oq vai acontecer aqui</p>
    <div>
        <h2>teste web async</h2>
    </div>
@endsection