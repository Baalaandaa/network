<?php

require_once"lib/database_class.php";
DB::select("select * from users");
DB::ins('nt', '1');