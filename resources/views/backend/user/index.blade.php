@extends('layouts.backend')

@section('title', __('All Users'))

@section('content')
<main class="min-h-screen bg-gray-900 text-white"> <!-- Set dark background and full height for the main element -->
    <div class="common-card-style bg-gray-800 dark:bg-gray-900 p-6 rounded-lg shadow-lg dark:shadow-2xl border-none"> <!-- Apply dark card background, padding, rounded corners, and shadow -->
        <div class="card_header__v2 mb-4 text-2xl text-white"> <!-- Header text color to white -->
            {{ __('All Users') }}
        </div>

        @livewire('table.user-table')
    </div>
</main>
@endsection
