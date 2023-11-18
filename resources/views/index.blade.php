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
    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p class="pt-2">
          {{ $message }}
        </p>
      </div>
    @endif
    <div class="list-todos">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Agenda</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($todos as $todo)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $todo->agenda }}</td>
              <td>{{ $todo->tanggal }}</td>
              <td>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                  <a class="btn btn-primary" href="{{ route('todos.show', $todo->id) }}">Show</a>
                  <a class="btn btn-success" href="{{ route('todos.edit', $todo->id) }}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
