<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('contacts.update')}}" method="post">
        @csrf
        @method("PUT")

        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" name="firstname" value="{{$contact->firstname}}">
        </div>

        <div>
            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" value="{{$contact->lastname}}">
        </div>

        <div>
            <label for="date">Date :</label>
            <input type="date" name="date" value="{{$contact->date}}">
        </div>

        <div>
            <label for="tel">Tel :</label>
            <input type="number" name="tel" value="{{$contact->tel}}">
        </div>
        <div>
            <label for="city">City :</label>
            <input type="text" name="city" value="{{$contact->city}}">
        </div>
        <div>
            <label for="cp">Cp:</label>
            <input type="number" name="cp" value="{{$contact->cp}}">
        </div>


        <input type="submit" value="Valider">


    </form>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div>{{ $error }}</div>
    @endforeach
    @endif

</body>

</html>