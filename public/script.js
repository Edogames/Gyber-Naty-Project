function getMousePose(event) {
    if(document.getElementById('card')){
        const card = document.getElementById('card');
        const {x, y, height, width} = card.getBoundingClientRect();
    
    
        var mouseX = event.clientX;
        var mouseY = event.clientY;

        const shadow = {x: x - mouseX * 0.5,y: y - mouseY / 3};
        card.style.boxShadow = `${shadow.x}px ${shadow.y}px 1000px rgba(204, 255, 0, 0.1)`;
    }
};

let visible = true;
let menu = document.querySelector(".menu");

window.addEventListener('resize', function() {
    if(this.window.innerWidth >= 769){
        changeVisible(true);
        menu.style.display = "none";
    }
});

document.onkeypress = function (event) {
    event = (event || window.event);
    if (event.keyCode == 123) {
       //alert('No F-12');
        return false;
    }
}
document.onmousedown = function (event) {
    event = (event || window.event);
    if (event.keyCode == 123) {
        //alert('No F-keys');
        return false;
    }
}
document.onkeydown = function (event) {
    event = (event || window.event);
    if (event.keyCode == 123) {
        //alert('No F-keys');
        return false;
    }
}

function toggleMenu(){
    if(visible == true){
        changeVisible(false);
        return menu.style.display = "block";
    }else{
        changeVisible(true);
        return menu.style.display = "none";
    }
}
function changeVisible(value){
    return visible = value;
}
function changeVisibleMap(value){
    return visibleMap = value;
}

let linkForMenu = location.href;
linkForMenu = linkForMenu.split('/');
linkForMenu = linkForMenu[3];

if (linkForMenu == ""){
    document.getElementById('home').style.color = "#90AADB";
}else if(linkForMenu == "philosophy"){
    document.getElementById('philosophy').style.color = "#90AADB";
}

let visibleMap = true;
let footer = document.querySelector('footer');
let roadMap = document.getElementById('road-map');
let bottomBorder = document.querySelector('.bottom-border');
let textBox = document.querySelectorAll('.square-text');

function checkVisible(){
    if(visibleMap == false){
        footer.style.width = "100%";
        footer.style.background = "rgb(0, 0, 0, 1)";
        footer.style.transform = `translateY(-70vh)`;
        roadMap.style.height = "75vh";
        roadMap.style.display = "block";
        bottomBorder.style.display = "block";
        textBox.forEach(i => {
            i.style.height = "fit-content";
            i.style.display = "block";
            i.style.margin = "auto";
        });
    }else{
        footer.style.width = "70%";
        footer.style.background = "rgba(0, 0, 0, 0)";
        footer.style.transform = `translateY(-42px)`;
        roadMap.style.height = "fit-content";
        roadMap.style.display = "none";
        bottomBorder.style.display = "none";
        textBox.forEach(i => {
            i.style.height = "0px";
            i.style.display = "none";
        });
    }
}

function toggleMap(){
    if(visibleMap == true){
        changeVisibleMap(false);
        checkVisible();
    }else{
        changeVisibleMap(true);
        checkVisible();
    }
}

checkVisible();

let date = document.querySelectorAll('.date');
let colors = ['#EA6CFF', '#5A8CEC', '#89AB00'];

for(let i = 0; i < date.length; i ++){
    date[i].style.color = colors[i];
}
