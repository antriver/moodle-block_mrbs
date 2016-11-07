<?php

require_once(dirname(dirname(dirname(__FILE__))).'/config.php'); //for Moodle integration
include("web/config.inc.php");
include "web/functions.php";
require_once('web/mrbs_auth.php');
include "web/mincals.php";

$strmrbs = get_string('blockname','block_mrbs');

$PAGE->set_context(context_system::instance());
$PAGE->set_url('/blocks/mrbs');
$PAGE->set_heading($strmrbs);
$PAGE->set_title($strmrbs);
require_login();

echo print_header_mrbs(null, null, null, null);

?>

<style type="text/css">

	.mrbsCol {
		margin:30px 0;
		-webkit-box-sizing:border-box;
		-mox-box-sizing:border-box;
		box-sizing:border-box;
		width:50%;
		float:left;
	}
		.mrbsCol:first-child {
			padding-right:15px;
		}
		.mrbsCol:last-child {
			padding-left:15px;
		}

	form[name=areaChangeForm] select {
		display:block;
		width:100%;
		-webkit-box-sizing:border-box;
		-mox-box-sizing:border-box;
		box-sizing:border-box;
		margin-top:10px;
	}
	</style>

<div>
<div class="mrbsCol">

	<h2><i class="fa fa-key"></i> To Book A Room...</h2>

	Select an area:

	<?php
	echo make_area_select_html(new moodle_url('/blocks/mrbs/web/day.php'), null, null, null, null);
	?>

</div>

<?php if (has_capability('block/mrbs:bookvehicles', context_system::instance())) { ?>
<div class="mrbsCol">

	<h2><i class="fa fa-car"></i> To Book A Vehicle...</h2>

	<div class="text-center">
		<a class="btn" href="web/edit_vehicle_entry.php"><i class="fa fa-car"></i> Click Here To Book A Vehicle</a>
	</div>

	<p style="text-align:center;">
		<a href="web/week.php?area=<?=MRBS_VEHICLE_AREA?>">View vehicle bookings this week</a>
	</p>

</div>
<? } ?>

</div>
<div class="clear"></div>

<?php
echo $OUTPUT->footer();
