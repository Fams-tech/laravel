<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="col-sm-8">
            <table class="table table-striped table-bordered" style="margin-top: 50px">
                <thead class="thead-dark">
                    <tr>
                        <th>Liste des formations</th>
                    </tr>
                </thead>
                @foreach ($formation as $for)
                    <tr>
                        <td>{{ $for->nomFormation }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
  </body>
</html>