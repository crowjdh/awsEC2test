<?php
include('simple_html_dom.php');
/*$html = file_get_html("http://businfo.daegu.go.kr/ba/route/rtbsarr.do?act=findByArr&bsId=7011010400&bsNm=blabla&routeId=4050002001&routeNo=&moveDir=1&winc_id=7011010400");
*/
$html = file_get_html("http://businfo.daegu.go.kr/ba/route/rtbsarr.do?act=findByArr&bsId=7011010400&bsNm=blabla&routeId=3000410000&routeNo=&moveDir=1&winc_id=7011010400");

/*$buses = $html->find('div[id=busseq]');*/
$buses = $html->find('table[class=list]');
/*$array = $html->find('tr[class=body_row2]');*/

for($i = 0; $i < count($buses); $i++) {
	$rowarr = $buses[$i]->find('tr[class=body_row2]');
	if (count($rowarr) == 4) {
		$idx = 2;
	}
	else {
		$idx = 3;
	}
	/*echo $idx;
	foreach($rowarr as $element) {
		echo $element->plaintext;
		echo "<br>";
	}*/

	$time_left_str = $rowarr[$idx]->plaintext;
	$stop_left_str = $rowarr[$idx+1]->plaintext;
	echo $time_left_str;
	echo "<br>";
	echo $stop_left_str;
	echo "<br>";
}
?>
