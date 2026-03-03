let contrastInteract = document.getElementById("interactivepg_contrast");
let alignInteract = document.getElementById("alignmentInteract");
// Accessibility does not need one, mostly being its own native page. We can make a choice about this later


function destroyContrast(){
    contrastInteract.style.backgroundColor = 'rgb(255, 255, 66)';
    contrastInteract.style.color = 'rgb(77, 234, 255)';
}

function contrastBG1(){
    contrastInteract.style.backgroundColor = '';
}
function contrastBG2(){
    contrastInteract.style.backgroundColor = '';
}
function contrastBG3(){
    contrastInteract.style.backgroundColor = '';
}
function contrastBG4(){
    contrastInteract.style.backgroundColor = '';
}



function contrasttxt1(){
    contrastInteract.style.color = '';
}

function contrasttxt2(){
    contrastInteract.style.color = '';
}

function contrasttxt3(){
    contrastInteract.style.color = '';
}

function contrasttxt4(){
    contrastInteract.style.color = '';
    
}


// quiz script

function storeAnswers(){
    


}

function nextPage(){
    
}


//Nav script
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');
const navbar = document.querySelector('.navbar');
const dropdownBtn = document.getElementById('dropdownBtn');
const dropdownCont = document.getElementById('dropdownCont');

//test

//overlay
const overlay = document.createElement('div');
overlay.className = 'menu-overlay';
document.body.appendChild(overlay);

hamburger.addEventListener('click', () => {
    console.log('Hamburger clicked');
    hamburger.classList.toggle('active');
    navbar.classList.toggle('active');
    overlay.classList.toggle('active');
    document.body.style.overflow = navbar.classList.contains('active') ? 'hidden' : ''; 
});

//closes menu when clicking overlay
overlay.addEventListener('click', () => {
    hamburger.classList.remove('active');
    navbar.classList.remove('active');
    overlay.classList.remove('active');
    document.body.style.overflow = '';
});

//closes when window is at normal desktop size, noticed that when opened and then stretched it would just stay there
window.addEventListener('resize', () => {
    if (window.innerWidth > 1001) {
        hamburger.classList.remove('active');
        navbar.classList.remove('active');
        overlay.classList.remove('active');
        dropdownBtn.classList.remove('active');
        dropdownCont.classList.remove('active');
        document.body.style.overflow = '';
    }
});

// dropdownBtn.addEventListener('click', (e) => {
//     if (e.target.tagName === 'A') {
//         return;
//     }
//     dropdownBtn.classList.toggle('active');
//     dropdownCont.classList.toggle('active');
// });

// dropdownBtn.querySelector('a').addEventListener('click', (e) => {
//     e.preventDefault();
//     dropdownBtn.classList.toggle('active');
//     dropdownCont.classList.toggle('active');
// });

// dropdown for mobile
function toggleDropdown(e) {
    // check for mobile
    if (window.innerWidth <= 1000) {
        const crapLink = dropdownBtn.querySelector('a');
        if(e.target === crapLink){
            e.preventDefault();
        }
        dropdownBtn.classList.toggle('active');
        dropdownCont.classList.toggle('active');
    }
}

dropdownBtn.addEventListener('click', toggleDropdown);

const dropdownLinks = dropdownCont.querySelectorAll('a');
dropdownLinks.forEach(link => {
    link.addEventListener('click', () => {
        if(window.innerWidth <= 1000) {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
            dropdownBtn.classList.remove('active');
            dropdownCont.classList.remove('active');
        }
    });
});

const navLinks = document.querySelectorAll('nav-menu > li > a:not(.dropdown-btn a)');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        if(window.innerWidth <= 1000) {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        }
    });
});

window.addEventListener('resize', () => {
    if(window.innerWidth > 1001) {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        dropdownBtn.classList.remove('active');
        dropdownCont.classList.remove('active');
    }
});
// end of nav js

