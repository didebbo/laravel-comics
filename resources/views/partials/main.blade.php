<main>
    <section class="current-series">
        <div class="container">
            <div class="title">
                <h2>
                    Current Series
                </h2>
            </div>
            <ul class="row">
                @foreach ($data['comics'] as $col)
                    <li class="col">
                        <div class="item">
                            <div class="poster">
                                <a href="#">
                                    <img src="{{ $col['thumb'] }}" alt="{{ $col['title'] }}">
                                </a>
                            </div>
                            <div class="title">
                                <h4>
                                    <a href="#">
                                        {{ $col['title'] }}
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
    <section class="info">
        <div class="container">
            <ul class="row">
                @foreach ($data['info-icons'] as $icon)
                    <li class="col">
                        <a href="{{ $icon['uri'] }}">
                            <div class="icon">
                                <img src="{{ '/images/' . $icon['img'] }}" alt="{{ $icon['img'] }}">
                            </div>
                            <div class="text">
                                <h4>
                                    {{ $icon['label'] }}
                                </h4>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</main>
