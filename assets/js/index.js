var prod = document.getElementsByClassName("produtos");
var quant = document.getElementsByClassName("quantidade");
var valor = document.getElementsByClassName("valor");
var total = document.getElementById("total");

function textToNumber (book) {
    return parseFloat(book);
}  

function run () {
    for ( var x = 0; x < 3; x++) {
        var prodValue = textToNumber(prod[x].innerHTML);
        var quantValue = textToNumber(quant[x].value);
        var valorValue = prodValue * quantValue;
        valor[x].innerHTML = valorValue + " MT";
    }
    var item1 = textToNumber(valor[0].innerHTML);
    var item2 = textToNumber(valor[1].innerHTML);
    var item3 = textToNumber(valor[2].innerHTML);
    total.innerHTML = item1 + item2 + item3 + " MT";  
}
