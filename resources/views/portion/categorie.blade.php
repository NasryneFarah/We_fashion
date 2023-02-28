<!DOCTYPE html>
<html lang="fr" data-theme="cupcake">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ URL::to('css/dashboard.css') }}">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!--Barre de navigation-->
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Item 1</a></li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Parent
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost normal-case text-xl">WE FASHION</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{route('dashboard')}}">Produits</a></li>
                <li><a href="{{URL::to('categorie')}}">Catégories</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="btn" href="{{route('all')}}"><i class="bi bi-house"></i></a>
        </div>
    </div>


  

    <section class="wrapper">

        <div class=" w-full flex justify-end" style="margin-right: 50px">
           <a href="{{route('dashboard.categorie_add_form')}}"> <button class="btn btn-outline">Button</button></a>
        </div>

        <div class="overflow-x-auto">
            <table class="table table-zebra w-full">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Nom</th>
                    </tr>
                </thead>
                <tbody>
                  
                    @foreach ($categories as $c)
                        <tr>
                            <th scope="row">{{ $c->name }}</th>
                            <td><a class="btn  btn-primary"
                                    href="{{ route('dashboard.categorie_edit_form', ['id' => $c->id]) }}">modifier</a></td>
                            <td>
                                <form action="{{ route('dashboard.categorie_delete') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $c->id }}">
                                    <button type="submit" class="btn btn-error"
                                        title="attention cette action est irréversible">supprimer</a>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
  
        </div>
    </section>
</body>

</html>
