@extends('layouts.backend')

@section('title', __('URLs List'))

@section('content')
<main class="bg-gray-900 text-white">
    <div class="common-card-style bg-gray-800 dark:bg-gray-900 p-6 rounded-lg shadow-lg dark:shadow-xl border-none">
        <div class="card_header__v2 mb-4 flex justify-between items-center">
            <div class="w-1/2">
                <span class="text-2xl text-white">{{ __('List of All URLs') }}</span>
            </div>
            <div class="w-1/2 text-right">
                <a href="{{ route('dashboard.allurl.u-guest') }}" title="{{ __('Shortened long links by Guest') }}" class="btn btn-secondary bg-uh-indigo-600 text-white hover:bg-uh-indigo-700 active:bg-uh-indigo-600 px-4 py-2 rounded-md">
                    {{ __('By Guest') }}
                </a>
            </div>
        </div>

        @include('partials/messages')

        @livewire('table.url-list-table')
    </div>
</main>
@endsection
