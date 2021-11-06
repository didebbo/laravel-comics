<main>
    {{-- @php
        dump($data);
    @endphp --}}
    <section class="current-series">
        <div class="container">
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
        </div>
    </section>
</main>
