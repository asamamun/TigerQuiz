@extends('layouts.tiger')
@section('title', 'Tiger Quiz')

@section('css')
   
@stop

{{-- main content add here --}}
@section('include')

@include('inc.intro')
@include('inc.faci')
@include('inc.class')
@include('inc.blog')
@include('inc.reg')
@include('inc.team')
@include('inc.tsm')
    @stop

{{-- footer add here --}}
@section('footerin')
@include('inc.footer')
    @stop

    
{{-- ['quizset'=>$quizset] --}}