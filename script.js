// elemen
const submitButton = document.getElementById("submit-button");

// Gsound
const clickSound = document.getElementById("click-sound");

// clickSound
submitButton.addEventListener("click", function(event) {
    clickSound.currentTime = 0;  // Reset 
    clickSound.play();
});
