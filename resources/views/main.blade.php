@extends('app')

@section('main')
    <main>
        <div class="contents">
            <div class="container-bg_main-top">
                <div class="label-main-top">CURRENT SERIES</div>
            </div>
            <div class="container-bg-main-bottom">
                <div class="content-dc-series">

                    @foreach ($comics as $id => $comic)
                        <div class="card-fumetto">
                            <a href="/card{{ $id }}">
                                <img src="{{ $comic['thumb'] }}" alt="img">
                                <p>{{ $comic['series'] }}</p>
                            </a>
                        </div>
                    @endforeach

                </div>
                <div class="container-button">
                    <button>LOAD MORE</button>
                </div>
            </div>

        </div>
    </main>
@endsection
