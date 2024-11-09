<title>Music Player</title>
<!-- Nút tạm dừng và play là hình ảnh SVG -->
<div class="tdk-music" onclick="toggleMusic()">
    <div class="tdk-bg-player"></div>
    <div class="tdk-player-text">Phát Nhạc</div>
    <svg xmlns="http://www.w3.org/2000/svg" class="tdk-icon-play" width="26" height="26" viewBox="0 0 26 26">
        <path
            d="M20.208,11.857L6.902,5.26C6.499,5.057,6.018,5.079,5.634,5.312c-0.386,0.232-0.619,0.646-0.619,1.09V19.6 c0,0.443,0.233,0.856,0.619,1.089c0.208,0.126,0.444,0.19,0.683,0.19c0.201,0,0.401-0.046,0.586-0.138l13.306-6.599 c0.438-0.218,0.716-0.658,0.716-1.143S20.646,12.075,20.208,11.857z">
        </path>
    </svg>

    <svg xmlns="http://www.w3.org/2000/svg" class="tdk-icon-pause" width="26" height="26" viewBox="0 0 26 26">
        <path
            d="M 7 5 C 6.449 5 6 5.449 6 6 L 6 20 C 6 20.551 6.449 21 7 21 L 10 21 C 10.551 21 11 20.551 11 20 L 11 6 C 11 5.449 10.551 5 10 5 L 7 5 z M 16 5 C 15.449 5 15 5.449 15 6 L 15 20 C 15 20.551 15.449 21 16 21 L 19 21 C 19.551 21 20 20.551 20 20 L 20 6 C 20 5.449 19.551 5 19 5 L 16 5 z">
        </path>
    </svg>
</div>

<!-- Trình phát nhạc được ẩn -->
<audio id="musicPlayer" loop="" autoplay=""
    src="https://bachlong-trading.com/wp-content/uploads/2024/05/EM-DONG-Y-I-DO-DUC-PHUC-x-911-x-KHAC-HUNG-1ST-LIVE-STAGE.mp3"></audio>

<script>
    var musicPlayer = document.getElementById("musicPlayer");
    var playPauseButton = document.querySelector(".tdk-music");
    var isPlaying = false; // Ban đầu là không đang phát

    // Hàm để bật hoặc tạm dừng trình phát nhạc và thay đổi hình ảnh của nút
    function toggleMusic() {
        if (isPlaying) {
            musicPlayer.pause();
            playPauseButton.classList.remove("playing");
        } else {
            musicPlayer.play();
            playPauseButton.classList.add("playing");
        }
        isPlaying = !isPlaying; // Chuyển trạng thái đang phát hoặc tạm dừng
    }
</script>
<script>
    // Đặt hàm toggleMusic() vào hàm setTimeout() để chạy sau 3 giây
    setTimeout(function() {
        toggleMusic();
    }, 3000);
</script>
