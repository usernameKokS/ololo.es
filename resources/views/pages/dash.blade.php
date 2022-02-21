@extends('layouts.master')

@section('content')

<stats 
:portales="{{ $portales }}"
:portal="{{ $portal }}"
></stats>

@endsection