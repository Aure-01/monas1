<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Almohadas de monas chinas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <style>
        body {
            display: flex;
            justify-content: center;
            background-color: blueviolet;
            font-family: "Times New Roman", Times, serif;
        }

        .loginContainer {
            width: 40vw;
            height: 30vh;
            margin: 25vh 0px 0px 0px;
        }

        .letrero {
            width: auto;
            height: 10vh;
            margin: 0px 0px 0px 0px;
            justify-content: center;
            text-align: center;
            color: aliceblue;
        }
    </style>
    <div class="loginContainer">
        <div class="letrero">
            <h1>Monas Chinas.inc</h1>
        </div> 
        <form method="post" action="<?php echo base_url('login')?>" autocomplete="off">
            <div class="mb-3">
                <label for="user" style="color:white" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
            </div>
            <div class="mb-3">
                <label for="password" style="color:white" class="form-label">Clave</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Clave">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </div>>
</body>
</html>