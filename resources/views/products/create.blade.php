@extends('layouts.app')
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create Product</h1>
</div>
<div id="app">
    <create-product :variants="{{ $variants }}">Loading</create-product>
</div>
@endsection