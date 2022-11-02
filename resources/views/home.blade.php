@extends('template')

@section('document_title', 'Home')

@section('body')

<div class="d-flex justify-content-center align-items-center" style="height: 90vh"; style="width: 100%">
    <div class="d-grid gap-3">
        <div class="btn1">
            <a href="/result/blue" class="btn btn-primary">Click Me</a>
        </div>
        <div class="btn2">
            <a href="/result/red" class="btn btn-danger">Click Me</a>
        </div>
        <div class="btn3">
            <a href="/result/yellow" class="btn btn-warning">Click Me</a>
        </div>
    </div>
</div>


@endsection
