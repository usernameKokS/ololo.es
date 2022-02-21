@extends('layouts.master')

@section('content')

<stats 
:portales="{{ $portales }}"
:portal="{{ $portal }}"
:postid="{{ $postid }}"
></stats>

@endsection