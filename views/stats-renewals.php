<?php

use SKCDEV\EDD_Stats\Stats;

$stats_object = Stats::instance();

$stats = $stats_object->get_historical_stats( [
	'order_type'          => 'sale',
	'order_status'        => 'edd_subscription',
	'subscription_status' => [
		'active',
		'cancelled',
		'expired',
	],
	'comped'              => false,
] );
?>

<h3>Renewals</h3>

<?php $stats_object->render_table( $stats ); ?>

