import { camelCase } from "lodash";

$(document).ready(function() {

    const form = document.getElementById('form');
    const inputs = document.querySelectorAll('#form input');

    const expressions = {
        name: /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]{2,50}$/, // letras y espacios, pueden llevar acentos 
        username: /^[a-zA-Z0-9_]{4,16}$/, // permite generar de 4 a 16 caracteres permitiendo letras mayúsculas y minúsculas, dígitos y guiones bajos
        identificationNumber: /^[0-9]{9}[0-9A-Z]$/,
        email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9.]+$/,
        password: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()-+=_/[\]{}|':,.?])(?!.*\s).{8,20}$/,
    };
    const fields = {
        name: false,
        username: false,
        identificationNumber: false,
        email: false,
        password: false,
        password2: false
    }

    const validateForm = (e) => {
        switch (e.target.name) {
            case "name":
                validateField(expressions.name, e.target, 'name');
                break;
            case "username":
                validateField(expressions.username, e.target, 'username');
                break;
            case "identificationNumber":
                validateField(expressions.identificationNumber, e.target, 'identificationNumber');
                break;
            case "email":
                validateField(expressions.email, e.target, 'email');
                break;
            case "password":
                validateField(expressions.password, e.target, 'password');
                break;
            case "verifyPasword":
                validatePasswords();
        }
    }

    const validateField = (expression, inputs2, field) => {
        const group = document.querySelector(`#group__${field}`);
        const errorText = group.querySelector(`#group__${field} p`);

        if (expression.test(inputs2.value)) {
            group.classList.remove('active-mistake');
            errorText.classList.remove('active-mistake');
            fields[field] = true;
        } else {
            group.classList.add('active-mistake');
            errorText.classList.add('active-mistake');
            fields[field] = false;
        }
        document.addEventListener('click', (e) => {
            const target = e.target;
            if (!target.closest('.input-group') && !target.closest('.active-mistake')) {
                inputs.forEach((input) => {
                    input.parentNode.classList.remove('active-mistake');
                    input.parentNode.querySelector('p').classList.remove('active-mistake');
                });
            }
        });
    };


    function validatePasswords() {
        const password = document.querySelector("#group__password input");
        const confirmPassword = document.querySelector("#group__verifyPasword  input");

        // se remueve la clase active-mistake si ambos campos coinciden
        if (password.value === confirmPassword.value) {
            document.querySelector("#group__verifyPasword").classList.remove('active-mistake');
            document.querySelector('#group__verifyPasword p').classList.remove('active-mistake');
            fields['password2'] = true;
        } else {
            document.querySelector("#group__verifyPasword").classList.add('active-mistake');
            document.querySelector('#group__verifyPasword p').classList.add('active-mistake');
            fields['password2'] = false;
        }
    }


    inputs.forEach((input) => {
        input.addEventListener('keyup', validateForm);
        input.addEventListener('blur', validateForm);
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault
        if (fields.name == true && fields.username == true && fields.username == true && fields.email == true && fields.password == true && fields.password2 == true && fields.identificationNumber == true) {
            console.log("siga");
        } else if (fields.name == false && fields.username == false && fields.username == false && fields.email == false && fields.password == false && fields.password2 == false && fields.identificationNumber == false) {
            e.preventDefault();
            document.querySelector("#form").classList.add('active-alert');
            setTimeout(() => {
                document.querySelector("#form").classList.remove('active-alert');
            }, 1000);
        } else if (fields.name || false && fields.username || false && fields.username || false && fields.email || false && fields.password || false && fields.password2 || false && fields.identificationNumber || false) {
            e.preventDefault()
        }
    });

    /* Preloader  */
    $('.preloader').delay(200).fadeOut(700, function() {
        $(this).remove();
    });
    /* Active-menu */
    $("#toogle-menu").click(function(e) {
        e.preventDefault();
        $(".toogle_menu").toggleClass("active-toogle");
    });
    $("#toogle-menu").click(function(e) {
        e.preventDefault();
        $(".nav").toggleClass("active-menu");
        $("body").toggleClass("remove-scroll");
    });
});