<header class="mb-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo here</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         @foreach ($nav_items as $item)
          <li class="nav-item">
            {{-- non utilizzabile perchè non ho tutte le route names{{ Route::currentRouteName() ===($item['route_name']) ? 'active' : '' }}" aria-current="page" href="{{ $item['url'] }}">{{ $item['name'] }} --}}
            <a class="nav-link {{Request::url() == url($item['url']) ? 'active' : '' }}">{{ $item['name'] }}</a>
          </li>
        @endforeach
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>