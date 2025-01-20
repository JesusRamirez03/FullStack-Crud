@extends('layouts.app')
@section('title', 'AniManga')
@section('body')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <p class="text-lg">
                        {{ __("You're logged in!") }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
