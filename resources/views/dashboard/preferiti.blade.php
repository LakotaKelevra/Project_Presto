<x-layout>

    <x-masthead h1="{{ __('ui.articoliPreferiti') }}" />
    <div class="container">
        <div class="row gap-1  justify-content-center justify-content-evenly">
            @if ($favoritesArticles->isEmpty())
                <p>{{ __('ui.nonCiSonoArticoli') }}</p>
            @else
                @foreach ($favoritesArticles as $article)
                    <div class="col-12 col-md-5 col-lg-3">
                        <x-card-custom :article="$article" />
                    </div>
                @endforeach

            @endif
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-12">
                {{ $favoritesArticles->links() }}
            </div>
        </div>
    </div>
</x-layout>