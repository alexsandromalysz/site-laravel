<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Meu Site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav" aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="topNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/portfolio') }}">Portifólio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/contato') }}">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>