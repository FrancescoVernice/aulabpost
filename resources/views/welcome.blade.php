<x-layout>
    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card">
                    <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
                    @auth
                    @if($article->user->id === Auth::user()->id && Auth::user()->is_writer)
                    <a href="{{route('article.byEditor', ['editor' => Auth::id()])}}" class="small text-muted fst-italic text-capitalize">{{Auth::user()->name}}</a>
                    @endif
                    @endauth
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->subtitle}}</p>
                        <p class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</p>

                    </div>
                    <div class="card-footer text-muted d-flex justify-conntent-between align-items-center">
                     Redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                     <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>
                    </div>

                </div>

            </div>
        @endforeach
        </div>

    </div>

</x-layout>