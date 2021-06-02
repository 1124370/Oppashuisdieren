<x-layout>
    <div class="container card">

        <div class="card-header">
            <h3>Huisdieren</h3>
            <a href="{{ route('pets.create') }}" class="btn btn-primary">Voeg je huisdier toe</a>
        </div>
        <form method="{{ route('pets.index') }}" class="filter">
            <select name="type" id="typeField" class="form-control">
                <option value="">All</option>
                <option value="cat">Kat</option>
                <option value="dog">Hond</option>
                <option value="chicken">Kip/haan</option>
                <option value="other">Alle overige dieren</option>
            </select>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>
        <section class="list">
            @foreach ($pets as $pet)
                <figure class="card shadow-sm">
                    <img src="/storage/pets/{{ $pet->image }}" alt="{{ $pet->name }} profile picture">
                    <figcaption class="card-body">
                        <h5>{{ $pet->name }}</h5>
                        <p class="card-text">{{ $pet->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ route('pets.show', $pet) }}"
                                    class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            @endforeach
            {{-- <div class="list-group list-group-flush">
                @forelse ($pets as $pet)
                    <a href="/pets/{{ $pet->id }}" class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <p class="m-0">{{ $pet->name }}</p>
                            @if ($pet->user->country && $pet->user->city)
                                <p class="m-0">{{ $pet->user->country }}, {{ $pet->user->city }}</p>
                            @endif
                        </div>
                        <small class="d-flex align-items-center">
                            <img height="15" alt="star" class="m-1"
                                src="https://img.icons8.com/ios/100/000000/star--v1.png" />
                            {{ $pet->rating }}
                        </small>
                    </a>
                @empty
                    Geen huisdieren gevonden
                @endforelse
            </div> --}}
        </section>
        @if ($pets->hasPages())
            <div class="card-footer d-flex justify-content-center">
                {{ $pets->links() }}
            </div>
        @endif
</x-layout>
