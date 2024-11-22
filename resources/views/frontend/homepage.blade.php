@extends('layouts.frontend')

@section('css_class', 'frontend home')

@section('content')
<div class="pt-16 sm:pt-28 bg-gray-900 min-h-screen">
    @if (!auth()->check() && !config('urlhub.public_site'))
        <div class="flex flex-wrap md:justify-center">
            <div class="w-full md:w-8/12 font-thin text-5xl text-slate-300 text-center welcome-msg">
                {{ __('Please login to shorten URLs') }}
            </div>
        </div>
        <div class="flex flex-wrap md:justify-center mt-12">
            <div class="w-full md:w-7/12">
                @include('partials/messages')
            </div>
        </div>
    @else
        <!-- Header Section -->
        <div class="flex flex-wrap justify-center mb-12">
            <h1 class="mx-auto max-w-md md:max-w-3xl relative z-10 font-extrabold text-white text-center md:text-4xl xl:text-5xl text-3xl leading-tight drop-shadow-md">
                Shorten URLs Effortlessly
                <br>
                <span class="font-thin text-gray-300 block mt-2 md:mt-4 text-lg sm:text-xl md:text-2xl">
                    Transform long, unwieldy URLs into sleek, shareable links instantly.
                </span>
            </h1>
        </div>


        <!-- Form Section -->
        <div class="flex flex-wrap justify-center mt-12 px-4 lg:px-0">
            <div class="w-full max-w-4xl bg-gray-800 p-8 rounded-xl shadow-2xl">
                <form method="post" action="{{ route('su_create') }}" class="mb-4" id="formUrl">
                    @csrf
                    <!-- Main Input Section -->
                    <div class="mt-1 flex flex-col sm:flex-row items-center gap-4">
                        <input name="long_url" value="{{ old('long_url') }}" 
                            placeholder="{{ __('Shorten your link') }}"
                            class="w-full sm:w-3/4 px-4 h-12 sm:h-14 text-lg outline-none border border-gray-600 focus:border-blue-500 rounded-md shadow-md transition duration-300 ease-in-out focus:ring-4 focus:ring-blue-300 text-gray-800"
                        >
                        <button type="submit" id="actProcess"
                            class="w-full sm:w-1/4 h-12 sm:h-14 rounded-md text-lg text-white bg-blue-600 focus:ring-4 focus:ring-blue-300 transition-all duration-300 ease-in-out shadow-xl"
                        >
                            {{ __('Shorten') }}
                        </button>
                    </div>

                    <!-- Custom URL Section -->
                    <div class="custom-url mt-12 text-left">
                        <h2 class="text-2xl font-semibold text-white">{{ __('Custom URL (optional)') }}</h2>
                        <p class="text-gray-400 mb-4 mt-2">
                            {{ __('Replace clunky URLs with meaningful short links that get more clicks.') }}
                        </p>
                        <div class="inline-block text-lg font-medium text-gray-300 bg-gray-700 py-2 px-4 rounded-md shadow-md">
                            {{ request()->getHttpHost() }}/ @livewire('validation.validate-custom-keyword')
                        </div>
                    </div>
                </form>

                @include('partials/messages')
            </div>
        </div>
    @endif
</div>

@endsection
