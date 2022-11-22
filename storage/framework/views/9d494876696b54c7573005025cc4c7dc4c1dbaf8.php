<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Marvel</title>
</head>
<body>

    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4">
                <h1 class="fs-4">
                    <span class="bg-white text-dark rounded shadow px-2 me-2"><i class="fab fa-medium-m"></i></span><span class="text-white px-4">Marvel</span>
                </h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fas fa-stream"></i></button>
            </div>

            <ul class="list-unstyled px-2">
                <li class="active px-3"><a href="" class="text-decoration-none px-3 py-2 d-block"><i class="fab fa-product-hunt"></i>Almacen</a></li>
            </ul>

            <ul class="list-unstyled px-2">
                <li class="px-3"><a href="" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-universal-access"></i>Ventas</a></li>
            </ul>

        </div>

        <div class="content">
            
        </div>

        

        <div class="container px-5">
            <br>

            <div class="table_header">
                <h2>Productos</h2>

                <input type="checkbox" id="ver-modal">
                <label for="ver-modal" class="nuevo">Crear Nuevo</label>

                <div class="modaleso">
                    <div class="contenedores">
                        <header><b>Nuevo Producto</b></header>
                        <label for="ver-modal" class="redit" ><i class="fas fa-times"></i></label>
                        <br>
                        <div class="contenidos">

                            <form action="<?php echo e(route('productos.store')); ?>" method="POST" enctype="multipart/form-data" >
                                <?php echo csrf_field(); ?>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class= for="">Nombre del producto</label>
                                            <input type="text" class="form-control" name="producto" id="producto">

                                            <br>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Precio</label>
                                                    <input type="number" class="form-control" name="precio" id="precio">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Cantidad</label>
                                                    <input type="number" class="form-control" name="cantidad" id="cantidad">
                                                </div>
                                            </div>

                                            <br>

                                            <label for="">Imagen</label>
                                            <input type="file" class="form-control" name="imagen" id="imagen">

                                            <br>

                                            <input type="submit" value="Guardar" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>

                <select name="" id="" class="categoria">
                    <option value="">Categoria</option>
                    <option value="">tipo 1</option>
                    <option value="">tipo 2</option>
                    <option value="">tipo 3</option>
                </select>
                <div class="input_search">
                    <input type="search" placeholder="Buscar" class="buscar" name="" id="">
                    <i class="fas fa-search"></i>
                </div>
            </div>

            <br>

            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Nombre Del Producto <i class="far fa-chevron-double-down"></i></th>
                        <th>Precio <i class="fas fa-usd-circle"></i></th>
                        <th>Cantidad <i class="fas fa-archive"></i></th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sandalia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($sandalia-> producto); ?></td>
                        <td><?php echo e($sandalia-> precio); ?></td>
                        <td><?php echo e($sandalia-> cantidad); ?></td>
                        <td>
                            <i class="fas fa-edit" id="icon"></i>
                            <i class="fas fa-trash-alt" id="icon"></i>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li>no hay productos en tu lista</li>

                    <?php endif; ?> -->
                </tbody>
            </table>
        </div>
    </div>

    
    
</body>
</html><?php /**PATH C:\laragon\www\proyectoVenta\resources\views/producto/productoAdmin.blade.php ENDPATH**/ ?>