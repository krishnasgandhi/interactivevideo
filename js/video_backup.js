var vid, playbtn, seekslider, curtimetext, durtimetext, mutebtn, volumeslider, fullscreenbtn, flag = 0;
function intializePlayer() {

    // Set object references
    vid = document.getElementById("my_video");
    playbtn = document.getElementById("playpausebtn");
    seekslider = document.getElementById("seekslider");
    curtimetext = document.getElementById("curtimetext");
    durtimetext = document.getElementById("durtimetext");
    mutebtn = document.getElementById("mutebtn");
    volumeslider = document.getElementById("volumeslider");
    fullscreenbtn = document.getElementById("fullscreenbtn");

    // Add event listeners
    playbtn.addEventListener("click", playPause, false);
    seekslider.addEventListener("change", vidSeek, false);
    vid.addEventListener("timeupdate", seektimeupdate, false);
    mutebtn.addEventListener("click", vidmute, false);
    volumeslider.addEventListener("change", setvolume, false);
    fullscreenbtn.addEventListener("click", goFullScreen, false);
}
window.onload = intializePlayer;

function playPause(){
	if(vid.paused){
		vid.play();
        playbtn.classList.add('pause');	
        playbtn.classList.remove('play');	
	} else {
		vid.pause();     
        playbtn.classList.add('play');	
        playbtn.classList.remove('pause');	
	}
}
function vidSeek() {
    var seekto = vid.duration * (seekslider.value / 100);
    vid.currentTime = seekto;
}
function seektimeupdate() {
    var nt = vid.currentTime * (100 / vid.duration);
    seekslider.value = nt;
    //console.log(vid.currentTime);

    var t = Math.floor(vid.currentTime);

    if (flag == t) {
    } else {
        flag = t;

        if (t == 17) {
            setTimeout(function () {
                showElement("myForm");
                vid.pause();
            }, 700);

        } else if (t == 19) {
            setTimeout(function () {
                document.getElementById("myForm").classList.add('mystyle');
            }, 700);
        } else if (t == 23) {
            setTimeout(function () {
                document.getElementById("myForm").classList.remove('mystyle');
                hideElement("myForm");
                showElement("myForm1");
                vid.pause();
            }, 100);
        } else if (t == 25) {
            document.getElementById("myForm1").classList.add('mystyle');
        } else if (t == 28) {
            setTimeout(function () {
                document.getElementById("myForm1").classList.remove('mystyle');
                hideElement("myForm1");
                showElement("myForm2");
                vid.pause();
            }, 100);

        } else if (t == 29) {
            setTimeout(function () {
                document.getElementById("myForm2").classList.add('mystyle');
            }, 0);
        } else if (t == 32) {
            setTimeout(function () {
                document.getElementById("myForm2").classList.remove('mystyle');
                hideElement("myForm2");
                showElement("myForm3");
                vid.pause();
            }, 600);
        } else if (t == 33) {
            setTimeout(function () {
                document.getElementById("myForm3").classList.add('mystyle');
            }, 800);
        } else if (t == 37) {
            setTimeout(function () {
                document.getElementById("myForm3").classList.remove('mystyle');
                hideElement("myForm3");
                showElement("myForm4");
                vid.pause();
            }, 500);
        } else if (t == 38) {
            setTimeout(function () {
                document.getElementById("myForm4").classList.add('mystyle');
            }, 500);
        } else {
        }
    }

    var curmins = Math.floor(vid.currentTime / 60);
    var cursecs = Math.floor(vid.currentTime - curmins * 60);
    var durmins = Math.floor(vid.duration / 60);
    var dursecs = Math.floor(vid.duration - durmins * 60);
    if (cursecs < 10) {
        cursecs = "0" + cursecs;
    }
    if (dursecs < 10) {
        dursecs = "0" + dursecs;
    }
    if (curmins < 10) {
        curmins = "0" + curmins;
    }
    if (durmins < 10) {
        durmins = "0" + durmins;
    }
    curtimetext.innerHTML = curmins + ":" + cursecs;
    durtimetext.innerHTML = durmins + ":" + dursecs;
}
function showForm(id) {
    var x = document.getElementById(id);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function showElement(id) {
    var x = document.getElementById(id);
    x.style.display = "block";

}
function hideElement(id) {
    var y = document.getElementById(id);
    y.style.display = "none";
}
function vidmute() {
    if (vid.muted) {
        vid.muted = false;
        mutebtn.innerHTML = "Mute";
    } else {
        vid.muted = true;
        mutebtn.innerHTML = "Unmute";
    }
}
function setvolume() {
    vid.volume = volumeslider.value / 100;
}

function goFullScreen() {
    var fullscreenElement = document.fullscreenElement || document.mozFullScreenElement ||
            document.webkitFullscreenElement || document.msFullscreenElement;
    if (fullscreenElement) {
        exitFullscreen();
    } else {
        toggleFullScreen(document.getElementById('video_player_box'));
    }
}

function toggleFullScreen(x) {
    if (x.requestFullScreen) {
        x.requestFullScreen();
    } else if (x.webkitRequestFullScreen) {
        x.webkitRequestFullScreen();
    } else if (x.mozRequestFullScreen) {
        x.mozRequestFullScreen();
    }
}

function exitFullscreen() {
    if (document.exitFullscreen) {
        document.exitFullscreen();
    } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
    }
}