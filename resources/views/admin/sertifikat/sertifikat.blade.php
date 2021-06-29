<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SERTIFIKAT&nbsp; LABORATORIUM BARISTA</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
	border-style: solid;
	border-width: 1px;
}
.auto-style2 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
	font-size: large;
}
.auto-style3 {
	border: 3px solid #000000;
}
.auto-style4 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
	font-size: x-large;
}
.auto-style5 {
	text-align: right;
}
.auto-style6 {
	text-align: left;
}
.auto-style7 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
	font-size: small;
}
.auto-style8 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
	font-size: medium;
}
</style>
</head>

<body>

<table cellpadding="0" class="auto-style3" style="width: 100%">
	<tr>
		<td class="auto-style1" style="height: 268px">
		<table style="width: 90%">
			<tr>
				<td style="width: 95px;text-align:right;" >
					<img alt="" height="112" src="https://pbs.twimg.com/profile_images/1260126116120915969/ErvVkfCW.jpg" width="140" />
		</td>
				<td style="width: 845px;text-align:center;" ><strong>
		<span class="auto-style4">LABORATORIUM PENGUJI<br />
				</span>
		<span class="auto-style7"><em>(Laboratory For Testing)<br />
				</em></span>
		<span class="auto-style8">BALAI RISET DAN STANDARDISASI INDUSTRI 
				BANJARBARU</span><span class="auto-style7"><br />
				<span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">
				Jl. Panglima Batur No.2, Loktabat Utara, Kec. Banjarbaru Utara, 
				Kota Banjar Baru, Kalimantan Selatan 70711</span></span></strong></td>
			</tr>
		</table>
		
		<strong>
		<span class="auto-style2">LAPORAN HASIL ANALIS<br />
		</span>
		<span class="auto-style7"><em>(Report Of Analysis)<br />
		</em>Nomor : {{$data->nomor_sertifikat}}</span></strong>
		<br />
		<br />
		<table style="width: 100%">
			<tr>
				<td class="auto-style5" style="width: 556px"><strong>Pemohon</strong></td>
				<td style="width: 43px"><strong>:</strong></td>
				<td class="auto-style6"><strong>{{$data->pelanggan->nama}}</strong></td>
			</tr>
			<tr>
				<td class="auto-style5" style="width: 556px"><strong></strong></td>
				<td style="width: 43px"><strong></strong></td>
				<td class="auto-style6"><strong></strong></td>
			</tr>
			<tr>
				<td class="auto-style5" style="width: 556px"><strong>Alamat</strong></td>
				<td style="width: 43px"><strong>:</strong></td>
				<td class="auto-style6"><strong>{{$data->pelanggan->alamat}}</strong></td>
			</tr>
			<tr>
				<td class="auto-style5" style="width: 556px"><strong></strong></td>
				<td style="width: 43px"><strong></strong></td>
				<td class="auto-style6"><strong></strong></td>
			</tr>
			<tr>
				<td class="auto-style5" style="width: 556px"><strong>Telp</strong></td>
				<td style="width: 43px"><strong>:</strong></td>
				<td class="auto-style6"><strong>{{$data->pelanggan->telp}}</strong></td>
			</tr>
			<tr>
				<td class="auto-style5" style="width: 556px; height: 26px;">
				<strong></strong></td>
				<td style="width: 43px; height: 26px;"><strong></strong></td>
				<td class="auto-style6" style="height: 26px"><strong></strong></td>
			</tr>
			<tr>
				<td class="auto-style5" style="width: 556px"><strong>Yang Di Uji</strong></td>
				<td style="width: 43px"><strong>:</strong></td>
				<td class="auto-style6"><strong>{{$data->hasiluji->statusuji->pembayaran->pesanuji->jenis}}</strong></td>
			</tr>
			<tr>
				<td class="auto-style5" style="width: 556px"><strong></strong></td>
				<td style="width: 43px"><strong></strong></td>
				<td class="auto-style6"><strong></strong></td>
			</tr>
			<tr>
				<td class="auto-style5" style="width: 556px"><strong>Tanggal 
				Terima</strong></td>
				<td style="width: 43px"><strong>:</strong></td>
				<td class="auto-style6"><strong>{{\Carbon\Carbon::parse($data->hasiluji->statusuji->tanggal_terima)->format('d-m-Y')}}</strong></td>
			</tr>
			<tr>
				<td class="auto-style5" style="width: 556px"><strong></strong></td>
				<td style="width: 43px"><strong></strong></td>
				<td class="auto-style6"><strong></strong></td>
			</tr>
			<tr>
				<td class="auto-style5" style="width: 556px"><strong>Tanggal 
				Pengujian</strong></td>
				<td style="width: 43px"><strong>:</strong></td>
				<td class="auto-style6"><strong>{{\Carbon\Carbon::parse($data->hasiluji->tanggal_uji)->format('d-m-Y')}}</strong></td>
			</tr>
			<tr>
				<td class="auto-style5" style="width: 556px"><strong></strong></td>
				<td style="width: 43px"><strong></strong></td>
				<td class="auto-style6"><strong></strong></td>
			</tr>
			<tr>
				<td class="auto-style5" style="width: 556px"><strong>Hasil</strong></td>
				<td style="width: 43px"><strong>:</strong></td>
				<td class="auto-style6"><strong>{{$data->hasiluji->hasil_pengujian}}</strong></td>
			</tr>
		</table>
		<br />
		<table style="width: 100%">
			<tr>
				<td style="width: 718px">&nbsp;</td>
				<td>Banjarbaru, {{\Carbon\Carbon::parse($data->created_at)->format('d-M-Y')}},<br />
				Manajer Teknis<br />
				<br />
				<br />
				<br />
				Andi Gunawan</td>
			</tr>
		</table>
		<br />
		<br />
		</td>
	</tr>
</table>

</body>

</html>
