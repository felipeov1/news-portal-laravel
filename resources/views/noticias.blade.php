<x-app-layout>
    <div class="noticias-container py-12">
        <div class="noticias">
            <div>
            </div>
            @foreach ($noticias as $noticia)
                <div class="card" style="width: 18rem;">
                    @if ($noticia->image)
                        <img src="{{ asset($noticia->image) }}" class="card-img-top" style="height: 200px !important" alt="News Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $noticia->title }}</b></h5>
                        <p class="card-text">{{ Str::words($noticia->content, 10) }}</p>
                    </div>
                    <a href="{{ route('noticia.show', $noticia->id) }}" class="noticia-edit-button">Visualizar</a>
                </div>
            @endforeach

        </div>

        <div class="p-6">{{ $noticias->links() }}</div>
    </div>
</x-app-layout>
