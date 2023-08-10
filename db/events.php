<?php
defined('MOODLE_INTERNAL') || die();

$observers = array(
    array(
        'eventname' => '\core\event\user_loggedin',
        'callback' => 'local_templateevent\templateevent_observer::user_loggedin',
    ),
    array(
        'eventname' => '\core\event\user_updated',
        'callback' => 'local_templateevent\templateevent_observer::user_updated',
    ),
    array(
        'eventname' => 'core\event\user_created',
        'callback' => 'local_templateevent\templateevent_observer::user_created',
    )       
);
