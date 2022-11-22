<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/edit2.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Document</title>
</head>
<body>
<div class="modaleso">
                    <div class="contenedores">
                        <header><b>Editar Producto</b></header>
                        <br>
                        <div class="contenidos">

                        
                            <form action="{{ url('/personal/'.$producto->id ) }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                {{ method_field('PATCH') }}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class= for="">Nombre del producto</label>
                                            <input type="text" class="form-control" value="{{$producto->producto}}" name="producto" id="producto">

                                            <br>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Precio</label>
                                                    <input type="number" class="form-control" value="{{$producto->precio}}" name="precio" id="precio">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Cantidad</label>
                                                    <input type="number" class="form-control" value="{{$producto->cantidad}}" name="cantidad" id="cantidad">
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">

                                                <div class="col-md-6">
                                                <label for="">Imagen</label>
                                                <br>
                                                <img class="photo"  src="{{ asset('storage').'/'.$producto->imagen }}" alt="">

                                                </div>

                                                <div class="col-md-6">
                                                <label for="">Cambiar Imagen</label>
                                                <input type="file" class="form-control" name="imagen" id="imagen">

                                                </div>
                                            </div>

                                            <br>

                                            

                                            <label for="">Categoria</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Sin name</option>
                                                <option value="">Con name</option>
                                                <option value="">Medio name</option>
                                            </select>

                                            <br>

                                            <input type="submit" value="Guardar" class="btn btn-primary saco">
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <a href="{{url('/personal')}}" class="btn btn-danger cancelacion">Cancelar</a>
                            
                        </div>
                    </div>
                </div>
</body>
</html>