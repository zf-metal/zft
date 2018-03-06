<?php

$setting = array_merge_recursive(
include "navigation.config.php",
include "view.config.php"
);

return $setting;
