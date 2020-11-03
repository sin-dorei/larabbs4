<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
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
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">登录</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">注册</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="http://qi6mcm0mn.hd-bkt.clouddn.com/images/23d8489a2165ab94a40b98cc0db3b5f8.jpeg" class="img-fluid rounded-circle" width="30px" height="30px">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('user.show', Auth::user()) }}">个人中心</a>
                        <a class="dropdown-item" href="#">编辑资料</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">退出</button>
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
