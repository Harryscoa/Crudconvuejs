<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstraps/css/bootstrap.min.css">
    <!-- FontAwesom CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css" crossorigin="anonymous">
    
    <!--<script src="https://kit.fontawesome.com/fdb7d0e0a8.js" crossorigin="anonymous"></script>-->

    <!-- Sweet Alert 2 CSS -->
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <!-- CSS Propio-->
    <link rel="stylesheet" href="main.css">
    <title>Crud de Harrys</title>
</head>
<body>
    <header>
    <h3 class="text-center text-white">Crud con Vue.js <span class="badge badge-primary">Harrys</span></h3>
    </header>
    <div id=appMoviles>
        <div class="container">
            <div class="row">
                <div class="col">
                    <button @click="btnAlta" class="btn btn-primary" title="Nuevo"><i class="fas fa-plus-circle"></i></button>
                </div>
                <div class="col tex-right">
                    <h5>Stock Total: <span class="badge badge-warning">{{totalStock}}</span></h5> 
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="bg-primary text-light">
                                <th>ID</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Stock</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(movil,indice) of moviles">
                                <td>{{movil.id}}</td>
                                <td>{{movil.marca}}</td>
                                <td>{{movil.modelo}}</td>
                                <td>
                                    <div>
                                        <input type="number" v-model.number="movil.stock" class="form-control text-right" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-secondary" title="Editar" @click="btnEditar(movil.id, movil.marca, movil.modelo, movil.stock)"><i class="fas fa-pencil-alt"></i></button>
                                        <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(movil.id)"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr class="my-4">          
                      <a class="btn btn-info btn-lg offset-md-8" href="vistas/pag_inicio.php" role="button">Inicio de  Sección</a>
                      <a class="btn btn-danger btn-lg" href="bd/logout.php" role="button">Cerrar Sesión</a>
    </div>
    <!-- jQuery, Popper.js, Bootstrap.js-->
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstraps/js/popper.min.js"></script>
    <script src="bootstraps/js/bootstrap.min.js"></script>
    <!-- Vue.js-->
    <script src="vue/vue.js"></script>
    <!-- Axios.js-->
    <script src="axios/axios.js"></script>
    <!-- Sweet Alert 2-->
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- Sweet Propio-->
    <script src="main.js"></script>

</body>
</html>

