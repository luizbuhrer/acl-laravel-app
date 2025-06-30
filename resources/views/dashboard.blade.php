<x-app-layout>
    <h2>Dashboard</h2>
    <p>Bem-vindo, {{ Auth::user()->name }} ({{ Auth::user()->role }})</p>

    <ul>
        @if(Auth::user()->role === 'admin')
            <li><a href="{{ route('admin.usuarios') }}">Gestão de Usuários</a></li>
            <li><a href="{{ route('admin.permissoes') }}">Gestão de Permissões</a></li>
        @else
            <li><a href="{{ route('produtos') }}">Gestão de Produtos</a></li>
            <li><a href="{{ route('categorias') }}">Gestão de Categorias</a></li>
            <li><a href="{{ route('marcas') }}">Gestão de Marcas</a></li>
        @endif
    </ul>
</x-app-layout>
