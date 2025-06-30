<x-app-layout>
    <h2>Editar Perfil</h2>

    @if(session('status'))
        <p style="color: green;">{{ session('status') }}</p>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')

        <div>
            <label>Nome</label><br>
            <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}">
        </div>

        <div>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}">
        </div>

        <button type="submit">Salvar</button>
    </form>

    <form method="POST" action="{{ route('profile.destroy') }}" onsubmit="return confirm('Tem certeza que deseja excluir sua conta?');" style="margin-top:20px;">
        @csrf
        @method('DELETE')

        <button type="submit" style="color: red;">Excluir Conta</button>
    </form>

    <p><a href="{{ route('dashboard') }}">← Voltar ao Dashboard</a></p>
</x-app-layout>
