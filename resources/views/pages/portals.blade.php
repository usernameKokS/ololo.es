@extends('layouts.master')

@section('content')

<estad
    :postid="{{ $postid }}"
    :entity="{{ $entity }}"
    :posts="{{ $posts }}"
/>

@endsection
