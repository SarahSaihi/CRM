<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('companies.store')}}" method="post">
        @csrf

        <div>
            <label for="name">Nom :</label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="statut">Statut :</label>
            <input type="text" name="statut">
        </div>

        <div>
            <label for="siren">SIREN :</label>
            <input type="number" name="siren">
        </div>

        <div>
            <label for="mail">Mail :</label>
            <input type="string" name="mail">
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