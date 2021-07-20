var select = document.getElementById("ships");
var options = ["Fireball", "MG-100 StarFortress", "Resistance Transport", "Resistance Transport Pod", "RZ-2 A-wing", "Scavenged YT-1300", "T-70 X-wing"];

for (var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement("option");
    el.textContent = opt;
    el.value = opt;
    select.appendChild(el);
};

function onChangeSelectShip() {
    var selectedShip = document.getElementById("ships");
    var shipIndex = selectedShip.options[selectedShip.selectedIndex].value;
    var classofdiv = document.getElementsByClassName('change');

    for(var i=0; i<classofdiv.length; i+=1){
        if(classofdiv[i].style.display == 'block'){
            classofdiv[i].style.display = 'none';
        }
    }
    document.getElementById(shipIndex).style.display = 'block';
}
fetch("data/pilots/resistance/fireball.json")
    .then(response => response.json())
    .then(data => {
        pilotss = data.pilots;
        var select = document.getElementById("fireball_select");

        for (var i = 0; i < pilotss.length; i++) {
            var opt = pilotss[i].name;
            var val = pilotss[i].cost;
            var el = document.createElement("option");
            el.textContent = opt;
            el.value = val;
            select.appendChild(el);
        };
    })

function onChangeSelectFireball() {
    var selectedFireball = document.getElementById("fireball_select");
    var fireballIndex = selectedFireball.options[selectedFireball.selectedIndex].textContent;
    var classofdiv = document.getElementsByClassName('fireball');

    for (var i = 0; i < classofdiv.length; i += 1) {
        if (classofdiv[i].style.display == 'block') {
            classofdiv[i].style.display = 'none';
        }
    }
    document.getElementById(fireballIndex).style.display = 'block';
}





