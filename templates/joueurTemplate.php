<!-- <link href="css/cover.css" rel="stylesheet"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>

      <div class="navbar-wrapper">
        <div class="container">

          <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">

                </a> -->
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#">Accueil</a></li>
                  <li><a href="index.php?controller=joueur&action=listeDesParties">Parties</a></li>
                  <li><a href="index.php?action=jouerPartie">Scores</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">6 qui prend <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li class="dropdown-header">Nav header</li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                  <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li class="dropdown-header">Nav header</li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li> -->
                </ul>
                <ul class="nav navbar-nav navbar-left">
                  <li class="photoProfil"><a href="index.php?action=monJoueur"></a></li>
                </ul>
              </div>
            </div>
          </nav>

        </div>
      </div>


      <!-- Carousel
      ================================================== -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="css/image/fondElegant.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Création de partie.</h1>
                <p>Vous pouvez créer vos parties en leur attribuant un nom. Lorsque cette partie est créée, vous pouvez inviter des amis ou choisir de laisser n'importe qui la rejoindre, puis la démarrer.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Créer une partie</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide" src="css/image/eau.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Rejoindre une partie.</h1>
                <p>Vous pouvez rejoindre une partie en répondant à une invitation ou rejoindre une partie publique !</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Rejoindre une partie</a></p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Voir la liste des invitations</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="third-slide" src="css/image/terre.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Découvrir et communiquer.</h1>
                <p>Vous pouvez consulter la fiche publique d'un autre joueur. Vous pouvez également chatter en temps réel avec eux ! ;-D</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Consulter les fiches publiques des autres joueurs</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><!-- /.carousel -->


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <a href="#"><img class="img-circle" src="css/image/dark_vador.png" alt="Generic placeholder image" width="140" height="140"></a>
            <h2>Modifiez votre avatar</h2>
            <p>Vous pouvez choisir votre héros préféré, choisir une citation ainsi que la couleur de votre sabre laser !</p>
            <p><a class="btn btn-default" href="#" role="button">Modifier mon avatar &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <a href="#"><img class="img-circle" src="css/image/quiprend.png" alt="Generic placeholder image" width="140" height="140"></a>
            <h2>Règles du jeu</h2>
            <p>Apprenez à jouer en consultant l'explication des règles ;-)</p>
            <p><a class="btn btn-default" href="#" role="button">Apprendre à jouer &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <a href="#"><img class="img-circle" src="css/image/scores.jpg" alt="Generic placeholder image" width="140" height="140"></a>
            <h2>Classement</h2>
            <p>Consultez votre score et votre classement ainsi que celui des autres joueurs. Que la force soit avec toi !</p>
            <p><a class="btn btn-default" href="#" role="button">Voir le tableau des scores &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <!-- FOOTER -->
        <footer>
          <p class="pull-right"><a href="#">Back to top</a></p>
          <p>&copy; 2017 Paul & Corentin &middot; <a href="#">6 qui prend</a> &middot; <a href="#">Remerciements</a></p>
        </footer>

      </div><!-- /.container -->

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/jquery-3.1.1.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script src="assets/jquery-3.1.1.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
