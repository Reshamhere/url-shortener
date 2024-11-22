@extends('layouts.backend')

@section('title', __('Links').'  >  Guests')

@section('content')
<main class="min-h-screen bg-gray-900 text-white flex flex-col"> <!-- Full screen height with flexbox -->
    <div class="common-card-style bg-gray-800 dark:bg-gray-900 p-6 rounded-lg shadow-lg dark:shadow-2xl border-none flex-1"> <!-- Ensure it takes the full height -->
        <div class="card_header__v2 mb-4 flex justify-between items-center">
            <div class="w-1/2">
                <span class="text-2xl text-white">
                    {{ __('Links created by Guests') }}
                </span>
            </div>
        </div>

        @include('partials/messages')

        @livewire('table.url-list-of-guest-table')
    </div>
</main>
@endsection
