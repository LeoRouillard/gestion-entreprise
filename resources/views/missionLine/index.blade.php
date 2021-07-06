<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        @include('header')
        @if(session()->has('mess-success'))
            <div class="alert alert-success">
                {{ session()->get('mess-success') }}
            </div>
        @endif
        @if(session()->has('mess-error'))
            <div class="alert alert-danger">
                {{ session()->get('mess-error') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Mission ID</th>
                <th scope="col">Title</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Unity</th>
                </tr>
            </thead>
            <tbody>
            @foreach($missionLine as $ml)
            <tr>
                <th scope="row">{{$ml->id}}</th>
                <td>{{$ml->mission_id}}</td>
                <td>{{$ml->title}}</td>
                <td>{{$ml->quantity}}</td>
                <td>{{$ml->price}}</td>
                <td>{{$ml->unity}}</td>
                <td>
                    <form action="{{ route('missionLines.destroy', $ml->id) }}" method='POST'>
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Supprimer" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <h3 style="text-align:center">Ajouter une mission line</h3>
        <form action="{{ route('missionLines.store') }}" method="POST" style="margin:10px;padding:10px">
            @csrf
            <div class="form-group">
                <label for="title">Entrez le titre : </label>
                <input class="form-control" type="text" name="title" id="title">
                <label for="mission_id">Choisir la mission :</label>
                <select class="form-control" name="mission_id" id="mission_id">
                    @foreach ( $missions as $m )
                        <option value="{{$m->id}}">{{$m->title}}</option>
                    @endforeach
                </select>
                <label for="quantity">Entrez la quantité : </label>
                <input class="form-control" type="number" name="quantity" id="quantity">
                <label for="unity">Choisir l'unité : </label>
                <select class="form-control" name="unity" id="unity">
                    <option value="jours">Jours</option>
                    <option value="semaine">Semaine</option>
                    <option value="mois">Mois</option>
                    <option value="ans">Ans</option>
                </select>
                <label for="price">Entrez le prix : </label>
                <input class="form-control" type="number" name="price" id="price">
            </div>
            <input type="submit" value="Ajouter" class="btn btn-primary">
        </form>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
