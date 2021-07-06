<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <h2>Mission référence : {{$data[0]->mission->reference}}</h2>
        <h4>Titre : {{$data[0]->mission->title}}</h4>
        <br>
        Accompte : {{$data[0]->mission->deposit}}
        
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Titre</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data[0]->missionLines as $ml)
                <tr>
                    <td>{{$ml->title}}</td>
                    <td>{{$ml->quantity}} {{$ml->unity}}</td>
                    <td>{{$ml->price}} €</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <p style="float:right">Total : {{$data[0]->total}} €</p>
        
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
