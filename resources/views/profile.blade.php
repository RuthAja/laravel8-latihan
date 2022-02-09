{{-- <x-app-layout title="{{ $name }}}" title2="{{ $name }}"> NOTE Alternativ 1 --}}
    <x-app-layout :title="$identifier ?? 'profile'" :title2="$identifier ?? 'Laravel'"> {{-- NOTE Alternativ 2 --}}
        Profile Page {{ $identifier ?? 'Ruth Aja' }}
    </x-app-layout>