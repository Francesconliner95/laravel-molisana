<header>
    <div class="container">

        <div class="logo">
            <img src="{{ asset('img/marchio-sito-test.png') }}" alt="logo">
        </div>

        <nav>
            <ul>
                <li>
                    <a
                    calss="{{ Request::route()->getName() == 'homepage' ? 'active' : ''}}"
                     href="{{ url('/') }}">Home</a>

                </li>
                <li>
                    <a
                    calss="{{ Request::route()->getName() == 'products' ? 'active' : ''}}"
                    href="{{ url('/products') }}">Prodotti</a>
                </li>
                <li>
                    <a
                    calss="{{ Request::route()->getName() == 'news' ? 'active' : ''}}"
                    href="{{ url('/news') }}">News</a>
                </li>
            </ul>
        </nav>
        {{ Request::route()->getName()}}
    </div>
</header>
