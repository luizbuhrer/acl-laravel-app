<x-app-layout>
    <p>Bem-vindo, {{ Auth::user()->name }} ({{ Auth::user()->role }})</p>
</x-app-layout>