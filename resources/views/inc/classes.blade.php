@extends('layouts.tiger')
@section('title', 'Tiger Quiz')

@section('css')
    @include('inc.maincss')
    @stop

@section('include')


@include('inc.introcls')
@include('inc.class')
@include('inc.reg')
    @stop

@section('footerin')
@include('inc.footer')
    @stop
@section('scriptin')
    @include('inc.mainjs')
    @endsection
@section('scripts')