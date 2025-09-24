<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Layanan BRMP Aneka Kacang</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 13px; }
        .header {
            text-align: center;
            margin-bottom: 10px;
        }
        .header h3, .header h4 {
            margin: 2px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        td.label {
            width: 120px;
            font-weight: bold;
            vertical-align: top;
        }
        td.value {
            padding-left: 5px;
        }
        .kritik {
            margin-top: 20px;
        }
        .kritik h4 {
            margin-bottom: 5px;
        }
        .kritik-box {
            border: 1px solid #000;
            height: 100px;
            padding: 5px;
        }
        .footer {
            margin-top: 30px;
            text-align: right;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h3>KEMENTERIAN PERTANIAN</h3>
        <h4>Balai Perakitan dan Pengujian Tanaman Aneka Kacang</h4>
        <h4>Form Layanan BSIP Aneka Kacang</h4>
    </div>


    <table>
        <tr>
            <td class="label">Nama</td>
            <td class="value">: {{ $tamu->nama }}</td>
        </tr>
        <tr>
            <td class="label">Nomor</td>
            <td class="value">: {{ $tamu->nomor }}</td>
        </tr>
        <tr>
            <td class="label">Pekerjaan</td>
            <td class="value">: {{ $tamu->pekerjaan }}</td>
        </tr>
        <tr>
            <td class="label">Instansi</td>
            <td class="value">: {{ $tamu->instansi }}</td>
        </tr>
        <tr>
            <td class="label">Layanan</td>
            <td class="value">: {{ $tamu->layanan }}</td>
        </tr>
        <tr>
            <td class="label">Pegawai</td>
            <td class="value">: {{ $tamu->pegawai }}</td>
        </tr>
        <tr>
            <td class="label">Tujuan</td>
            <td class="value">: {{ $tamu->tujuan }}</td>
        </tr>
        <tr>
            <td class="label">Topik</td>
            <td class="value">: {{ $tamu->topik }}</td>
        </tr>
    </table>


    <div class="kritik">
        <h4>Kritik dan Saran</h4>
        <div class="kritik-box"></div>
    </div>


    <div class="footer">
        {{ now()->format('d F Y') }}
    </div>
</body>
</html>
