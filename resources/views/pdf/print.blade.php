<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Siswa Report</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 14px; }
        h2 { text-align: center; margin-bottom: 20px; }
        .field { margin-bottom: 10px; }
        .label { font-weight: bold; display: inline-block; width: 150px; }
        .value { display: inline-block; }
    </style>
</head>
<body>
    <h2>Data Siswa Keluar</h2>

    <div class="field"><span class="label">No Induk:</span> <span class="value">{{ $siswa->no_induk }}</span></div>
    <div class="field"><span class="label">Nama:</span> <span class="value">{{ $siswa->nama }}</span></div>
    <div class="field"><span class="label">Kelamin:</span> <span class="value">{{ $siswa->kelamin }}</span></div>
    <div class="field"><span class="label">Tanggal Lahir:</span> <span class="value">{{ $siswa->tanggal_lahir }}</span></div>
    <div class="field"><span class="label">Alamat:</span> <span class="value">{{ $siswa->alamat }}</span></div>
    <div class="field"><span class="label">Alasan Keluar:</span> <span class="value">{{ $siswa->reason ?? '-' }}</span></div>

    <br><br>
    <p>Dicetak pada: {{ now()->format('d-m-Y H:i') }}</p>
</body>
</html>
