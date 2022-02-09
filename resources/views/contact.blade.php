<x-app-layout title="Kontak" title2="Laravel">
    Contact Page
    <form action="/contact" method="post">
        @csrf
        <button type="submit">Kirim</button>
    </form>
</x-app-layout>