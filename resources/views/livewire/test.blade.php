@extends('layouts.base')

@section('base.content')

<div class="mx-auto bg-gray-600">
    @foreach ($questions as $question)
        <livewire:test-items :question="$question" />

    @endforeach
</div>

@endsection
