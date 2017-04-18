<?php

/*Add new states here for existing or newly added countries in WP ERP
& if you want to add states for this newly added countries, you can do it simply adding states on "add-states.php"

Example: 
 $states['Place the shortcode of the country'] = [
        'Write short code for a state' => 'State Name',
        .............................
        .............................
        ];


Note: You'll find out short code of countries on "wp-content\plugins\erp\i18n\countries.php"
*/



add_filter( 'erp_states', function ( $states ) {

    $states['NL'] = [
        'DR' => 'Drenthe',
        'FL' => 'Flevoland',
        'FR' => 'Fryslân (fy)',
        'GE' => 'Gelderland',
        'GR' => 'Groningen',
        'LI' => 'Limburg',
        'NB' => 'Noord-Brabant',
        'NH' => 'Noord-Holland',
        'OV' => 'Overijssel',
        'UT' => 'Utrecht',
        'ZE' => 'Zeeland',
        'ZH' => 'Zuid-Holland',
    ];

    $states['CO'] = [
        'AN' => 'Antioquia',
        'BO' => 'Bolívar',
        'BOY' => 'Boyacá',
        'CA' => 'Cauca',
        'CU' => 'Cundinamarca',
        'MA' => 'Magdalena',
        'PA' => 'Panamá',
        'SA' => 'Santander',
        'TO' => 'Tolima',
    ];
    $states['NG'] = [
        'AB' => 'Abia',
        'AD' => 'Adamawa',
        'AN' => 'Anambra',
        'AK' => 'Akwa Ibom',
        'BA' => 'Bauchi',
        'BAY' => 'Bayelsa',
        'BE' => 'Benue',
        'BO' => 'Borno',
        'CR' => 'Cross River',
        'DE' => 'Delta',
        'EB' => 'Ebonyi',
        'EN' => 'Enugu',
        'ED' => 'Edo',
        'EK' => 'Ekiti',
        'GO' => 'Gombe',
        'IM' => 'Imo',
        'JI' => 'Jigawa',
        'KA' => 'Kaduna',
        'Kan' => 'Kano',
        'KAT' => 'Katsina',
        'KE' => 'Kebbi',
        'KO' => 'Kogi',
        'KW' => 'Kwara',
        'LA' => 'Lagos',
        'NA' => 'Nasarawa',
        'NI' => 'Niger',
        'OG' => 'Ogun',
        'ON' => 'Ondo',
        'OS' => 'Osun',
        'OY' => 'Oyo',
        'PL' => 'Plateau',
        'RI' => 'Rivers',
        'SO' => 'Sokoto',
        'TA' => 'Taraba',
        'YO' => 'Yobe',
        'ZA' => 'Zamfara',

    ];


    return $states;

} );

?>








