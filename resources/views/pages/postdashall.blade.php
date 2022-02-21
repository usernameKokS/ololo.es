@extends('layouts.master')

@section('content')

<stats 
:portales="{{ $portales }}"
:postid="{{ $postid }}"
></stats>

@endsection