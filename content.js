
var audio = document.getElementById('audio');
var muteButton = document.getElementById('muteButton');
var icon = muteButton.querySelector('i');
document.getElementById('closeButton').addEventListener('click', function() {
    var cover = document.getElementById('cover');
    cover.classList.add('slide-up'); // Trigger the slide-up effect

    audio.play();

    setTimeout(function() {
        cover.style.display = 'none'; 
        document.getElementById('nav').style.display = 'block';
        document.getElementById('flower-bottom-sc1').style.display = 'block';
        document.getElementById('img-l-bot').style.display = 'block';
        document.getElementById('img-r-bot').style.display = 'block'; 
    }, 500); 
});

muteButton.addEventListener('click', function() {
    if (audio.muted) {
        audio.muted = false;
        icon.className = 'fas fa-volume-up'; 
    } else {
        audio.muted = true;
        icon.className = 'fas fa-volume-mute'; 
    }
});


document.addEventListener('DOMContentLoaded', () => {
    const sliderWrapper = document.querySelector('.slider-wrapper');
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    let currentIndex = 0;

    function updateSlider() {
        sliderWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    function handleScroll(event) {
        if (event.deltaY > 0) {
            currentIndex = Math.min(currentIndex + 1, totalSlides - 1);
        } else {
            currentIndex = Math.max(currentIndex - 1, 0);
        }
        updateSlider();
    }

    sliderWrapper.addEventListener('wheel', handleScroll);
});


var popup = document.getElementById("popupForm");


var btn = document.getElementById("openPopup");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
    popup.style.display = "block";
}


span.onclick = function() {
    popup.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == popup) {
        popup.style.display = "none";
    }
}




document.getElementById('rsvpForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
    alert('Thank you for your RSVP!');
    popup.style.display = "none";
});

document.getElementById('copyButton').addEventListener('click', function() {
            var textToCopy = document.getElementById('textToCopy');
            textToCopy.select();
            textToCopy.setSelectionRange(0, 99999);

            try {
                document.execCommand('copy');
                alert('Text copied to clipboard');
            } catch (err) {
                alert('Failed to copy text');
            }
        });

const storyTrack = document.querySelector('.story-track');
const slides = document.querySelectorAll('.story-slide');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

let currentIndex = 0;


function updateSlidePosition() {
    const offset = -currentIndex * 100; 
    storyTrack.style.transform = `translateX(${offset}%)`;
}

prevButton.addEventListener('click', () => {
    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = slides.length - 1; 
    }
    updateSlidePosition();
});

nextButton.addEventListener('click', () => {
    currentIndex++;
    if (currentIndex >= slides.length) {
        currentIndex = 0; 
    }
    updateSlidePosition();
});

function setActive(element) {
    var links = document.querySelectorAll('.nav-link');
    links.forEach(link => {
        link.classList.remove('active');
    });
    element.classList.add('active');
}