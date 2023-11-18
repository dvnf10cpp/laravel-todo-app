<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/" style="font-size:20px; font-weight:600">Todo App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <h5>
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" style="margin-top:10px" href="/">Todo List</a>
          </h5>
        </li>
        <li class="nav-item">
          <h5>
              <a class="nav-link {{ Request::is('add') ? 'active' : '' }}" style="margin-top:10px"  href="/add">Add</a>
          </h5>
        </li>
      </ul>
    </div>
  </div>
</nav>
