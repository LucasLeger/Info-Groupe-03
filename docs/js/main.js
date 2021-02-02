


function addInput() {
    
    var original = document.getElementById('div');
    
    var newInput = document.createElement('input');
    newInput.class = "boite";
    newInput.type = "password";
    newInput.name = "code"+document.getElementById('div').children.length;
    newInput.placeholder = "Entrez un code";
    newInput.required = "true";

    original.appendChild(newInput);
}

