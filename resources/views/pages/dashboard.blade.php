@extends('layouts.master')

@section('content')
    <stats
        :postid="{{ $postid }}"
        :portals="{{ $portals }}"
        :posts="{{ $posts }}"
        site="{{ json_encode($site) }}"
    ></stats>

@endsection
