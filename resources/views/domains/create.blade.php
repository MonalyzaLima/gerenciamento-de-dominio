@extends('layouts.app')

@section('content')
<div class="container">
    <domain-component :domains='@json($domains)'></domain-component>
    <div class="row justify-content-center">
        <div class="col-md-8">
        </div>
    </div>
</div>
@endsection