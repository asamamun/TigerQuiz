@extends('layouts.tiger')
@section('title', 'Tiger Quiz')

@section('css')
    @include('inc.maincss')
    @stop

@section('include')


@include('inc.introabt')
@include('inc.class')
@include('inc.team')

    @stop

@section('footerin')
@include('inc.footer')
    @stop
@section('scriptin')
    @include('inc.mainjs')
    @endsection
