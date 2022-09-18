const app = new Vue({
    el: "#app",

    data() {
        return {
            menu: true,
            result: '',
            posts: [],
            search: '',
            postId: '',
            formEdit: {},
            currentUser: '',
        }
    },

    computed: {
        searchFilter() {
            return this.posts.filter((search) => {
                return search.title.toUpperCase().match(this.search.toUpperCase()) 
                || search.description.toUpperCase().match(this.search.toUpperCase)
            })
        }
    },

    created() {
        this.showPosts()

        this.getId()
        this.getCurrentUser()
    },

    methods: {
        alta() {
            const form = document.getElementById('altaPost');

            axios.post('../api/crud/altaPost.php', new FormData(form))
                .then(response => {
                    this.result = response.data

                    if(response.data == 'success') {
                        swal({
                            title: 'Buen trabajo',
                            text: 'Post guardado correctamente',
                            icon: 'success',
                            button: 'ok'
                        })

                        form.reset()
                    } else {
                        swal('El post no se pudo guardar correctamente')
                    }
                })
        },

        showPosts() {
            axios.get('http://localhost/snippets/api/crud/getPost.php')
                .then(response => {
                    this.posts = response.data;
                    console.log(response)
                })
                .catch(error => {
                    console.error(error)
                })
        },

        getId() {
            const url = window.location.href.split('?')

            if(url.length === 2) {
                let vars = url[1].split('&')
                let getVars = {};
                let temporal = '';

                vars.forEach(function(v) {
                    temporal = v.split('=');
                    
                    if(temporal.length === 2) {
                        getVars[temporal[0]] = temporal[1];
                    }
                });

                this.postId = getVars;
                console.log(this.postId.id);

                axios.get('http://localhost/snippets/api/crud/getPostId.php?id=' + this.postId.id)
                    .then(response => {
                        this.formEdit = response.data;
                    })
                    .catch(error => {
                        console.error(error)
                    })
            }
        },

        editPost() {
            const form = document.getElementById('editPost');

            axios.post('../api/crud/editPost.php', new FormData(form))
                .then(response => {
                    this.result = response.data;

                    if(response.data === 'success') {
                        location.href = 'main/index.php';
                    } else {
                        swal('El post no se pudo editar');
                    }
                })
        },

        removePost(id) {
            axios.delete('http://localhost/snippets/api/crud/deletePost.php?id=' + id)
                .then(response => {
                    if(response.data === 'success') {
                        alert('post eliminado');

                        this.getCategory()
                    } else {
                        alert('No se pudo eliminar el post');
                    }
                })
        },

        getCurrentUser() {
            axios.get('http://localhost/snippets/api/crud/getUser.php')
                .then(response => {
                    this.currentUser = response.data;
                })
        },

        getCategory() {
            const url = window.location.href.split('?')

            if(url.length === 2) {
                let vars = url[1].split('&')
                let getVars = {};
                let temporal = '';

                vars.forEach(function(v) {
                    temporal = v.split('=');
                    
                    if(temporal.length === 2) {
                        getVars[temporal[0]] = temporal[1];
                    }
                });

                this.postId = getVars;
                console.log(this.postId.id);

                axios.get('http://localhost/snippets/api/crud/getCategories.php?categories=' + this.postId.categories)
                    .then(response => {
                        this.posts = response.data;
                    })
                    .catch(error => {
                        console.error(error)
                    })
            } else {
                this.showPosts()
            }
        }
    }
});