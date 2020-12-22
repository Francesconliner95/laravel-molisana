<footer>
    <div class="container">
        <div class="footer-cont">
            <div class="footer-logo">
                <img src="{{ asset('img/marchio-sito-test.png') }}" alt="logo">
            </div>
            <div class="footer-items">
                @foreach ($footer as $key => $value)
                    <div class="footer-item">
                        <p>{{$key}}</p>
                        @foreach ($value as $chiave => $v)
                            <a href="#">{{$v}}</a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>    
    </div>
</footer>
