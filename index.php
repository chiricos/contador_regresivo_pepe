<!DOCTYPE html>
<html>
<head>
	<title>Lanzamiento pepe</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/normalice.css" >
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<link rel="stylesheet" href="plugins/fonts.css" type="text/css" charset="utf-8" />
	<script src="js/script.js"></script>
</head>
<body>

<div align="center">
<script languaje="JavaScript">
function getTime() {
now = new Date();
y2k = new Date("Jul 1 2016 12:00:00");
days = (y2k - now) / 1000 / 60 / 60 / 24;
daysRound = Math.floor(days);
hours = (y2k - now) / 1000 / 60 / 60 - (24 * daysRound);
hoursRound = Math.floor(hours);
minutes = (y2k - now) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound);
minutesRound = Math.floor(minutes);
seconds = (y2k - now) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
secondsRound = Math.round(seconds);
sec = (secondsRound == 1) ? " segundo" : " segundos";
min = (minutesRound == 1) ? " minuto:" : " minutos: ";
hr = (hoursRound == 1) ? " hora:" : " horas:";
dy = (daysRound == 1) ? " día:" : " d&iacute;as: "
document.getElementById("counter").innerHTML =  daysRound + dy + hoursRound + hr + minutesRound + min + secondsRound + sec;
newtime = window.setTimeout("getTime();", 1000);
}
</script>
<body onLoad="getTime()">
</div>
<div class="content">

	<p style="color:#000000;text-align:center;" id="counter">
		<img class="logo" src="images/logo-color.png" />
	</p>
</div>

</body>
</html>