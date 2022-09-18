<?php 
session_start();

if(isset($_SESSION['user'])) {
    header("location: ../main");
}

include "../includes/Headers.php"; 
?>

    <div class="container center">
        <div class="row">
            <div class="col s12 md12 l12">
                <div class="card z-depth-2">
                    <div class="card-content">
                        <span class="card-title">
                            Iniciar sesión
                        </span>
                        <form id="form" autocomplete="off" @submit.prevent="login">
                            <input type="email" name="email" id="email" placeholder="Correo electrónico" required>

                            <input type="password" name="password" id="password" placeholder="Contraseña" required>

                            <input type="submit" value="Iniciar sesión" class="btn blue">
                        </form>
                    </div>

                    <div class="card-action">
                        <a href="register.php">Registrate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "../includes/FooterLogin.php";?>