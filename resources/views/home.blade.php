@extends('nav_Med')
@section('app')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <div class=" mt-5 container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-6 col-lg-8">
                <div class="mx-3 me-5 ">
                    @if ($errors->any())
                        <div class="alert alert-danger col-8 offset-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @yield('content')

                @endsection
