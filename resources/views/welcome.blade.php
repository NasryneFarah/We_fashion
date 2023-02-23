<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CSS BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
         <!--bootstrap icon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!--Mon propre css-->
        <link rel="stylesheet" href="css/welcome.css">
        <title>We fashion</title>
    </head>
    <body>
        <!--Barre de navigation-->
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
              <a class="navbar-brand" href="#">WE FASHION</a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" >Soldes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #2a2a2a;">Homme</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #2a2a2a;">Femme</a>
                  </li>
                </ul>
              </div>
              <a href="{{route('login')}}" class="btn">Se Connecter</a>
            </div>
          </nav>
          <!--Fin barre de navigation-->

          <!--Galerie d'image-->
          <div class="container galerie_image">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100" style=" border: 1px solid rgba(0, 0, 0, 0.4);">
                <img src="images/femmes/Wxl-_19PE_juin18_3490.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a short card.</p>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center">
                      <a class="btn btn-outline-dark mt-auto" style="background-color: #ff8e3c;color:#0d0d0d;border:1px solid #ff8e3c" href="#">Voir produit</a>
                  </div>
              </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style=" border: 1px solid rgba(0, 0, 0, 0.4);">
                <img src="images/femmes/wxl-_Carpentie-011.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a short card.</p>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center">
                      <a class="btn btn-outline-dark mt-auto" style="background-color: #ff8e3c;color:#0d0d0d;border:1px solid #ff8e3c" href="#">Voir produit</a>
                  </div>
              </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style=" border: 1px solid rgba(0, 0, 0, 0.4);">
                <img src="images/femmes/wxl-_fideler_antic_blue5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a short card.</p>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center">
                      <a class="btn btn-outline-dark mt-auto" style="background-color: #ff8e3c;color:#0d0d0d;border:1px solid #ff8e3c" href="#">Voir produit</a>
                  </div>
              </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style=" border: 1px solid rgba(0, 0, 0, 0.4);">
                <img src="images/femmes/wxl-_New_Coleen-006.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a short card..</p>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center">
                      <a class="btn btn-outline-dark mt-auto" style="background-color: #ff8e3c;color:#0d0d0d;border:1px solid #ff8e3c" href="#">Voir produit</a>
                  </div>
              </div>
              </div>
            </div>
            <div class="col">
                <div class="card " style=" border: 1px solid rgba(0, 0, 0, 0.4);">
                  <img src="images/femmes/Wxl-_Port_Jackson-031.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <a href="#"><i class="fa-solid fa-tags"></i></a>
                      <small class="text-muted">  CFA</small>
                      <a href="#"> <i class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
           <!--Fin Galerie d'image-->

           <!--Pagination-->
           <div class="container-pag">
            <div class="pagin">
              <button class="btn1">Avant</button>
              <ul>
                <li class="link" value="1">1</li>
                <li class="link" value="2">2</li>
                <li class="link" value="31">3</li>
                <li class="link" value="4">4</li>
                <li class="link" value="5">5</li>
              </ul>
              <button class="btn2">Suivant</button>
            </div>
           </div>
           <!--<nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>-->
          <!--fin Pagination-->

          <!--Footer-->
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="bi bi-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="bi bi-instagram"></i></a></li>
					</ul>
				</div>
				<hr>
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

           <!--js BOOTSTRAP-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
