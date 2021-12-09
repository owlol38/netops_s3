let myForm = document.getElementById('myform');
myForm.addEventListener('keyup', function (e) {
    let pseudo = document.getElementById('pseudo');
    let password = document.getElementById('password');
    let myRegex = /^[a-zA-Z0-9àéè]+$/

    if (pseudo.value.trim() == "") {
        let myError= document.getElementById('error');
        myError.innerHTML ="Le champs pseudo est vide !"
        myError.style.color = 'red';
        myinput1.style.backgroundColor = "red";
        e.preventDefault();
    }else if (myRegex.test(pseudo.value) == false) {
        let myError= document.getElementById('error');
        myError.innerHTML ="Le champs pseudo ne peut comporter que des lettres ou  des chiffres!!"
        myError.style.color = 'red';
        pseudo.style.backgroundColor = "red";
        e.preventDefault();
    }else if (password.value.trim() == "") {
        let myError= document.getElementById('error');
        myError.innerHTML ="Le champs password est vide !"
        myError.style.color = 'red';
        pseudo.style.backgroundColor = "green";
        password.style.backgroundColor = "red";
        e.preventDefault();
    }
}); 