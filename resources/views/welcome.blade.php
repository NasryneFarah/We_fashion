<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!--Mon propre css-->
    <link rel="stylesheet" href="{{URL::to('css/welcome.css')}}">
    <title>We fashion</title>
</head>

<body>
    <!--Barre de navigation-->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="{{route('all')}}">WE FASHION</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('product_status')}}">Soldes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories', ['id' => 1]) }}" style="color: #594a4e;">Homme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories', ['id' => 2]) }}" style="color: #594a4e;">Femme</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('login') }}" class="btn">Se Connecter</a>
        </div>
    </nav>
    <!--Fin barre de navigation-->

    <!--Nombre de produits affichés-->
    <div class="container" style="margin-top: 35px; font-size:1.5rem; font-weight:500;color:#594a4e; display:flex; justify-content:flex-end;align-items:flex-end">
    {{ $products->count() }} résultats
    </div>
    <!--Fin Nombre de produits affichés-->

    <!--Galerie d'image-->
    <div class="container galerie_image ">
        <div class="row ">
            <div class="col-12 d-flex justify-content-around flex-wrap ">
                @foreach ($products as $p)
                    <div class="card m-3 " style=" border: 1px solid rgba(0, 0, 0, 0.4); width: 300px;">
                        <img src="{{ URL::to($p->image) }}" class="card-img-top" style="width: 100%; height:80%"/>
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->name }}</h5>
                            <p class="card-text">{{ number_format($p->price, 2, ',', ' ') }} €</p>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto"
                                    style="background-color: background: #ff8ba7;
                                    background: linear-gradient(120deg, #ff8ba7 17%, #ffc6c7 87%);color:#33272a;"
                                    href="{{route('show',['id'=>$p->id])}}">Voir produit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--Fin Galerie d'image-->

    <!--Pagination-->
    <div class="container-pag">
        {{ $products->onEachSide(1)->links() }}
      </div>
        <!--fin Pagination-->

        <!--Footer-->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
            id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <!-- Footer -->
        <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Informations</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Mentions légales</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Presse</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Fabrication</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Service Client</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="tel:0080093327446"><i class="fa fa-angle-double-right"></i>Contactez-nous</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Livraison & Retour</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Conditions de vente</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Réseaux sociaux</h5>
                        <ul class="list-unstyled quick-links">
                            <li class="list-inline-item"><a href="https://www.facebook.com/wefashionstories/"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="mailto:contact@wefashion.com"> Inscrivez vous à la newsletter</li>
                            <li><a href="https://www.instagram.com/wefashionstories/"><i class="bi bi-instagram"></i></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./Footer -->
        <!--Fin Footer-->

        <!--js BOOTSTRAP-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</body>

</html>
