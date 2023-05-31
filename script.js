const tracksList = document.getElementById("playlist-tracks");
const tracks = tracksList.getElementsByTagName("li"); const total = document.getElementById("total-songs");
const playButtonDiv = document.getElementById("play-button-div"); const pauseButtonDiv = document.getElementById("pause-button-div");
const playButton = document.getElementById("play-button"); const pauseButton = document.getElementById("pause-button");
const audio=document.getElementById("audio");
playButton.addEventListener("click", () => {
    pauseButtonDiv.classList.remove("clear")
    playButtonDiv.classList.add("clear")
    audio.play()

});
pauseButton.addEventListener("click", () => {
    playButtonDiv.classList.remove("clear")
    pauseButtonDiv.classList.add("clear")
    audio.pause()

});
const shuffleIcon = document.getElementById("shuffle-icon");
const shuffleButton = document.getElementById("shuffle-button");
shuffleButton.addEventListener("click", () => {
    if (shuffleIcon.style.color != "red") { shuffleIcon.style.color = "red" }
    else { shuffleIcon.style.color = 'black' }


})