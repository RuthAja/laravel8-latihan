<x-app-layout>
    <div class="container">
        <h1>All Users</h1>
        @foreach ($users as $user)
        {{-- NOTE alternativ 1 --}}
        {{-- <li><a href="{{ route('users.show', $user->username) }}">{{ $user->name }}</a></li> --}}
        {{-- NOTE alternativ 2. cara ini hanya berbeda dari param $user yang tanpa $user->username, karena $user sudah
        mengenali secara default yaitu username bukan id karena sudah di atur di route web.php --}}
        <li><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></li>
        @endforeach
    </div>
</x-app-layout>