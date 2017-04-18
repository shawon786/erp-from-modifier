<?php
/**
Plugin Name: ERP Form Modifier
Plugin URI: www.wperp.com
Description: Simple plugin that will add more states, countries & life stages in HRM, CRM & Accounting forms
Author: Shawon Chowdhury
Version: 1.0
Author URI: www.shawoncse.com
TextDomain: erp-form-modifier
*/


// don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;



// including necessary files
foreach (glob("fields/*.php") as $fieldss)
{
    include $fieldss;
}

