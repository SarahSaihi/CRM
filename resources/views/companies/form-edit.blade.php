<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('companies.update')}}" method="post">
        @csrf
        @method("PUT")

        <div>
            <label for="name">Nom :</label>
            <input type="text" name="name" value="{{$company->name}}">
        </div>

        <div>
            <label for="statut">Statut :</label>
            <input type="text" name="statut" value="{{$company->statut}}">
        </div>

        <div>
            <label for="siren">SIREN :</label>
            <input type="number" name="siren" value="{{$company->siren}}">
        </div>

        <div>
            <label for="mail">Mail :</label>
            <input type="text" name="mail" value="{{$company->mail}}">
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