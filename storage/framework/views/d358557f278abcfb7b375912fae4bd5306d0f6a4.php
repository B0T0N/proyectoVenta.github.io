<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/style2.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Marvel</title>
</head>
<body>

    <?php if(Session::has('mensaje')): ?>
    <?php echo e(Session::get('mensaje')); ?>

    <?php endif; ?>

    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4">
                <h1 class="fs-4">
                    <span class="bg-white text-dark rounded shadow px-2 me-2"><i class="fas fa-user"></i></span><span class="text-white px-1">Usuario</span>
                </h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fas fa-stream"></i></button>
            </div>

            <ul class="list-unstyled px-2">
                <li class="active px-3"><a href="" class="text-decoration-none px-3 py-2 d-block"><i class="fab fa-product-hunt"></i>Mis Productos</a></li>
            </ul>

            <ul class="list-unstyled px-2">
                <li class="px-3"><a href="" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-universal-access"></i>Trueque</a></li>
            </ul>

        </div>

        <div class="content px-2">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $__env->make('personal.navar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <br>

            <div class="container pl-2">
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

                                
                                    <form action="<?php echo e(url('/personal')); ?>" method="POST" enctype="multipart/form-data" >
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

                                                    <label for="">Categoria</label>
                                                    <select name="id_categoria" id="" class="form-control">
                                                        <option value="1">Sin name</option>
                                                        <option value="">Con name</option>
                                                        <option value="">Medio name</option>
                                                    </select>

                                                    <input type="hidden" name="id_user" value="1">

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

                    <div class="barra">
                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre Del Producto <i class="far fa-chevron-double-down"></i></th>
                                <th>Precio <i class="fas fa-usd-circle"></i></th>
                                <th>Cantidad <i class="fas fa-archive"></i></th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                            <tbody class="barra">
                                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <img class="photo"  src="<?php echo e(asset('storage').'/'.$producto->imagen); ?>" alt="">
                                    </td>
                                    <td><?php echo e($producto-> producto); ?></td>
                                    <td><?php echo e($producto-> precio); ?></td>
                                    <td><?php echo e($producto-> cantidad); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('/personal/'.$producto->id.'/edit')); ?>" class="btn btn-primary botones">
                                            Editar  
                                        </a>
                                        <form class="botones" action="<?php echo e(url('/personal/'.$producto->id )); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo e(method_field('DELETE')); ?>

                                            <input type="submit" onclick="return confirm('¿Estas seguro de borrarlo?')" class="btn btn-danger botones" value="Borrar">
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    
    
</body>
</html><?php /**PATH C:\laragon\www\proyectoVenta\resources\views/personal/productoAdmin.blade.php ENDPATH**/ ?>