@extends('layouts.tiger')
@section('title', 'Tiger Quiz')

@section('css')
    @include('inc.maincss')
@stop

@section('include')

@include('inc.nav')
@include('inc.intro')
@include('inc.faci')
@include('inc.class')
@include('inc.blog')
@include('inc.reg')
@include('inc.team')
@include('inc.tsm')
    @stop

@section('footerin')
@include('inc.footer')
    @stop
@section('scriptin')
    @include('inc.mainjs')
    @endsection
@section('scripts')
