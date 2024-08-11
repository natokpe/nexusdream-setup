<?php
declare(strict_types = 1);

use NatOkpe\Wp\Plugin\ImpactSetup\Engine;

$pages = get_pages([
    'sort_order'  => 'ASC',
    'sort_column' => 'ID',
    'post_status' => ['publish'],
]);

$pages   = ! is_array( $pages ) ? [] : $pages;
$opt_pgs = [];

foreach ($pages as $_ => $__) {
    $opt_pgs[ $__->ID ] = ( string ) $__->ID . ' :: ' . $__->post_title;
}

return $opt_pgs;
