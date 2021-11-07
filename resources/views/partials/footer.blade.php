@php
$navs = [
    [
        'title' => 'DC Comics',
        'menu' => [
            [
                'label' => 'Characters',
                'uri' => '#',
            ],
            [
                'label' => 'Comics',
                'uri' => '#',
            ],
            [
                'label' => 'Movies',
                'uri' => '#',
            ],
            [
                'label' => 'Tv',
                'uri' => '#',
            ],
            [
                'label' => 'Games',
                'uri' => '#',
            ],
            [
                'label' => 'Videos',
                'uri' => '#',
            ],
            [
                'label' => 'News',
                'uri' => '#',
            ],
        ],
    ],
    [
        'title' => 'DC',
        'menu' => [
            [
                'label' => 'Terms Of Use',
                'uri' => '#',
            ],
            [
                'label' => 'Privacy Policy (New)',
                'uri' => '#',
            ],
            [
                'label' => 'Ad Choices',
                'uri' => '#',
            ],
            [
                'label' => 'Advertising',
                'uri' => '#',
            ],
            [
                'label' => 'Jobs',
                'uri' => '#',
            ],
            [
                'label' => 'Subscriptions',
                'uri' => '#',
            ],
            [
                'label' => 'Talent Workshop',
                'uri' => '#',
            ],
            [
                'label' => 'CPSC Certificates',
                'uri' => '#',
            ],
            [
                'label' => 'Ratings',
                'uri' => '#',
            ],
            [
                'label' => 'Shop Help',
                'uri' => '#',
            ],
            [
                'label' => 'Contact Us',
                'uri' => '#',
            ],
        ],
    ],
    [
        'title' => 'Sites',
        'menu' => [
            [
                'label' => 'DC',
                'uri' => '#',
            ],
            [
                'label' => 'MAD Magazine',
                'uri' => '#',
            ],
            [
                'label' => 'DC Kids',
                'uri' => '#',
            ],
            [
                'label' => 'DC Universe',
                'uri' => '#',
            ],
            [
                'label' => 'DC Power Visa',
                'uri' => '#',
            ],
        ],
    ],
    [
        'title' => 'Shop',
        'menu' => [
            [
                'label' => 'Shop DC',
                'uri' => '#',
            ],
            [
                'label' => 'Shop DC COllectible',
                'uri' => '#',
            ],
        ],
    ],
];
@endphp

<footer>
    <div class="top-footer">
        <div class="container">
            <ul class="row">
                <li class="col">
                    <ul class="row">
                        @foreach ($navs as $nav)
                            <li class="col">
                                <div class="menu">
                                    <div class="title">
                                        <h2>
                                            {{ $nav['title'] }}
                                        </h2>
                                    </div>
                                    <ul class="row">
                                        @foreach ($nav['menu'] as $link)
                                            <li class="col">
                                                <a href="{{ $link['uri'] }}">
                                                    {{ $link['label'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="copyright">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus <a href="#">
                            repudiandae voluptate
                        </a> animi eius.
                    </div>
                </li>
                <li class="col dc-logo">

                </li>
            </ul>
        </div>
    </div>
</footer>
