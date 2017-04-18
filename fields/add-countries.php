
<?php

/*Add new countries here if you need 
& if you want to add states for this newly added countries, you can do it simply adding states on "add-states.php"

Example: 
$countries['c1'] = 'country1';
$countries['c2'] = 'country2';
$countries['c3'] = 'country3';
$countries['c4'] = 'country4';

*/


add_filter( 'erp_countries', function ( $countries ) {

    $countries['te'] = 'test';


  return $countries;
});


