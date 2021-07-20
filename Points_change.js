function ChangePointsOnClick(){
    var pilot = document.getElementById("fireball_select");
    var pilottext = pilot.options[pilot.selectedIndex].text;
    var pilotval = pilot.value;
    var punkty = Number(0)
    var allsellected = document.getElementsByClassName("upg");
    var text = "";
    text = text.concat(pilottext)
    for (var i = 0; i < allsellected.length; i++){
        var upg = allsellected[i].value;
        var upgtext = allsellected[i].options[allsellected[i].selectedIndex].text
        punkty = +punkty + +upg;
        text = text.concat(" ")
        text = text.concat(upgtext)
    }
    punkty = +punkty + +pilotval;
    document.getElementById("points").innerHTML = punkty;
    document.getElementById("points2").value = punkty;
    document.getElementById("text2").value = text;
}

