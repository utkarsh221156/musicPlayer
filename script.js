const audio = document.getElementById('audio');
const playBtn = document.getElementById('playBtn');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let isPlaying = false;
let currentTrack = 0;
const playlist = [
    'audio1.mp3',
    'audio2.mp3',
    'audio3.mp3'
];

function togglePlay() {
    if (isPlaying) {
        audio.pause();
        playBtn.textContent = 'Play';
    } else {
        audio.play();
        playBtn.textContent = 'Pause';
    }
    isPlaying = !isPlaying;
}

function playNext() {
    currentTrack = (currentTrack + 1) % playlist.length;
    audio.src = playlist[currentTrack];
    audio.play();
    playBtn.textContent = 'Pause';
    isPlaying = true;
}

function playPrev() {
    currentTrack = (currentTrack - 1 + playlist.length) % playlist.length;
    audio.src = playlist[currentTrack];
    audio.play();
    playBtn.textContent = 'Pause';
    isPlaying = true;
}

playBtn.addEventListener('click', togglePlay);
nextBtn.addEventListener('click', playNext);
prevBtn.addEventListener('click', playPrev);
