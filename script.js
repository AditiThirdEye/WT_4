let url = "http://localhost/A4/data.php";
let items = null;

$('document').ready(function() {
    Options();
});

function showResult(ind) {
    let he = document.querySelector('.blank');
    he.style.display = "none";
    let eh = document.querySelector('.content');
    eh.style.display = "block";

    let base = url + "?req=menuname&id=" + ind;

    $.get(base, function(data, success) {

        if (data != null) {

            document.querySelector('#shortname').textContent = data.short_name;
            document.querySelector('#name').textContent = data.name;
            document.querySelector('#desc').textContent = data.description;
            document.querySelector('#sportion').textContent = data.small_portion_name;
            document.querySelector('#lportion').textContent = data.large_portion_name;
            document.querySelector('#psmall').textContent = data.price_small;
            document.querySelector('#plarge').textContent = data.price_large;
        } else {
            he.style.display = "block";
            eh.style.display = "none";
        }
    });
}

function Options() {
    let base = url + "?req=menu_list";
    $.get(base, function(data, success) {
        var ele = document.getElementById('items');
        for (const key in data) {
            var tag = document.createElement("a");
            tag.id = data[key].id;
            tag.innerText = data[key].id;
            tag.className = "dropdown-item";
            tag.setAttribute("onclick", "showResult(" + (data[key].id) + ")");
            ele.appendChild(tag);
        }
    });
}