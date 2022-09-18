<?php include "../includes/Headers.php" ?>

<nav>
    <div class="nav-wrapper indigo lighten-5">
      <form>
        <div class="input-field">
          <input id="search" type="search" required v-model="search">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>

    <div class="container">
        <div class="row" v-for="post in searchFilter" :key="post.id">
            <div class="col s12 md12 lg12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><img :src="post.image" :alt="post.image" width="50" class="circle">{{ post.user }}</span>
                        <span class="card-title">{{ post.title }}</span>

                        <pre :id="'copyCode' + post.id">
                            {{ post.code }}
                        </pre>

                        <p>
                            {{ post.descrition }}
                        </p>
                    </div>

                    <div class="card-action">
                        <a v-if="post.user == currentUser" :href="'/snippets/main/edit.php?id=' + post.id">Editar</a>
                        <a v-if="post.user == currentUser" href="" @click="removePost(post.id)">Eliminar</a>
                        <a href="" class="copy" :data-clipboard-target="'#copyCode' + post.id">Copiar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "../includes/Footer.php" ?>