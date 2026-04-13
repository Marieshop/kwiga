const presbyteries = ['Gisenyi','Kigali','Gitarama','Rubengera','Kirinda','Remera','Zinga'];

const presSelect = document.getElementById("pres");

presbyteries.forEach(function(presbytery) {
    let option = document.createElement("option");
    option.value = presbytery;
    option.textContent = presbytery;
    presSelect.appendChild(option);
});


const genders = ['Gabo','Gore'];

const genSelect = document.getElementById("gen");

genders.forEach(function(gender) {
    let option = document.createElement("option");
    option.value = gender;
    option.textContent = gender;
    genSelect.appendChild(option);
});
const status = ['single','married'];

const stSelect = document.getElementById("st");

status.forEach(function(status) {
    let option = document.createElement("option");
    option.value = status;
    option.textContent = status;
    stSelect.appendChild(option);
});
const baptism_status = ['baptized','not_baptized','confirmed','not_confirmed'];

const batSelect = document.getElementById("bat");

baptism_status.forEach(function(baptism_status) {
    let option = document.createElement("option");
    option.value = baptism_status;
    option.textContent = baptism_status;
    batSelect.appendChild(option);
});
