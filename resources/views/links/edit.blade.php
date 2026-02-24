<div>
    <h1>Editar o link {{ $link->id }}</h1>

    <form action="{{ route('links.edit', $link->id) }}" method="post">
        @csrf
        @method('put')

        <div>
            <input name="link" placeholder="Link" value="{{ old('link', $link->link) }}" />
            @error('link')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <div>
            <input name="name" placeholder="Nome" value="{{ old('name', $link->name) }}" />
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>

        <a href="{{ route('dashboard') }}">Voltar</a>
        <button>Salvar</button>
    </form>

</div>
</div>