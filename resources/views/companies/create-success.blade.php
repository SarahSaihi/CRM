<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Vos informations ont bien été enregistrées</h2>
    <ul>
        @foreach($companies as $company)
        <li>{{$company->name}}</li>
        <li>{{$company->statut}}</li>
        <li>{{$company->siren}}</li>
        <li>{{$company->mail}}</li>
        @endforeach
    </ul>
</body>

</html>