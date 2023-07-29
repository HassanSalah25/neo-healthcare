@extends('layouts.master')
@section('content')
    @include('components.home-slider')
    @include('components.calenders')

      @include('components.statiscts')
{{--    @include('home.about-us')--}}
{{--    @include('components.feedback')--}}
    @include('components.book-now')
{{-- @include('components.service-category')--}}
    @include('components.doctors')
    @include('components.blogs')
{{--    @include('components.partners')--}}
{{--    @include('components.patient-feedback')--}}
{{--    @include('components.chat')--}}

@endsection

