var zIndex = 1;

if (localStorage.getItem('background') !== null) {
    var background = localStorage.getItem('background');
    document.getElementById('wallpaper').setAttribute('src', 'assets/images/backgrounds/' + background + ".jpeg");
} else {
    document.getElementById('wallpaper').setAttribute('src', 'assets/images/backgrounds/bigsur-light.jpeg');
}

function wallpaperChange(picture) {
    document.getElementById('wallpaper').setAttribute('src', 'assets/images/backgrounds/' + picture + ".jpeg");
    document.getElementById('wallpaper-preview').setAttribute('src', 'assets/images/backgrounds/' + picture + ".jpeg");
    document.getElementById('wallpaper-name').innerText = picture;
    localStorage.setItem('background', picture);  
}

function hide(window) {
    let screen = document.getElementById(window);
    screen.style.display = "none";
    event.stopPropagation();
}

function show(window) {
    let screen = document.getElementById(window);
    screen.style.display = "flex";
    screen.style.zIndex = ++zIndex;
    event.stopPropagation();
}

function menuShow(window) {
    let screen = document.getElementById(window);
    screen.style.display = "flex";
    screen.style.zIndex = ++zIndex;
    var min = window.length - 5;
    var menu = window.substr(0, min);
    document.getElementById(menu).setAttribute('onclick', 'menuHide(' + "'" + window + "'" + ')');
}

function menuHide(window) {
    let screen = document.getElementById(window);
    screen.style.display = "none";
    var min = window.length - 5;
    var menu = window.substr(0, min);
    document.getElementById(menu).setAttribute('onclick', 'menuShow(' + "'" + window + "'" + ')');
}

function showPicture(picture) {
    document.getElementById('picture-window').style.display = "flex";
    document.getElementById('picture-window').style.zIndex = ++zIndex;
    document.getElementById('picture-preview').setAttribute('src', 'assets/images/' + picture + ".jpeg");
    document.getElementById('picture-title').innerText = picture;
    event.stopPropagation();
}

function clearLocalStorage() {
    localStorage.clear();
}

function lokaletijd() {
    var newtime = new Date().toLocaleTimeString('nl-NL');
    document.getElementById("tijd").innerHTML = newtime;
}

function timeUpdate() {
    setInterval(lokaletijd, 1000);
}