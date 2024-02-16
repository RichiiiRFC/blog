
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('inicio') }}">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.index') }}">Listado de posts</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.create') }}">Crear Post</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.edit', '1') }}">Modificar Post</a>
        </li>

    
      </ul>
    </div>
  </div>
</nav>