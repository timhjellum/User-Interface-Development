<?php
class OpecNonOpec extends localDatabase
{
var              $jsonType = null;
var $sql      = <<< SQL
SELECT id, name, origin_type, bitmap_index, origin_type || '_' || id as origin_id,
decode(id, 'WORLD', '1', name) as "ORDER"
FROM petimp.opec_non_opec
ORDER BY decode(id, 'WORLD', '1', name)
SQL;