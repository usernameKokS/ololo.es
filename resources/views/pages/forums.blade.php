@extends('layouts.master')

@section('content')

<foro :forums='{{ $ads }}'></foro>


@endsection