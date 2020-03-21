<?php
function handshake($n) {
	$hasil =0;
	while($n>0){
		$n = $n-1;
		$hasil = $hasil + $n;
	}
	echo $hasil;
}
handshake(6);
