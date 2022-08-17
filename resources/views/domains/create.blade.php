@extends('layouts.app')

@section('content')
<div class="container">
    <form-component csrf-token="{{ csrf_token() }}"></form-component>
    <div class="row justify-content-center">
        <div class="col-md-8">
        </div>
    </div>
</div>
@endsection