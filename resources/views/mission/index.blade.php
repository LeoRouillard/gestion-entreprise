<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
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
        <a href="{{ route('home') }}" class="btn btn-danger">Retour</a>
        <h2>Missions</h2>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Reference</th>
                <th scope="col">Organisation ID</th>
                <th scope="col">Title</th>
                <th scope="col">Comment</th>
                <th scope="col">Deposit</th>
                <th scope="col">Ended_at</th>
                <th scope="col">Génération devis</th>
                </tr>
            </thead>
            <tbody>
            @foreach($mission as $m)
            <tr>
                <th scope="row">{{$m->id}}</th>
                <td>{{$m->reference}}</td>
                <td>{{$m->organisation_id}}</td>
                <td>{{$m->title}}</td>
                <td>{{$m->comment}}</td>
                <td>{{$m->deposit}}</td>
                <td>{{$m->ended_at}}</td>
                <td><a href="{{route('devis', $m)}}">Génération</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <form action="{{ route('missions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="reference">Entrez la référence : </label>
                <input class="form-control" type="text" name="reference" id="reference">
                <label for="title">Entrez le titre : </label>
                <input class="form-control" type="text" name="title" id="title">
                <label for="organisation_id">Choisir l'entreprise :</label>
                <select class="form-control" name="organisation_id" id="organisation_id">
                    @foreach ( $organisations as $org )
                        <option value="{{$org->id}}">{{$org->name}}</option>
                    @endforeach
                </select>
                <label for="comment">Entrez un commentaire : </label>
                <input class="form-control" type="text" name="comment" id="comment">
                <label for="deposit">Entrez le dépôt : </label>
                <input class="form-control" type="number" name="deposit" id="deposit">
                <label for="ended_at">Entrez la date de fin : </label>
                <input class="form-control" type="date" name="ended_at" id="ended_at">
            </div>
            <input type="submit" value="Ajouter" class="btn btn-primary">
        </form>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
