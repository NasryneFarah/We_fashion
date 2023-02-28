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
    <div class="navbar">
        <div class="navbar-start">
            <a class="btn btn-ghost normal-case text-xl" style="">WE FASHION</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{route('dashboard')}}">Produits</a></li>
                <li><a href="{{route('dashboard.categorie_list')}}">Catégories</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="btn" href="{{route('all')}}"><i class="bi bi-house"></i></a>
        </div>
    </div>

    <!--Nombre de produits affichés-->
    <div class="container" style="margin-top: 25px;padding-left: 60px !important; font-size:1.5rem; font-weight:500;color:#594a4e;">
      {{ $products->count() }} résultats
      </div>
      <!--Fin Nombre de produits affichés-->
  

    <section class="wrapper">

        <div class=" w-full flex justify-end" style="margin-right: 50px">
           <a href="{{route('dashboard.product_add_form')}}"> <button class="btn btn-outline">Button</button></a>
        </div>

        <div class="overflow-x-auto">
            <table class="table table-zebra w-full">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Catégorie</th>
                        <th>Prix</th>
                        <th>État</th>
                    </tr>
                </thead>
                <tbody>
                  
                    @foreach ($products as $p)
                        <tr>
                            <th scope="row">{{ $p->name }}</th>
                            <td>{{ $p->categorie->name }}</td>
                            <td>{{ number_format($p->price, 2, ',', ' ') }} €</td>
                            <td>
                                @if ($p->product_status)
                                    en solde
                                @else
                                    standard
                                @endif
                            </td>
                            <td><a class="btn btn-primary"
                                    href="{{ route('dashboard.product_edit_form', ['id' => $p->id]) }}">modifier</a></td>
                            <td>
                                <form action="{{ route('dashboard.product_delete') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $p->id }}">
                                    <button type="submit" class="btn btn-error"
                                        title="attention cette action est irréversible">supprimer</a>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!--Pagination-->
    <div class="container-pag">
      {{ $products->onEachSide(1)->links() }}
    </div>
      <!--fin Pagination-->
        </div>
    </section>

    <!--  <div class="table_responsive">
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>dicta</td>
                    <td>Femme</td>
                </tr>
            </tbody>
        </table>
    </div>-->

</body>

</html>
