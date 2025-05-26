<header class="bg-gray-800 p-4 flex justify-between items-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">{{ __('messages.header.title') }}</a>
            <div class="d-flex align-items-center">
                <a href="/" class="nav-link d-inline px-2">{{ __('messages.header.home') }}</a>
                <a href="/transactions" class="nav-link d-inline px-2">{{ __('messages.header.transactions') }}</a>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('messages.header.language') }}
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('locale/en') }}">EN</a></li>
                        <li><a class="dropdown-item" href="{{ url('locale/ru') }}">RU</a></li>
                        <li><a class="dropdown-item" href="{{ url('locale/uz') }}">UZ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
