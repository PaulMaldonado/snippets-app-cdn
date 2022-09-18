<?php include "../includes/Headers.php" ?>

    <div class="container center">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Editar post</span>

                        <form id="editPost" autocomplete="off" @submit.prevent="editPost"> 
                            <input type="text" name="title" placeholder="Título" required :value="formEdit.title">

                            <textarea name="code" class="materialize-textarea" cols="30" rows="10" placeholder="Escribe tu código" :value="formEdit.code"></textarea>

                            <textarea name="description" class="materialize-textarea" cols="30" rows="10" placeholder="Descripción" :value="formEdit.description"></textarea>

                            <select name="category" class="browser-default" required>
                                <option :value="formEdit.category" v-text="formEdit.category"></option>
                                <option value="php">PHP</option>
                                <option value="css">CSS</option>
                                <option value="html5">HTML5</option>
                                <option value="mysql">MYSQL</option>
                                <option value="vuejs">VUEJS</option>
                            </select>

                            <input type="hidden" name="id" :value="formEdit.id">

                            <input type="submit" value="Guardar" class="btn blue">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

<?php include "../includes/Footer.php" ?>