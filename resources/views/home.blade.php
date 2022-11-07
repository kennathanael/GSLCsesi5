@extends('template')

@section('document_title', 'Home')

@section('body')

<div class="text-bg-secondary p-3 d-flex justify-content-center">
    <h2 class="">Select one to see your luck today</h2>
</div>

<div class="d-flex justify-content-center align-items-center" style="height: 76vh"; style="width: 100%">
    <div class="d-grid gap-3">
        <div class="btn1">
            <a href="/result/blue" class="btn btn-primary shadow-sm p-3 mb-3 rounded" style="font-weight: bold">Choose Me</a>
        </div>
        <div class="btn2">
            <a href="/result/red" class="btn btn-danger shadow-sm p-3 mb-3 rounded" style="font-weight: bold">Choose Me</a>
        </div>
        <div class="btn3">
            <a href="/result/yellow" class="btn btn-warning shadow-sm p-3 mb-3 rounded" style="font-weight: bold">Choose Me</a>
        </div>
    </div>
</div>


@endsection
