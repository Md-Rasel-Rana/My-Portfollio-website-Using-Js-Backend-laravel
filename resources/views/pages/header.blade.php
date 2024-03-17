@extends('layout.app')
@section('content')
@include('Components.Header.header')
@include('Components.Hero.hero')
@include('Components.About.about')
@include('Components.Resume.resume')
@include('Components.MyService.service')
@include('Components.Myskill.myskill')
@include('Components.Myproject.myproject')
@include('Components.Myblog.myblog')
@include('Components.CounterSection.countersection')
@include('Components.Freelancing.Freelancing')
@include('Components.Contact-Me.contactme')
@include('Components.Footer.footer')
@endsection