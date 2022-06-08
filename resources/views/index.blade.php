<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <title>Apple Store</title>
</head>
<body>


<!-- NAV-BAR HORIZONTALE -->
<nav class="h-10 bg-zinc-700">
    <ul class="max-w-7xl mx-auto flex justify-between items-center h-full text-gray-300 text-xs">
        <li>Acceuil</li>
        <li>Store</li>
        <li>Macs</li>
        <li>Ipads</li>
        <li>Iphones</li>
        <li><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg></li>
        <li><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
        </svg></li>
    </ul>
</nav>



<!-- 1ère LIGNE SOUS LA NAV-BAR HORIZONTALE -->
<div class="h-14 max-w-5xl mx-auto flex justify-between items-center">
    <h3 class="text-xl font-medium text-black">Accessoires Iphone</h3>
    <a href="#" class="text-xs text-black flex items-center">
        <p>Tout Parcourir</p>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#a1a1aa">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 9l-7 7-7-7" />
        </svg>
    </a>
</div>



<!-- 2ème LIGNE SOUS LA NAV-BAR HORIZONTALE -->
<div class="bg-gray-100 border-t border-gray-300">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-4xl py-10">Coques et Protections</h1>
    </div>
</div>



<!-- 3ème LIGNE SOUS LA NAV-BAR HORIZONTALE -->
<div class="h-14 border-t border-b border-gray-300 text-gray-400 text-xs sticky top-0 bg-white">
    <div class="max-w-7xl mx-auto h-full flex justify-between items-center">

        <div class="flex space-x-1 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span>Filtre</span>
        </div>

        <div class="flex items-center">Trier par :
            <span class="text-black">&nbsp;Sélection</span>              
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#a1a1aa">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
        
    </div>
</div>



<!-- BOUCLE POUR LES PRODUITS -->
<div class="max-w-7xl mx-auto flex">

    <ul class="block w-52 divide-y text-sm font-medium pr-8 pt-8 sticky top-14 self-start">

        <li class="py-3 pr-2 flex justify-between items-center">
            <p class="w-40">Type de produit</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 5v5m0 0v5m0-5h5m-5 0H5" />
            </svg>
        </li>

        <li class="py-3 pr-2 flex justify-between items-center">
            <p class="w-40">Comptabilité de l'Iphone</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 5v5m0 0v5m0-5h5m-5 0H5" />
            </svg>
        </li>

        <li class="py-3 pr-2 flex justify-between items-center">
            <p class="w-40">Comptabilité de l'Ipad</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 5v5m0 0v5m0-5h5m-5 0H5" />
            </svg>
        </li>

        <li class="py-3 pr-2 flex justify-between items-center">
            <p class="w-40">Comptabilité Mac</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 5v5m0 0v5m0-5h5m-5 0H5" />
            </svg>
        </li>

        <li class="py-3 pr-2 flex justify-between items-center">
            <p class="w-40">Marque</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 5v5m0 0v5m0-5h5m-5 0H5" />
            </svg>
        </li>

        <li class="py-3 pr-2 flex justify-between items-center">
            <p class="w-40">Couleur</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 5v5m0 0v5m0-5h5m-5 0H5" />
            </svg>
        </li>

        <li class="py-3 pr-2 flex justify-between items-center">
            <p class="w-40">Matière</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 5v5m0 0v5m0-5h5m-5 0H5" />
            </svg>
        </li>

        <li class="py-3 pr-2 flex justify-between items-center">
            <p class="w-40">Exclusivement chez Apple</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 5v5m0 0v5m0-5h5m-5 0H5" />
            </svg>
        </li>

    </ul>

    <div class="grid grid-cols-3 max-w-7xl border-l">
    @foreach ($apples as $apple)

            <div class="border-b border-r border-gray-300 text-center">

                <div class="pt-10 pb-4 px10">

                    <div class="aspect-square">
                    <img src="{{ $apple->image }}" alt="illustration" class="w-full h-full object-cover object-center">
                    </div>

                    <P class="text-xs font-light text-orange-500 mb-2">
                        @if( $apple->etat==1 )
                        Nouveau
                        @else
                        <br>
                        @endif
                    </P>

                    <h3 class="text-md font-light text-gray-700">
                    {{ $apple->produits }}
                    </h3>

                    <p class="text-base text-green-500 mt-3">{{ $apple->prix }} €</p>

                    <div class="flex justify-center space-x-2 mt-4">
                        <span class="rounded-full bg-red-500 w-5 h-5 shadow-inner"></span>
                        <span class="rounded-full bg-blue-500 w-5 h-5 shadow-inner"></span>
                        <span class="rounded-full bg-green-500 w-5 h-5 shadow-inner"></span>
                        <span class="rounded-full bg-orange-500 w-5 h-5 shadow-inner"></span>
                        <span class="rounded-full bg-teal-500 w-5 h-5 shadow-inner"></span>
                        <span class="rounded-full bg-gray-500 w-5 h-5 shadow-inner"></span>
                        <span class="rounded-full bg-cyan-500 w-5 h-5 shadow-inner"></span>
                        <span class="rounded-full bg-pink-500 w-5 h-5 shadow-inner"></span>
                    </div>
                
                </div>

            </div>

    @endforeach
    </div>   
</div>

</body>
</html>