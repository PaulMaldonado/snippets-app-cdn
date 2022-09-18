const app = new Vue({
    el: '#app',

    data() {
        return {
            password: '',
            confirm_password: '',
            email: '',
            button: 'btn blue',
            result: '',
            menu: false,
        }
    },

    methods: {
        register() {
            if(this.password === this.confirm_password) {
                const form = document.getElementById('formRegister');

                axios.post('../api/loginRegister/register.php', new FormData(form))
                    .then(res => {
                        this.result = res.data

                        this.redirect()
                    })
            } else {
                Swal('Las contraseñas no coinciden');
            }
        },

        redirect() {
            if(this.result == 'success') {
                location.href = 'index.php';
            } else {
                Swal('No se puedo registrar, intentelo de nuevo');
            }
        },

        validateEmail() {
            if(this.validEmail(email)) {
                const formData = new FormData();

                formData.append('email', this.email);

                axios.post('../api/loginRegister/validate-email.php', formData)
                    .then(response => {
                        this.result = response.data;

                        if(response.data === 'success') {
                            this.button = 'btn blue';
                        } else {
                            swal('El correo elc¡ectrónico ya existe...');
                        }
                    })
            } else {
                swal('Escribe el correo electrónico de forma correcta');
            }
        },
        
        validEmail(email) {
            let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        },

        login() {
            const formLogin = document.getElementById('form');

            axios.post('../api/loginRegister/login.php', new FormData(formLogin))
                .then(response => {
                    this.result = response.data;
                    
                    if(response.data == 'success') {
                        location.href = '../main';
                    } else {
                        location.href = 'login/index.php';
                    }
                })
        }
    }
});