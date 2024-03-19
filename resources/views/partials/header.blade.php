<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a @class(['nav-link', 'active' => Route::currentRouteName() == 'home']) aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a @class(['nav-link', 'active' => Route::currentRouteName() == 'movies.index']) href="{{ route('movies.index') }}">Movies</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>