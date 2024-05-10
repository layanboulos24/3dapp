function openAbout() {
    var aboutElement = document.getElementById('aboutPopUp');
    var overlay = document.getElementById('overlay');
    aboutElement.style.display = 'block';
    overlay.style.display = 'block';
}

function closeAbout() {
    var aboutElement = document.getElementById('aboutPopUp');
    aboutElement.style.display = 'none';
    overlay.style.display = 'none';
}