<header>
    <div class="top-header">
        <div class="container">
            <ul class="row">
                <li class="col">
                    <a href="#">
                        DC Power VISA
                    </a>
                </li>
                <li class="col">
                    <a href="#">
                        ADDITIONAL DC SITES
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <nav>
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('/images/dc-logo.png') }}" alt="DC Logo">
                </a>
            </div>
            <ul class="row nav-bar">
                @php
                    // dd($data);
                @endphp
                @foreach ($data['main-menu']['li'] as $key => $li)
                    <li class="col @php if ($key === $data['main-menu']['active']) echo " active" @endphp">
                        <a href="{{ $li['uri'] }}">
                            {{ $li['label'] }}
                            @php
                                if ($li['dropdown']) {
                                    echo '<i class="fas fa-caret-down"></i>';
                                }
                            @endphp
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="search-bar">
                <label for="search-bar">
                    <input type="text" name="search-bar" id="search-bar" placeholder="Search">
                    <button>
                        <i class="fas fa-search"></i>
                    </button>
                </label>
            </div>
        </nav>
    </div>
    <div class="hero">
        <div class="hero cover"></div>
    </div>
</header>
