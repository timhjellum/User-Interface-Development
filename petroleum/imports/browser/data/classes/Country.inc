<?php
class Country extends localDatabase
{
var              $jsonType = null;
var $sql      = <<< SQL
SELECT fipscode AS id, name, region_id, origin_type, opec, bitmap_index, jvm_region_id, origin_type || '_' || fipscode as orign_id,
decode(fipscode, 'WORLD', '1', name) as "ORDER"
FROM petimp.countries
ORDER BY decode(fipscode, 'WORLD', '1', name)
SQL;