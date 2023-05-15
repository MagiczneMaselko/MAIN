let currentSlide = 1;




function startSlider() {
    let imageCount = document.querySelectorAll(".fotslider"); 
    let images = document.querySelector("ul");
    images.style.transform = `translateX(-${currentSlide * 45}vw)`;
    if (currentSlide == imageCount.length - 1) {
        currentSlide = 0;
    } else {
        currentSlide++;
    }
}

setInterval(() => {
    startSlider();
}, 5000);