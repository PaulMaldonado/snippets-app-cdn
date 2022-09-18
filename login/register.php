<?php include "../includes/Headers.php"; ?>

    <div class="container center">
        <div class="row">
            <div class="col s12 md12 l12">
                <div class="card z-depth-2">
                    <div class="card-content">
                        <span class="card-title">
                            Crear cuenta
                        </span>
                        <form id="formRegister" autocomplete="off" @submit.prevent="register" enctype="multipart/form-data">
                            <input type="text" name="username" placeholder="Nombre de usuario" required>

                            <input type="email" v-model="email" name="email" id="email" placeholder="Correo electrónico" @blur="validateEmail" required>

                            <input type="password" v-model="password" name="password" id="password" placeholder="Contraseña" required>

                            <input type="password" v-model="confirm_password" placeholder="Confirmar contraseña" required>

                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Foto de perfil</span>
                                    <input type="file" name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>

                            <input type="submit" value="Crear cuenta" :class="button">
                        </form>
                    </div>

                    <div class="card-action">
                        <a href="index.php">Iniciar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "../includes/FooterLogin.php";?>