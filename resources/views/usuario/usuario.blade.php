<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/secion.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Document</title>
</head>
<body>
    <div class="modaleso">
        <div class="contenedores">

            <h1><b>Inicio de sesion</b></h1>
            
            <div class="contenidos">

            
                <form action="{{url('/personal')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <label class= for="">Usuario <i class="fas fa-user"></i></label>
                                <input type="text" class="form-control" required name="name" id="name">

                                <br>

                                <label for="">Contraseña <i class="fas fa-lock-alt"></i></label>
                                <input type="password" class="form-control" required name="" id="contrasenia">

                                <br>

                                <input type="checkbox" onclick="myFuction()" name="" id="contra">
                                <label for="contra">Ver contraseña</label>
                                
                                <br>
                                <br>

                                <input type="submit" value="Iniciar sesion" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>

                <div class="caja-modal">
                    <input type="checkbox" id="tol-modal">
                    <label for="tol-modal" class="btn btn-danger">Registrar</label>

                    <div class="paleso">
                            <div class="perdedores">
                                <h1><b>Registrarse</b></h1>
                                <label for="tol-modal" class="redit" ><i class="fas fa-times"></i></label>
                                <br>
                                <div class="contenidos">

                                
                                    <form action="{{url('/usuario')}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class= for="">Nombre completo</label>
                                                    <input type="text" class="form-control" required name="name" id="name">

                                                    <br>

                                                    <label for="">Correo</label>
                                                    <input type="email" class="form-control" required name="email" id="email">

                                                    <br>

                                                    <label for="">Contraseña</label>
                                                    <input type="password" class="form-control" required name="password" id="password">

                                                    <br>

                                                    <input type="checkbox" onclick="myFuctione()" name="" id="password">
                                                    <label for="porta">Ver contraseña</label>

                                                    <br>

                                                    <label for="">Usuario</label>
                                                    <input type="text" class="form-control" required name="Usuario" id="Usuario">

                                                    <br>

                                                    <input type="submit" value="Registrar" class="btn btn-danger">

                                                    <label for="tol-modal" class="btn btn-primary" >Iniciar sesion</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                </div>
                
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function myFuction(){
            var x = document.getElementById("password")
            if (x.type==="password") {
                x.type="text";
            } else {
                x.type="password";
            }
        }

        function myFuctione(){
            var x = document.getElementById("password")
            if (x.type==="password") {
                x.type="text";
            } else {
                x.type="password";
            }
        }

    </script>

</body>
</html>