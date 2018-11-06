w1 = file('adjektiv1.txt');
w2 = file('sub.txt');
w3 = file('genre.txt');
w4 = file('type.txt');
w5 = file('adjektiv2.txt');
w6 = file('substantiv.txt');
l1 = w1.length;
l2 = w2.length;
l3 = w3.length;
l4 = w4.length;
l5 = w5.length;
l6 = w6.length;

for (i = 0; i < 5; i++) {
	print(w1[array_rand(w1)] . " " . w2[rand(0,l2)] . w3[rand(0,l3)] . w4[rand(0,l4)] . " med " . w5[rand(0,l5)] . " " . w6[rand(0,l6)] . "<br>");
}
function print_a($a) {
	foreach $r in $a {
		print($r.'\n');
	}
}
?>

<html>
<head><title>RipperDoc's Kampanjgenerator</title></head>
<style type="text/css"><!--
textarea {float: left; background: #999;}
-->
</style>
<body>
<form>
<textarea cols=10 rows=20></textarea>
<textarea cols=10 rows=20></textarea>
<textarea cols=10 rows=20></textarea>
<textarea cols=10 rows=20></textarea>
<textarea cols=10 rows=20></textarea>
<textarea cols=10 rows=20></textarea>
</form>
</body>
</html>