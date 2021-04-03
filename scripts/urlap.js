let uzenetForm = null;
let uzenetFormSubmit = null;
let nevInput = null;
let emailInput = null;
let targyInput = null;
let uzenetTextArea = null;
let validationErrors = {
    nev: "",
    email: "",
    targy: "",
    uzenet: "",
};

document.addEventListener('DOMContentLoaded', function() {
    uzenetForm = document.forms['uzenet'];
    uzenetFormSubmit = document.querySelector('#submit');
    nevInput = document.querySelector('#nev');
    emailInput = document.querySelector('#email');
    targyInput = document.querySelector('#targy');
    uzenetTextArea = document.querySelector('#uzenet');

    uzenetForm.addEventListener('submit', function(event) {
        if (validationErrors.nev !== ''
        && validationErrors.email !== ''
        && validationErrors.targy !== ''
        && validationErrors.uzenet !== '') {
            event.preventDefault();
        }
    });

    nevInput.addEventListener('change', function() {
        let nev = nevInput.value;
        validationErrors.nev = '';

        if (nev === '') {
            validationErrors.nev = 'A név nem lehet üres!';
        }
        if (nev.length < 5) {
            validationErrors.nev = 'A név nem lehet 5 karakternél rövidebb!';
        }
        if (nev.length > 30) {
            validationErrors.nev = 'A név nem lehet 30 karakternél hosszabb!';
        }
        if (!nev.match(/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ]+$/)) {
            validationErrors.nev = 'A név csak betűket és szóközt tartalmazhat';
        }

        if (validationErrors.nev.length > 1) {
            document.querySelector('#hibasUzenet').innerHTML = validationErrors.nev;
            nevInput.classList.add('is-invalid');
            nevInput.classList.remove('is-valid');
        } else {
            nevInput.classList.remove('is-invalid');
            nevInput.classList.add('is-valid');
        }
        
        enableSubmit();
    });

    emailInput.addEventListener('change', function() {
        let email = emailInput.value;
        validationErrors.email = '';

        if (email === "") {
            validationErrors.email = 'Az email nem lehet üres!';
        }
        if (!email.match(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i)) {
            validationErrors.email = 'Hibás e-mail!';
        }

        if (validationErrors.email.length > 1) {
            document.querySelector('#hibasEmail').innerHTML = validationErrors.email;
            emailInput.classList.add('is-invalid');
            emailInput.classList.remove('is-valid');
        } else {
            emailInput.classList.remove('is-invalid');
            emailInput.classList.add('is-valid');
        }
        
        enableSubmit();
    });

    targyInput.addEventListener('change', function() {
        let targy = targyInput.value;
        validationErrors.targy = '';

        if (targy === "") {
            validationErrors.targy = 'A tárgy nem lehet üres!';
        }
        if (targy.length < 5) {
            validationErrors.targy = 'A tárgy nem lehet 5 karakternél rövidebb!';
        }
        if (targy.length > 30) {
            validationErrors.targy = 'A tárgy nem lehet 30 karakternél hosszabb!';
        }

        if (validationErrors.targy.length > 1) {
            document.querySelector('#hibasTargy').innerHTML = validationErrors.targy;
            targyInput.classList.add('is-invalid');
            targyInput.classList.remove('is-valid');
        } else {
            targyInput.classList.remove('is-invalid');
            targyInput.classList.add('is-valid');
        }
        
        enableSubmit();
    });

    uzenetTextArea.addEventListener('change', function() {
        let uzenet = uzenetTextArea.value;
        validationErrors.uzenet = '';

        if (uzenet === '') {
            validationErrors.uzenet = 'Az üzenet nem lehet üres!';
        }

        if (validationErrors.uzenet.length > 1) {
            document.querySelector('#hibasUzenet').innerHTML = validationErrors.uzenet;
            uzenetTextArea.classList.add('is-invalid');
            uzenetTextArea.classList.remove('is-valid');
        } else {
            uzenetTextArea.classList.remove('is-invalid');
            uzenetTextArea.classList.add('is-valid');
        }

        enableSubmit();
    });
});


function enableSubmit() {
    if (validationErrors.nev === ''
        && validationErrors.email === ''
        && validationErrors.targy === ''
        && validationErrors.uzenet === ''
    ) {
        uzenetFormSubmit.disabled = false;
    } else {
        uzenetFormSubmit.disabled = true;
    }
}
