@extends('layouts.master')

@section('content')
    <policy :user="{{ $user }}"/>
@endsection
