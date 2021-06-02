<x-layout>
    <main>
        <figure class="pets">
            <figcaption>
                <h1 class="fw-light">Vindt hier de zorg die uw huisdier verdient</h1>
                <p class="lead text-muted">Vind hier uw vertouwde oppasser voor uw dieren.</p>
            </figcaption>
        </figure>
        <section class="container"">
                <div class=" album">
            @foreach (App\Models\Pet::all()->take(6) as $pet)
                    <div class="card shadow-sm">
                        <img src="/storage/pets/{{ $pet->image }}"
                            alt="{{ $pet->name }} profile picture">
                        <div class="card-body">
                            <h5>{{ $pet->name }}</h5>
                            <p class="card-text">{{ $pet->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('pets.show', $pet) }}"
                                        class="btn btn-sm btn-outline-secondary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </section>
    </main>
</x-layout>
