<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">LaraBBS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">测试1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">测试2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">测试3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">测试4</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">登录</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">注册</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
