<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>title</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</head>


<body>
    <div class="col-md-8" id="main-content">
        <div>
        <h1>{{ companyName }}</h1>
        <h3>{{ companyPhrase }}</h3>
        <p class="left">At {{companyName }} we create {{productAdjective}}<br>
        {{productName}} made of {{productMaterial}}<br><br>
        Find out more on {{mail}}</p>
    </div>
    
    <div class="container"></div>
    <div class="card" style="width: 20rem;">
  <img class="card-img-top" id="img2" src="{{ photo }}" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">{{productName}}</h4>
    <p class="card-text">Material: {{productMaterial}}<br>color: {{color}} </p>
    <h4 class="card-title">{{price}} $ only !</h4>
    <a href="#" class="btn btn-primary">Take my money bitch !</a>
  </div>
</div>
</div>
</div>

    <div class="col-md-4" id="contact">
        <img id="imgcat" src="{{ photo2 }}"><br><br>
        <div id="user"><h3>{{userName}}</h3></div><br>
        <div id="job"><h3>{{job}}</h3></div><br>
        <div id="contact">
            <h3>Contact Info</h3>
            <p>{{mail}}</p>
            <p>{{phone}}</p>
            <p>{{adress}}</p>
            <p>{{cp}} {{ville}}</p>
        </div>
   

       

    </div>



    <script src="js/index.js"></script>
</body>

</html>