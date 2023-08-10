<?php
namespace local_templateevent;

require_once($CFG->libdir.'/gdlib.php');
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Loggedin event observers.
 *
 * @package    local_templateevent
 * @author     Dominique Palumbo
 * @copyright  2023 Dominique Palumbo
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

/**
 * Loggedin event observers.
 *
 * @package    local_templateevent
 * @author     Dominique Palumbo
 * @copyright  2023 Dominique Palumbo
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class templateevent_observer {
    /**
     * Event processor - user loggedin
     *
     * @param \core\event\user_loggedin $event
     * @return bool
     */
    public static function user_loggedin(\core\event\user_loggedin $event) {
        global $DB, $CFG, $USER;
        mtrace('user_loggedin');
        return true;
    }
    

    /**
     * Event processor - user updated
     *
     * @param \core\event\user_updated $event
     * @return bool
     */
    public static function user_updated(\core\event\user_updated $event) {
        global $DB, $CFG;
        mtrace('user_updated');
    }

    /**
     * Event processor - user loggedin
     *
     * @param \core\event\user_created $event
     * @return bool
     */
    public static function user_created(\core\event\user_created $event) {
        global $DB, $CFG;
        mtrace('user_created');
    }
}
