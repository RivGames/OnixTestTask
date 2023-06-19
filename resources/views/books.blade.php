@extends('layouts.app')

@section('header','Books List')

@section('main')
    <livewire:show-books :books="$books" />
@endsection
