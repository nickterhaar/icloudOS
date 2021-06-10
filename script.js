var zIndex = 1;

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
    var min = window.length - 5;
    var menu = window.substr(0, min);
    document.getElementById(menu).setAttribute('onclick', 'menuHide(' + "'" + window + "'" + ')');
    console.log(menu);
}

function menuHide(window) {
    let screen = document.getElementById(window);
    screen.style.display = "none";
    var min = window.length - 5;
    var menu = window.substr(0, min);
    document.getElementById(menu).setAttribute('onclick', 'menuShow(' + "'" + window + "'" + ')');
}

function wallpaperChange(picture) {
    document.getElementById('wallpaper').setAttribute('src', 'assets/images/backgrounds/' + picture + ".jpeg");document.getElementById('wallpaper-preview').setAttribute('src', 'assets/images/backgrounds/' + picture + ".jpeg");
    document.getElementById('wallpaper-name').innerText = picture;
}

var browserName = navigator.userAgent;
document.getElementById('browser').innerHTML = '<strong>Browser</strong> ' + browserName;