<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Css_Form.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
    
    <div class="row">
  <div class="col-md-4"><!--Linker kant--></div>
  <div class="col-md-4">
    <h1>Inschrijfformulier</h1>
        <form>
            <div class="form-group">
                <label for="title">Voornaam ouder 1</label>
                <input type="text" class="form-control" placeholder="Vul hier in" name="first_name_v"  value="">
                </div><div class="form-group">
                Achternaam ouder 1
                <input type="text" class="form-control" placeholder="Vul hier in" name="last_name_v"   value="">
                </div><div class="form-group">
                Voornaam ouder 2
                <input type="text" class="form-control" placeholder="Vul hier in" name="first_name_m"  value="">
                </div><div class="form-group">
                Achternaam ouder 2</td>
                <input type="text" class="form-control" placeholder="Vul hier in" name="last_name_m"   value="">
                </div><div class="form-group">
                Email 1
                <input type="text" class="form-control" placeholder="Vul hier in" name="email_1"       value="">
                </div><div class="form-group">
                Email 2
                <input type="text" class="form-control" placeholder="Vul hier in" name="email_2"       value="">
                </div><div class="form-group">
                Email kind
                <input type="text" class="form-control" placeholder="Vul hier in" name="email_k"       value="">
                </div><div class="form-group">
                Telefoon 1
                <input type="text" class="form-control" placeholder="Vul hier in" name="telefoon_1"  value="">
                </div><div class="form-group">
                Telefoon 2
                <input type="text" class="form-control" placeholder="Vul hier in" name="telefoon_2"  value="">
                </div><div class="form-group">
                Telefoon 3
                <input type="text" class="form-control" placeholder="Vul hier in" name="telefoon_k"  value="">
                </div><div class="form-group">
                Voornaam kind
                <input type="text" class="form-control" placeholder="Vul hier in" name="first_name_k"  value="">
                </div><div class="form-group">
                Achternaam kind
                <input type="text" class="form-control" placeholder="Vul hier in" name="last_name_k"   value="">
                </div><div class="form-group">
                Geboortedatum
                <input type="text" class="form-control" placeholder="Vul hier in" name="birth_date"    value="">
                </div><div class="form-group">
                School
                <input type="text" class="form-control" placeholder="Vul hier in" name="school"        value="">
                </div><div class="form-group">
                Vak(ken)
                <input type="text" class="form-control" placeholder="Vul hier in" name="vak"           value="">
                </div><div class="form-group">
                Dyslexie
                <input type="radio" name="dyslexie"     value="ja"> Ja
                <input type="radio" name="dyslexie"     value="nee"> Nee
                </div><div class="form-group">
                Extra opmerkingen</td>
                <textarea rows="5" class="form-control" placeholder="Vul hier in" cols="22" name="opmerking"></textarea>
                </div><div class="form-group">
                <input type="button" class="btn btn-primary" name="opslaan" value="Opslaan">
            </div>
    </form>
  </div>
  <div class="col-md-4"><!--Rechter kant--></div>  
  </div>    


<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
