@extends('layout.main-template')

@section('linkCSS')
@endsection

@section('content')
{{-- @dd($applier) --}}
    @foreach ($applier as $apl)
        {{ $apl->apply_price }}
        {{ $apl->description }}
    @endforeach
@endsection
