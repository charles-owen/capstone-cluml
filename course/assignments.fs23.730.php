<?php
/** @file
 * Course Assigment declarations
 */
 
return function(\CL\Course\Assignments $assignments) {

    $assignments->set_start('8/28/2023', 16);

    //
    // Calendar events
    //
    $assignments->add_calendar("Assignments Open", "mon-1");

    $assignments->add_calendar("University Holiday", "9/4/2023", null, false, "#808080");
    $assignments->add_calendar("Break Day", "10/23/2023");
    $assignments->add_calendar("Break Day", "10/24/2023");
    $assignments->add_calendar("University Holiday", "11/23/2023", null, false, "#808080");
    $assignments->add_calendar("University Holiday", "11/24/2023", null, false, "#808080");

    /*
     * Course grading categories and assignments
     */

    $designs = $assignments->add_category("designs", "Design Assignments", 20);
    $steps = $assignments->add_category("steps", "Step Assignments", 30);
    $projects = $assignments->add_category("projects", "Projects", 35);
    $exams = $assignments->add_category("exam", "Exam", 15);

    //
    // Design 3
    //
    $design = $designs->add_step("design3", "Design 3");
    $design->set_release('8/28/2023 1:00am', 'mon-3 11:55pm');
    $design->set_reviews_due('fri-3 11:55pm');
};
