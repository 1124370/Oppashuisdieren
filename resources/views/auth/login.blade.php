<x-layout :header=false>
    <section class="login-page">
        <form action="/login" method="post" class="form-signin">
            <h1 class="text-center">Log in</h1>
            @csrf
            <div>
                <label for="emailField" class="form-label">E-mailadres</label>
                <input required class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                    type="email" name="email" id="emailField" placeholder="name@example.com">
            </div>
            <div>
                <label for="floatingPassword">Wachtwoord</label>
                <input required type="password" name="password"
                    class="form-control @error('password') is-invalid @enderror" id="floatingPassword"
                    placeholder="Password">
            </div>
            <button class="btn btn-primary" type="submit">Log in</button>
            <div>
                <a class="btn btn-link" href="/register">Nog geen account? Maak er nu een aan!</a>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif
        </form>
    </section>
</x-layout>
