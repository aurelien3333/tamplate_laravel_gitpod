@extends('layouts.base')

@section('base.content')

<div class="h-full pt-12 mx-auto bg-gray-300">
    <div class='max-w-4xl p-4 mx-auto mt-12 bg-white'>
       <div>Question {{$step}} / {{$maxStep}}</div>
        <div>
            {{-- <livewire:test-items :question="$question"> --}}
        </div>

        <div class="flex justify-between">
            <div class="btn" wire:click="next">Suivant</div>
            <div class="btn" wire:click="previous">Précedent</div>
        </div>
    </div>

</div>

@endsection
