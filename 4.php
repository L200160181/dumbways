<?php
function random() {
    echo substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyz', ceil(32/strlen($x)) )),1,32);
    }

//echo  generateRandomStringe();  // OR: generateRandomString(24)

function cetak($n) {
	$i = 0;
	for ($i = 0; $i <= $n-1; $i++)
	{
		echo random();
		?>
		<br>
		<?php

	}	
}

cetak(3);
?>
