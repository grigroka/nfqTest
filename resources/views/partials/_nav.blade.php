<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">nfqTestApp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto navbar-right">
            <li class="{{ Request::is('/') ? "active" : "" }}">
                <a class="nav-link" href="{{ route('main') }}">Main</a>
            </li>
            <li class="{{ Request::is('orders') ? "active" : "" }}">
                <a class="nav-link" href="{{ route('orders.index') }}">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>
</nav>