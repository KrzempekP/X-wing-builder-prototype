function generate_missile(id) {
    fetch("data/upgrades/missile.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_astromech(id) {
    fetch("data/upgrades/astromech.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_cannon(id) {
    fetch("data/upgrades/cannon.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_cargo(id) {
    fetch("data/upgrades/cargo.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_configuration(id) {
    fetch("data/upgrades/configuration.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_crew(id) {
    fetch("data/upgrades/crew.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_device(id) {
    fetch("data/upgrades/device.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_force_power(id) {
    fetch("data/upgrades/force-power.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_gunner(id) {
    fetch("data/upgrades/gunner.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_illicit(id) {
    fetch("data/upgrades/illicit.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_modification(id) {
    fetch("data/upgrades/modification.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_sensor(id) {
    fetch("data/upgrades/sensor.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_tactical_relay(id) {
    fetch("data/upgrades/tactical-relay.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_talent(id) {
    fetch("data/upgrades/talent.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_tech(id) {
    fetch("data/upgrades/tech.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_title(id) {
    fetch("data/upgrades/title.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_torpedo(id) {
    fetch("data/upgrades/torpedo.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}
function generate_turret(id) {
    fetch("data/upgrades/turret.json")
        .then(response => response.json())
        .then(data => {
            items = data;
            var select = document.getElementById(id);

            for (var i = 0; i < items.length; i++) {
                var opt = items[i].name;
                var val = items[i].cost.value;
                var el = document.createElement("option");
                el.textContent = opt;
                el.value = val;
                select.appendChild(el);
            };
        })
}


