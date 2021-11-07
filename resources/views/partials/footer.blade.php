<footer>
    <div class="top-footer">
        <div class="container">
            <ul class="row">
                <li class="col">
                    <ul class="row">
                        @foreach ($data['footer-menus'] as $nav)
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
                <li class="col dc-logo"></li>
            </ul>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <ul class="row">
                <li class="col">
                    <a href="#" class="sign-up">
                        Sign-Up Now!
                    </a>
                </li>
                <li class="col">
                    <ul class="row">
                        <li class="col">
                            <h2>
                                Follow Us
                            </h2>
                        </li>
                        @foreach ($data['socials'] as $social)
                            <li class="col">
                                <a href="{{ $social['url'] }}">
                                    <i class="{{ $social['icon'] }}"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</footer>
