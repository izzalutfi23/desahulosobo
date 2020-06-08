<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cetak Surat</title>
	<style type="text/css">
		.header {
			width: 100%;
			height: auto;
			border-bottom: 2px solid #000;
			padding-bottom: 15px;
		}

		.judul {
			text-align: center;
		}

	</style>
</head>

<body>
	<div class="header">
		<font class="judul">
			<center>PEMERINTAH KABUPATEN PURWOREJO<br> KECAMATAN KALIGESING<br> DESA HULOSOBO<br> Jl. KRT.
				Kertodiningrat 41 Margosari Pengasih Purworejo<br> Telp. 773123</center>
		</font>
	</div>
	<center style="padding-top: 20px;"><u style="text-transform: uppercase; font-weight: bold;"><?=$lap->jenis_surat?></u><br>NOMOR: 03.001/DS-HS/VI/2020</center>
	<p style="padding-top: 10px;">Yang bertanda tangan dibawah ini kepala Desa Hulosobo, Kecamatan Kaligesing, Kabupaten
		Purworejo, Provinsi Jawa Tengah</p>
	<p style="padding-top: 10px;">Dengan ini menerangkan bahwa:</p>
	<ol type='a' style="page-break-inside: avoid;">
		<li>Nama : <?=$lap->nama?></li>
		<li>Email : <?=$lap->email?></li>
		<li>Alamat : Jl. KRT. Kertodiningrat 41 Margosari Pengasih Purworejo</li>
	</ol>
    <p style="padding-top: 10px;">Yang bersangkutan adalah benar-benar warga Desa Hulosobo yang berasal dari RT 02, RW 03</p>
    <p style="padding-top: 10px;">Demikian surat keterangan ini dibuat untuk dapat digunakan sebagaimana mestinya</p>
    <table width="100%" style="bottom: 0; margin-top:100px;">
        <tr>
            <td width="70%"></td>
            <td align="center">Hulosobo, 25 Juni 2020<br> <p style="font-size: 15px;">Kepala Desa Hulosobo</p></td>
        </tr>
        <tr>
            <td></td>
            <td><div style="width: 60%; margin: auto; padding-top: 70px;">..............................</div></td>
        </tr>
    </table>
</body>

</html>
