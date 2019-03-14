@extends('aboutus') <!-- to show navbar -->

@section('My App')
    Contact Us
@endsection <!-- to show title page -->

@section('content')
    This is the content of contact page!
@endsection

@section('footer')
@parent
    <p> This is the additional footer </p>
@endsection
