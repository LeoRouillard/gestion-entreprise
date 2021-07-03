<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
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
            </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
