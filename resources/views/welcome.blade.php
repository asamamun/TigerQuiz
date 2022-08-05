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
@include('inc.footer')

    @stop
@section('scripts')
@include('inc.mainjs')
    @endsection