<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relations</title>
</head>
<body>

<h1 class="underline">Liste</h1>

<div class="grid grid-cols-1">

    @forelse ($relations as $relation)

    <h3>
        <a href="{{ route('detail', ['id' => $relation->id]) }}">{{ $relation->formations }}</a>
    </h3>
    
    @empty

        Pas de formation
        
    @endforelse

</div>

{{ $relations->links() }}

</body>
</html>