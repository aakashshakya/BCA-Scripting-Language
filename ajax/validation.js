function validateForm() {

    var params = {
        'product_name':document.getElementById('product-name').value,
        'price': document.getElementById('price').value,
        'category': document.getElementById('category').value,
        'description': document.getElementById('description').value,
    };

    var ajax = new XMLHttpRequest();
    ajax.open("POST", 'http://localhost/bca-Scripting-Language/ajax/savedata.php', true);
    ajax.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("message").innerHTML = this.responseText;
        }
    };

    ajax.send(JSON.stringify(params));
}

function getProducts() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            var table = document.getElementById('table');
            for(i = 0; i < data.length; i++) {
                table.innerHTML += '<tr><td>' + data[i].name + '</td>' + '<td>' + data[i].price + '</td>'+ '<td>' + data[i].description + '</td></tr>';
            }
        }
    };
    xhttp.open("GET", "http://localhost/bca-Scripting-Language/ajax/savedata.php", true);
    xhttp.send();
}