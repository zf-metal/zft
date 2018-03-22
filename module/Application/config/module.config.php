<?php

$setting = array_merge_recursive(
    include "route.config.php",
    include "service.config.php",
    include "navigation.config.php",
    include "controller.config.php",
    include "view.config.php"
);

return $setting;

