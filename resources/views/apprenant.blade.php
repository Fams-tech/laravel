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
        <form action="{{ route('enregistrerApprenant') }}" method="post" style="margin-top:50px">
            @csrf
            <div class="form-group">
                <label for="text" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nom" id="">
                </div>
            </div>
            <div class="form-group">
                <label for="text" class="col-sm-2 col-form-label">Prenom</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="prenom" id="">
                </div>
            </div>
            <div class="form-group">
                <label for="classe" class="col-sm-2 col-form-label">Classe</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="classe" id="">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Enregistrer" class="btn btn-info" style="margin-top:10px">
            </div>
        </form> 
    </div>
  </body>
</html>