<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <h2>Organisations</h2>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Slug</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Tel</th>
                <th scope="col">Address</th>
                <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>
            @foreach($organisation as $org)
            <tr>
                <th scope="row">{{$org->id}}</th>
                <td>{{$org->slug}}</td>
                <td>{{$org->name}}</td>
                <td>{{$org->email}}</td>
                <td>{{$org->tel}}</td>
                <td>{{$org->address}}</td>
                <td>{{$org->type}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <form action="{{ route('organisations.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="slug">Entrez le slug : </label>
                <input class="form-control" type="text" name="slug" id="slug">
                <label for="name">Entrez le nom : </label>
                <input class="form-control" type="text" name="name" id="name">
                <label for="email">Entrez l'email : </label>
                <input class="form-control" type="text" name="email" id="email">
                <label for="tel">Entrez le téléphone : </label>
                <input class="form-control" type="text" name="tel" id="tel">
                <label for="address">Entrez l'adresse : </label>
                <input class="form-control" type="text" name="address" id="address">
                <label for="type">Choisir le type :</label>
                <select class="form-control" name="type" id="type">
                    <option value="school">School</option>
                    <option value="government">Government</option>
                    <option value="client">Client</option>
                </select>
            </div>
            <input type="submit" value="Ajouter" class="btn btn-primary">
        </form>

    </body>
</html>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
