<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>home</title>
<style>
p.padding
{
padding-top:25px;
padding-bottom:25px;
padding-right:50px;
padding-left:50px;
color:#612915;
}
</style>

	<style type="text/css">
	@import "jquery.countdown.css";
	#defaultCountdown { width: 240px; height: 45px; }
	#defaultCountUp { width: 240px; height: 45px; }
	</style>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.countdown.js"></script>
	<script type="text/javascript">
<!-- austDay.getFullYear() menghasilkan tahun saat ini ; austDay.getFullYear() +1 menghasilkan tahun depan,misal 2013+1 =2014  -->
<!--0 menghasilkan bulan pertama-->
<!--1 menghasilkan hari pertama-->
	$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 0, 4, 5);
	$('#defaultCountdown').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
	});
	</script>
		<script type="text/javascript">
<!-- austDay.getFullYear() menghasilkan tahun saat ini ; misal 2013 -->
<!--0 merupakan bulan pertama,1 merupakan hari pertama-->
	$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear(), 4 ,0);
	$('#defaultCountUp').countdown({since: austDay});
	$('#year').text(austDay.getFullYear());
	});
	</script>
</head>
<body>
	  <p class="padding">
	<font type="Blackkader ITC" size=16>
	Selamat datang di Web kami. Web ini di susun untuk memenuhi Tugas Besar Layanan Web.<br />
	</font>
	<font type="monotype corsiva" size=12>
	117006202 Andre Rizkiana Wandira<br />
	117006205 Wahyu Kartika Hadi<br />
	117006206 Dede Zuliana<br />
	117006215 Aditya Bayu Pradana<br />
	117006219 Iis Uswatun Hasanah<br />
	</font>
 </p>
 </body>
 </html>
