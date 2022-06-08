<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>
    Formation
    <br><br>
    <!--         colonne table -->
    {{ $detail->formations }}
</h1>

<a href="{{ route('stagiaire', ['id' => $detail->id]) }}">
<h2>
    Liste des stagiaires
    <br><br>
<!--       $variable->fonction dans le modèle as $variable -->
    @foreach ($detail->stagiaires as $stagiaire)
    <!--         colonne table -->
     {{ $stagiaire->nom }}   
    @endforeach
</h2>
</a>

</body>
</html>