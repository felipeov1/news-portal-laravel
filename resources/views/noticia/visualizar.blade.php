<x-app-layout>
    <div class="container text-center" style="margin-top: 30px">
        <div class="row">
            <div class="col-1">
                <a href="{{ route('noticias.noticia') }}" class="noticia-edit-button">Voltar</a>
            </div>
            @if ($noticia->image)
                <div class="col-6">
                    <img src="{{ asset($noticia->image) }}" class="img-fluid" style="height: 500px !important"
                        alt="News Image">
            @endif
        </div>
        <div class="col-5">
            <h5 class="notica-title" style="font-size: 30px">{{ $noticia->title }}</h5>
            <p class="notica-text" style="font-size: 16px; text-align: left">{{ $noticia->content }}</p>
        </div>
    </div>
    </div>
</x-app-layout>
