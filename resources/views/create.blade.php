<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageTitle }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    @include('templates/navbar')
    <section>
      <form class="container mt-5 card" action="{{ route('todos.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="mb-3">
              <label for="agenda" class="form-label">Agenda</label>
              <input type="text" class="form-control" id="agenda-input" aria-describedby="emailHelp" name="agenda">
              @error('agenda')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="textarea" class="form-control" id="deskripsi-input" aria-describedby="emailHelp" name="deskripsi">
            @error('deskripsi')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal-input" aria-describedby="emailHelp" style="width:50%;" name="tanggal">
            @error('tanggal')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
