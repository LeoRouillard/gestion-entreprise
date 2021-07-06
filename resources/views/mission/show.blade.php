<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        @include('header')
        <h3 style="text-align:center">Editer la mission</h3>
        <form action="{{ route('missions.update', $mission->id) }}" method="POST" style="margin:10px;padding:10px">
            @csrf
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="reference">Entrez la référence : </label>
                <input class="form-control" type="text" value="{{$mission->reference}}" name="reference" id="reference">
                <label for="title">Entrez le titre : </label>
                <input class="form-control" type="text" value="{{$mission->title}}" name="title" id="title">
                <label for="organisation_id">Choisir l'entreprise :</label>
                <select class="form-control" name="organisation_id" id="organisation_id">
                    @foreach ( $organisations as $org )
                        <option value="{{$org->id}}"  @if($org->id === $mission->organisation_id) selected @endif>{{$org->name}}</option>
                    @endforeach
                </select>
                <label for="comment">Entrez un commentaire : </label>
                <input class="form-control" value="{{$mission->comment}}" type="text" name="comment" id="comment">
                <label for="deposit">Entrez le pourcentage d'accompte : </label>
                <input class="form-control" type="number" value="{{$mission->deposit}}" name="deposit" id="deposit">
                <label for="ended_at">Entrez la date de fin : </label>
                <input class="form-control" type="date" value="{{$mission->ended_at}}" name="ended_at" id="ended_at">
            </div>
            <input type="submit" value="Editer" class="btn btn-primary">
        </form>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
