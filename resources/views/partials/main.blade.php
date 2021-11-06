<main>
    <section class="current-series">
        <div class="container">
            <div class="title">
                <h2>
                    Current Series
                </h2>
            </div>
            <ul class="row">
                @foreach ($data as $key => $col)
                    <li class="col">
                        <div class="item">
                            <div class="poster">
                                <a href="#">
                                    <img src="{{ $data[$key]['thumb'] }}" alt="{{ $data[$key]['title'] }}">
                                </a>
                            </div>
                            <div class="title">
                                <h4>
                                    <a href="#">
                                        {{ $data[$key]['title'] }}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="btn-more">
                <button>
                    Load More
                </button>
            </div>
        </div>
    </section>
</main>
