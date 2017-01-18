<?php

//define('CLI_SCRIPT', 1);
require '../../../config.php';

// Get cohort IDs

$cohorts = $DB->get_records('cohort');
$cohortIds = [];
foreach ($cohorts as $cohort) {
    if (in_array($cohort->idnumber, ['teachersALL', 'supportstaffALL', 'secretariesALL', 'adminALL'])) {
        $cohortIds[] = $cohort->id;
    }
}

print_r($cohortIds);

$cohortIds = implode(',', $cohortIds);

$DB->execute('UPDATE {block_mrbs_area} SET allowed_cohorts = ?', [$cohortIds]);
