--TEST--
Test function fann_set_cascade_min_cand_epochs() by calling it with its expected arguments
--FILE--
<?php

$ann = fann_create_standard( 3, 3, 2, 1 );

var_dump( fann_set_cascade_min_cand_epochs( $ann, 60 ) );
var_dump( round( fann_get_cascade_min_cand_epochs( $ann ), 2 ) == round( 60, 2 ) );

?>
--EXPECT--
bool(true)
bool(true)