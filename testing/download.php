<?php $fp = fopen('jsondownloadfile.json', 'a+');
	fwrite($fp, print_r($encode, true));
	fclose($fp);?>