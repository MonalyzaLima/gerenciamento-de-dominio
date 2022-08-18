@extends('layouts.app')

@section('content')
<div class="container">
    <form-edit-component csrf-token="{{ csrf_token() }}" :domain="{{ $domain }}" ></form-edit-component>
    <div class="row justify-content-center">
        <div class="col-md-8">
        </div>
    </div>
</div>
@endsection