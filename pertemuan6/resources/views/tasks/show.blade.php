<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="mt-5 text-center">Detail Task</h1>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="fw-bold">Nama Task</h3>
                <p>{{ $task['name'] }}</p>
                <br>

                <h3 class="fw-bold">Description task</h3>
                <p>{{ $task['description'] }}</p>
                <br>

                <h3 class="fw-bold">Deadline task</h3>
                <p>{{ \Carbon\Carbon::parse($task['deadline'])->format("d F Y")}}</p>
                <br>

                <h3 class="fw-bold">Status</h3>
                @if ($task['deadline'] == 'selesai')
                    <span class="badge bg-success">Selesai</span>                  
                @else
                    <span class="badge bg-danger">Belum Selesai</span>
                @endif
            </div>
        </div>

        <div class="mt-2">
            <a href="{{ route('task.index') }}" class="btn btn-info">Kembali</a>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>