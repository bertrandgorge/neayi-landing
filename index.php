<?php

if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) && substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == 'fr')
	$startpage = 'index_fr.html';
else
	$startpage = 'index_en.html';

header('Location: '. $startpage);
