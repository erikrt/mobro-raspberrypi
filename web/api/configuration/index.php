<?php

include '../../constants.php';

header("Content-Type: text/plain");

echo file_get_contents(Constants::FILE_MOBRO_CONFIG);
