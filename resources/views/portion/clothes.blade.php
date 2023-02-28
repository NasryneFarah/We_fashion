<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="{{URL::to('css/welcome.css')}}">
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
                            <a class="nav-link" href="{{ route('categories', ['id' => 1]) }}" style="color: #2a2a2a;">Homme</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories', ['id' => 2]) }}" style="color: #2a2a2a;">Femme</a>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('login') }}" class="btn" style=";
                padding: 20px;">Se Connecter</a>
            </div>
        </nav>
        <!--Fin barre de navigation-->
</body>
<main role="main">

    <div class="container">


        <div class="row justify-content-between">

            <div class="col-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="    width: 100%;
                    height: 50%;" src="{{URL::to($product->image)}}" alt="Card image cap">

                </div>
            </div>
            <div class="col-6">

                <h1 class="jumbotron-heading">{{$product->name}}</h1>
        
               
                <p class="lead text-muted">{{$product->description}}</p>
                <span>{{$product->price}}€</span>
                <hr>
                <label for="size">Choisissez votre taille</label>
                <select name="size" id="size" class="form-control">
                    @foreach ( $product->sizes as $size )
                    <option value="{{$size->id}}">{{$size->name}}</option>
                    @endforeach
                   
                </select>
                <p>
                    <a href="#" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                </p>

            </div>
        </div>
    </div>
</main>

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
                    <li><a href="tel:0709765840"><i class="fa fa-angle-double-right"></i>Contactez-nous</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Livraison & Retour</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Conditions de vente</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Réseaux sociaux</h5>
                <ul class="list-unstyled quick-links">
                    <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                    <li><a href="#" title="Design and developed by"><i
                                class="fa fa-angle-double-right"></i>Imprint</a></li>
                </ul>
            </div>
        </div>
        <div class="col-auto">
            <p class="pt-2">
                <strong>Inscrivez vous à la newsletter</strong>
            </p>
        </div>
        <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control" />
            </div>
        </div>
    </div>
</section>
<!-- ./Footer -->
<!--Fin Footer-->

