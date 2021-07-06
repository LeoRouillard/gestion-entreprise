<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="padding: 10px; margin: 10px;">
        <a href="{{ route('missions') }}" class="btn btn-danger">Retour</a>
        <h2>Mission référence : {{$mission->reference}}</h2>
        <h4>Titre : {{$mission->title}}</h4>
        <br>
        Accompte : {{$mission->deposit}}
        
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Titre</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix</th>
                </tr>
            </thead>
            <tbody>
            @foreach($missionLines as $ml)
            <tr>
                <td>{{$ml->title}}</td>
                <td>{{$ml->quantity}} {{$ml->unity}}</td>
                <td>{{$ml->price}} €</td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <p style="float:right">Total : {{$total}} €</p>
        
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
