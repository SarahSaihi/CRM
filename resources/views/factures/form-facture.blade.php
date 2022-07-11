<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('factures.store')}}" method="post">
        @csrf

        <div>
            <label for="date">Date :</label>
            <input type="date" name="date">
        </div>

        <div>
            <label for="ht">Montant HT :</label>
            <input type="number" name="ht">
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