

<!doctype html>
<html lang="cz">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valleyfair</title>
    <!-- Bootstarp-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font awesome-->
    <script src="https://kit.fontawesome.com/5e9048c062.js" crossorigin="anonymous"></script>
    <!--CSS link-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
</head>
<body>
<!-- Header  (from bootstrap page)-->
<?php include("app/include/header.php"); ?>
<!-- Header END-->
<div class="container">
<h2>Kontaktujte nás</h2>
<form id="mailForm">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
        <input type="email" id="email" name="email" class="form-control"  placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Jméno</label>
        <input type="text" id="name" name="name" class="form-control"  placeholder="Jan Novak">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Telefonní číslo</label>
        <input type="phone" id="phone" typeof="phone" class="form-control"  placeholder="+420111222333">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Vaši zpráva</label>
        <textarea name="message" id="message" class="form-control" rows="3"></textarea>
    </div>
    <div class="row justify-content-between">
        <div class="col-4">
            <button  type="button" id="sendMail" class="btn btn-secondary" name="button-log">Odeslat</button>
        </div>
    </div>
</form>
    <div id="errorMess"></div>
</div>
<!--FOOTER START-->
<?php //include("app/include/footer.php"); ?>
<!--FOOTER END-->

<!--jquery, AJAX-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!--fungovani tlacitka poslat-->
<script src="assets/js/formMail.js"></script>
<!-- Bootstarp-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>