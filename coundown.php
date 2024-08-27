<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Clock with Date</title>
    <style>
     
        .clock {
            font-size: 48px;
            margin-top: 20px;
        }
        .date {
            font-size: 32px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>Current Date and Time</h1>
    <div class="date" id="date"></div>
    <div class="clock" id="clock"></div>

    <?php
    // Mendapatkan waktu server saat ini dalam format UNIX timestamp
    $currentTime = time();
    ?>

    <script>
        // Mendapatkan waktu server saat ini dari PHP
        var currentTime = <?php echo $currentTime * 1000; ?>;

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
        }

        // Memperbarui jam setiap detik
        setInterval(updateClock, 1000);
        updateClock();
    </script>

</body>
</html>
