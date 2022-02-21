@extends('layouts.master')

@section('content')

<guestarea :remember="{{ old('remember_me') ? 'true' : 'false' }}"></guestarea>

@endsection
