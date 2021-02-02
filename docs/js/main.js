


function addInput() {
    
    var original = document.getElementById('div');
    
    var newInput = document.createElement('input');
    newInput.id = "boite";
    newInput.type = "password";
    newInput.name = "code";
    newInput.placeholder = "Entrez un code";
    newInput.required = "true";

    original.appendChild(newInput);
}

