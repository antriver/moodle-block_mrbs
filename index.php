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

print_header_mrbs(null, null, null, null);

$areas = mrbs_get_bookable_areas();

echo '<div id="mrbs-index" class="center">';

foreach ($areas as $area) {
    echo '<a class="btn btn-default" href="web/day.php?area='.$area->id.'">'.$area->area_name.'</a>';
}

echo '</div>';

echo $OUTPUT->footer();
