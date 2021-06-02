<x-layout :header="false">
    <section class="register-page">
        <form action="/register" method="post" class="form-signup">
            <h1 class="text-center">Maak een account aan</h1>
            @csrf
            <div>
                <label for="nameField">Voor-en achternaam</label>
                <input required class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                    type="text" name="name" id="nameField" placeholder="John Doe">
            </div>
            <div>
                <label for="emailField">E-mailadres</label>
                <input required class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                    type="email" name="email" id="emailField" placeholder="name@example.com">
            </div>
            <div>
                <label for="passwordField">Wachtwoord</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                    id="passwordField" placeholder="Password">
            </div>
            <button class="w-100 btn btn-primary" type="submit">Sign up</button>
            <a href="/login" class="btn btn-link">Heb je al een account? Inloggen kan hier!</a>
            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif
        </form>
    </section>
</x-layout>
