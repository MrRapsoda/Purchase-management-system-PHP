<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery.min"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Bienvenido | Educando S.A</title>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <div class="frmHead">
                Educando S.A
            </div>
            <form id="form-login" name="form-login" action="php/controllers/cSignUp.php" method="post">
                <p>Nombre de usuario</p>

                <div class="txtContainer">
                    <input type="text" name="txtUsername" id="id-txtUsername" class="inp">
                    <i style="margin-left: 5px;" class="material-icons">account_box</i>
                </div>
                <p>Contraseña</p>
                <div class="txtContainer">
                    <input type="password" name="txtPass" id="id-txtPass" class="inp">
                    <i style="margin-left: 5px;" class="material-icons">lock</i>
                </div>
                <!--<div class="btLog" onClick="javascript:this.form.submit();"><span>Ingresar</span></div>-->
                <input id="bt-login" name="bt-login" type="submit" value="Ingresar">
            </form>
          <!--   <p style="color: rgb(62, 93, 149); font-size: 0.8em;">He olvidado mi contraseña</p> -->

        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>