<?php
include 'partials/dbconnect.php';
require 'partials/nav.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <style>
body{
    padding-top: 120px;
    padding-bottom: 140px;
}
#prevButton {
    margin-top: 0px;
   margin-left:40%;
   /* margin-left: 0%; */
    font-size: 30px;
    height: 55px;
    width: 68px;
}
 #playPauseButton , #nextButton ,  #muteButton {
    /* padding-left: 50px; */
    margin-left: 0%;
    margin-bottom: 1%;
    font-size: 30px;
    height: 55px;
    width: 68px;
}
#songDuration{
    margin-left: 95%;
    margin-top: 0%;
    height: 1%;
    width: 20%;
}
.controls{
    padding-left: 50%;
    align-items: center;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: white;
    padding: 10px 0;
}
.current {
    box-shadow:0px 3px 65px 0px rgb(197, 117, 61);
  }
.product_container
{  
    margin-top: 2%;
    display:flex;
    margin-left: 5%;
    margin-right: 5%;
}
.product_container .song .item
{  
    width: 15%;
    margin: 10px;
    height: 8%;
}
.product_container .item
{  
    /* /* padding-left: 15%; */
    margin-left: 5%; */
}
.product_container .item:hover 
{
    box-shadow:0px 3px 65px 0px rgb(53, 144, 28);
}
.product_container .song .item .item_img
{
    width: 100%;
    height: 20%;
    overflow:hidden;
}
/* .product_container .item .item_img img
{
    width: 100%;
    height: 20%;
} */
.product_container .item .item_content
{
    text-align: center;
}
.product_container .item .item_content h3
{
    font-size: 25px;
    font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
    line-height: 2px;
    margin-bottom: 0px;
}
.product_container .item .item_content p
{
    font-size: 15px;
    line-height: 15px;
    font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
    margin-bottom: 25px;
}
#heading{
    text-align: center;
}
    </style>
</head>    
<body>
    <h1 id="heading">Trending</h1>
            <div class="product_container">
                    <div class="item">
                        <div class="item_img">
                            <div class="song" onclick="playSong(0)"><img src="song1.jpg"></div>
                        </div>
                        <div class="item_content">
                            <h3> Haaniyaan</h3>
                            <p> Arijit Singh</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="item_img">
                            <div class="song" onclick="playSong(1)"><img src="song2.jpg"></div>
                        </div>
                        <div class="item_content">
                            <h3> Heeriye</h3>
                            <p> Arijit Singh</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item_img">
                            <div class="song" onclick="playSong(2)"><img src="song3.jpg"></div>
                        </div>
                        <div class="item_content">
                            <h3> Oh Maahi</h3>
                            <p> Arijit Singh</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item_img">
                            <div class="song" onclick="playSong(3)"><img src="song4.jpg"></div>
                        </div>
                        <div class="item_content">
                            <h3> Tere Hawale</h3>
                            <p> Arijit Singh, Shilpa rao</p>
                        </div>
                    </div>
                </div>
                    <div class="product_container">
                        <div class="item">
                            <div class="item_img">
                                <div class="song" onclick="playSong(4)"><img src="song5.jpg"></div>
                            </div>
                            <div class="item_content">
                                <h3>Teri baaton mein aisa</h3>
                                <p> Raghav, Asees Kaur</p>
                            </div>
                        </div>

                    <div class="item">
                        <div class="item_img">
                            <div class="song" onclick="playSong(5)"><img src="song6.jpg"></div>
                        </div>
                        <div class="item_content">
                            <h3>Saari duniya Jalaa</h3>
                            <p>B Praak</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item_img">
                            <div class="song" onclick="playSong(6)"><img src="song7.jpg"></div>
                        </div>
                        <div class="item_content">
                            <h3>Kahani Suno</h3>
                            <p>Kaifi Khalil</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="item_img">
                            <div class="song" onclick="playSong(7)"><img src="song8.jpg"></div>
                        </div>
                        <div class="item_content">
                            <h3>Guli Mata</h3>
                            <p>Saad Lamjarred</p>
                        </div>
                    </div>
                    </div>
                    <div class="product_container">
                        
                    <div class="item">
                        <div class="item_img">
                            <div class="song" onclick="playSong(8)"><img src="song9.jpg"></div>
                        </div>
                        <div class="item_content">
                            <h3>Tu hai kahan</h3>
                            <p>Aur</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="item_img">
                            <div class="song" onclick="playSong(9)"><img src="song10.jpg"></div>
                        </div>
                        <div class="item_content">
                            <h3>Kabhi Shaam Dhale</h3>
                            <p>Mohammad Faiz</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_img">
                            <div class="song" onclick="playSong(10)"><img src="song11.jpg"></div>
                        </div>
                        <div class="item_content">
                            <h3>Maan Meri Jaan</h3>
                            <p>King</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="item_img">
                            <div class="song" onclick="playSong(11)"><img src="song12.jpg"></div>
                        </div>
                        <div class="item_content">
                            <h3>Waaliyaan</h3>
                            <p>Singga</p>
                        </div>
                    </div>
                </div>
                <div class="product_container">
                    <div class="item">
                        <div class="item_img">
                            <div class="song" onclick="playSong(12)"><img src="song13.jpg"></div>
                        </div>
                        <div class="item_content">
                            <h3>Akhiyaan Gulab</h3>
                            <p>Mitraz</p>
                        </div>
                    </div>
                </div>
                <div class="controls">
                    <input type="range" id="songProgress" value="0" step="1" style="width: 100%;">
                    <audio id="audioPlayer" src="song1.mp3"></audio>
                    <p id="songDuration">0:00 / 0:00</p>
                <button id="prevButton">⏮️</button>  
                <button id="playPauseButton">⏸️</button>
                <button id="nextButton">⏭️</button>
                <button id="muteButton">🔇</button>
                </div>
                </body>
                <script>
                  // JavaScript for music player functionality
                  const songs = ["song1.mp3", "song2.mp3", "song3.mp3", "song4.mp3", "song5.mp3", "song6.mp3", "song7.mp3", "song8.mp3", "song9.mp3", "song10.mp3"
                                , "song11.mp3", "song12.mp3", "song13.mp3"]; 
                    // Array of song paths
                  let currentSongIndex = 0;
                  const audio = document.getElementById('audioPlayer');
                  const songProgress = document.getElementById('songProgress');
                  audio.volume = 0.5; // Set default volume
                
                  // Function to play a specific song
                  function playSong(index) {
                    currentSongIndex = index;
                    audio.src = songs[currentSongIndex];
                    audio.play();
                    displayCurrentSong();
                  }
                
                  // Function to play or pause current song
                  function togglePlayPause() {
                    if (audio.paused) {
                      audio.play();
                      document.getElementById('playPauseButton').textContent = '⏸️';
                    } else {
                      audio.pause();
                      document.getElementById('playPauseButton').textContent = '▶️';
                    }
                  }
                
                  // Event listener for play/pause button
                  document.getElementById("playPauseButton").addEventListener("click", togglePlayPause);
                
                  // Function to play next song
                  function playNextSong() {
                    currentSongIndex = (currentSongIndex + 1) % songs.length;
                    audio.src = songs[currentSongIndex];
                    audio.play();
                    displayCurrentSong();
                  }
                
                  // Function to play previous song
                  function playPrevSong() {
                    currentSongIndex = (currentSongIndex - 1 + songs.length) % songs.length;
                    audio.src = songs[currentSongIndex];
                    audio.play();
                    displayCurrentSong();
                  }
                
                  // Event listener for next button
                  document.getElementById("nextButton").addEventListener("click", playNextSong);
                
                  // Event listener for previous button
                  document.getElementById("prevButton").addEventListener("click", playPrevSong);
                
                  // Function to display current song in the list
                  function displayCurrentSong() {
                    const songsElements = document.querySelectorAll(".song");
                    songsElements.forEach((element, index) => {
                      if (index === currentSongIndex) {
                        element.classList.add("current");
                      } else {
                        element.classList.remove("current");
                      }
                    });
                  }
                
                  // Event listener to update current song display when song changes
                  audio.addEventListener("ended", playNextSong);
                
                  // Function to update song duration and progress display
                  function updateSongProgress() {
                    const durationElement = document.getElementById('songDuration');
                    const minutesTotal = Math.floor(audio.duration / 60);
                    let secondsTotal = Math.floor(audio.duration % 60);
                    if (secondsTotal < 10) {
                      secondsTotal = '0' + secondsTotal;
                    }
                    const minutesCurrent = Math.floor(audio.currentTime / 60);
                    let secondsCurrent = Math.floor(audio.currentTime % 60);
                    if (secondsCurrent < 10) {
                      secondsCurrent = '0' + secondsCurrent;
                    }
                    durationElement.textContent = `${minutesCurrent}:${secondsCurrent} / ${minutesTotal}:${secondsTotal}`;
                    songProgress.value = Math.floor(audio.currentTime);
                  }
                
                  // Event listener to update song duration and progress when metadata is loaded
                  audio.addEventListener('loadedmetadata', function() {
                    songProgress.max = Math.floor(audio.duration);
                    updateSongProgress();
                  });
                
                  // Event listener for song progress change
                  songProgress.addEventListener('input', function() {
                    audio.currentTime = parseInt(this.value, 10);
                    updateSongProgress();
                  });
                
                  // Update song progress periodically
                  setInterval(updateSongProgress, 1000);
                
                  // Mute button functionality
                  document.getElementById('muteButton').addEventListener('click', function() {
                    audio.muted = !audio.muted;
                    if (audio.muted) {
                      document.getElementById('muteButton').textContent = 'Unmute';
                    } else {
                      document.getElementById('muteButton').textContent = 'Mute';
                    }
                  });
                
                  // Initial call to display current song
                  displayCurrentSong();
                </script>
</html>