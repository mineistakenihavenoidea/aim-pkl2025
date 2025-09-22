<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bukti Kunjungan</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 14px; }
        h2 { text-align: center; margin-bottom: 25px; }
        .field { margin-bottom: 10px; }
        .label { font-weight: bold; width: 150px; display: inline-block; }
        .value { display: inline-block; }
        .footer { margin-top: 40px; text-align: right; font-size: 12px; }
    </style>
</head>
<body>
    <h2>Bukti Kunjungan Buku Tamu</h2>

    <div class="field"><span class="label">Nama:</span> <span class="value">{{ $tamu->nama }}</span></div>
    <div class="field"><span class="label">Nomor:</span> <span class="value">{{ $tamu->nomor }}</span></div>
    <div class="field"><span class="label">Pekerjaan:</span> <span class="value">{{ $tamu->pekerjaan }}</span></div>
    <div class="field"><span class="label">Instansi:</span> <span class="value">{{ $tamu->instansi }}</span></div>
    <div class="field"><span class="label">Layanan:</span> <span class="value">{{ $tamu->layanan }}</span></div>
    <div class="field"><span class="label">Pegawai:</span> <span class="value">{{ $tamu->pegawai }}</span></div>
    <div class="field"><span class="label">Tujuan:</span> <span class="value">{{ $tamu->tujuan }}</span></div>
    <div class="field"><span class="label">Topik:</span> <span class="value">{{ $tamu->topik }}</span></div>
    <div class="field"><span class="label">Tanggal:</span> <span class="value">{{ $tamu->created_at->format('d F Y') }}</span></div>

    <div class="footer">
        Dicetak pada: {{ now()->format('d-m-Y H:i') }}
    </div>
</body>
</html>
