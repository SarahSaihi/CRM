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
        @foreach($contacts as $contact)
        <li>{{$contact->lastname}}</li>
        <li>{{$contact->firstname}}</li>
        <li>{{$contact->age}}</li>
        <li>{{$contact->cp}}</li>
        <li>{{$contact->city}}</li>
        <li>{{$contact->tel}}</li>
        @endforeach
    </ul>
</body>

</html>