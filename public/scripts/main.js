// handle navbar dropdown menu

var navLinks = document.getElementById("nav-links");
var dropdownOpen = false;

function toggleNavDropdown() {
    if (dropdownOpen) {
        navLinks.style.maxHeight = "0px";
    }
    else {
        navLinks.style.maxHeight = "240px";
    }

    dropdownOpen = !dropdownOpen;
}

// highlight active page link

var navID = document.getElementById("navid").innerHTML;
navLinks.children[navID].firstChild.className = "nav-current";