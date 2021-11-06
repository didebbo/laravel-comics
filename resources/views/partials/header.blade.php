@php
$ul = [
    'active' => 1,
    'li' => [
        [
            'label' => 'Characters',
            'uri' => '#',
            'dropdown' => false,
        ],
        [
            'label' => 'Comics',
            'uri' => '#',
            'dropdown' => false,
        ],
        [
            'label' => 'Movie',
            'uri' => '#',
            'dropdown' => false,
        ],
        [
            'label' => 'TV',
            'uri' => '#',
            'dropdown' => false,
        ],
        [
            'label' => 'Games',
            'uri' => '#',
            'dropdown' => false,
        ],
        [
            'label' => 'Collectibles',
            'uri' => '#',
            'dropdown' => false,
        ],
        [
            'label' => 'Videos',
            'uri' => '#',
            'dropdown' => false,
        ],
        [
            'label' => 'Fans',
            'uri' => '#',
            'dropdown' => false,
        ],
        [
            'label' => 'News',
            'uri' => '#',
            'dropdown' => false,
        ],
        [
            'label' => 'Shop',
            'uri' => '#',
            'dropdown' => true,
        ],
    ],
];
@endphp

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
                @foreach ($ul['li'] as $key => $li)
                    <li class="col @php if ($key === $ul['active']) echo " active" @endphp">
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
