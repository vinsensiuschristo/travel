<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        p {
            font-size: 12px;
        }

        .signature {
            font-style: italic;
        }
    </style>
</head>
<body>
<div>
    <p>Hey ada yang memesan TRAVEL, {{ $name }} telah melakukan booking di INOVATION TRAVEL</p>
    <p>Paket yang dia pilih adalah {{ $paket }},</p>
    <p>{{ $name }} memesan untuk tanggal {{ $tanggal }},</p>
    <p>CEPAT LAKUKAN FOLLOW UP</p>
    <p>hubuungi nomor {{ $nomor }}</p>
    <p class="signature">Mailtrap</p>
</div>
</body>
</html>