@extends('errors::illustrated-layout')

@section('code', '410')
@section('title', __('Page Does Not Exist'))

@section('image')
    <div style="background-image: url({{ asset('/svg/404.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('message', __('Sorry, the page you are looking for is removed or doesn\'t exist.'))
