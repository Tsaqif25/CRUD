<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Year Countdown</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #282c34;
            color: white;
            margin-top: 50px;
        }
        .clock {
            font-size: 48px;
            margin-top: 20px;
        }
        .date {
            font-size: 32px;
            margin-top: 10px;
        }
        .countdown {
            font-size: 64px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>New Year Countdown</h1>
    <div class="date" id="date"></div>
    <div class="clock" id="clock"></div>
    <div class="countdown" id="countdown"></div>

    <?php
    // Mendapatkan waktu server saat ini dalam format UNIX timestamp
    $currentTime = time();
    ?>

    <script>
        // Mendapatkan waktu server saat ini dari PHP
        var currentTime = <?php echo $currentTime * 1000; ?>;

        // Mendapatkan waktu tahun baru berikutnya
        var nextYear = new Date(new Date().getFullYear() + 1, 0, 1, 0, 0, 0, 0);
        var newYearTime = nextYear.getTime();

        function updateClock() {
            // Menambahkan satu detik pada waktu server
            currentTime += 1000;

            // Membuat objek Date berdasarkan waktu server
            var now = new Date(currentTime);

            // Menampilkan tanggal sekarang dalam format hari/bulan/tahun
            var day = now.getDate().toString().padStart(2, '0');
            var month = (now.getMonth() + 1).toString().padStart(2, '0'); // +1 karena Januari = 0
            var year = now.getFullYear();
            document.getElementById('date').innerHTML = day + '/' + month + '/' + year;

            // Menampilkan waktu sekarang dalam format jam:menit:detik
            var hours = now.getHours().toString().padStart(2, '0');
            var minutes = now.getMinutes().toString().padStart(2, '0');
            var seconds = now.getSeconds().toString().padStart(2, '0');
            document.getElementById('clock').innerHTML = hours + ':' + minutes + ':' + seconds;

            // Menghitung waktu yang tersisa hingga tahun baru
            var timeLeft = newYearTime - currentTime;

            // Menghitung hari, jam, menit, dan detik yang tersisa
            var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            var hoursLeft = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutesLeft = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            var secondsLeft = Math.floor((timeLeft % (1000 * 60)) / 1000);

            // Menampilkan waktu yang tersisa dalam format hari jam:menit:detik
            document.getElementById('countdown').innerHTML = 
                days + " days " + 
                hoursLeft.toString().padStart(2, '0') + ":" + 
                minutesLeft.toString().padStart(2, '0') + ":" + 
                secondsLeft.toString().padStart(2, '0');
        }

        // Memperbarui jam setiap detik
        setInterval(updateClock, 1000);
        updateClock();
    </script>

</body>
</html>
