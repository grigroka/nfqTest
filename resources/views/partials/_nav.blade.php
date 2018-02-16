<nav class="navbar navbar-static-top navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('main') }}">
                {{ config('app.name', 'nfqTestApp') }}
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? "active" : "" }}">
                    <a class="nav" href="{{ route('main') }}">Main</a>
                </li>
                <li class="{{ Request::is('orders') ? "active" : "" }}">
                    <a class="nav-link" href="{{ route('orders.index') }}">Successful Orders</a>
                </li>
                <li class="{{ Request::is('orders/create') ? "active" : "" }}">
                    <a class="nav-link" href="{{ route('orders.create') }}">Order Now!</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::is('contact') ? "active" : "" }}">
                    <a class="nav" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="{{ Request::is('about') ? "active" : "" }}">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>