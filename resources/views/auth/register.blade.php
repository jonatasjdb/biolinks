<div>
    <h1>Register</h1>

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div>
            <input name="name" placeholder="Nome" value="{{ old('name') }}" />
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <div>
            <input name="email" placeholder="E-mail" value="{{ old('email') }}" />
            @error('email')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <div>
            <input name="email_confirmation" placeholder="Email Confirmation" />
        </div>
        <br>
        <div>
            <input type="password" name="password" placeholder="Senha" />
            @error('password')
                <span>{{$message}}</span>
            @enderror
        </div>

        <br>
        <button>Logar</button>
    </form>

</div>
</div>
