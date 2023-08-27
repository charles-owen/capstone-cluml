<?php
/** @file
 * Design 3 specification
 *
 * Returns a function that accepts an object of type Step
 * and configures it for an assignment 
 */

use \CL\Step\Step;

return function(Step $step) {
	$step->rewrite = true;      // Uses HTTP Rewrite
	$step->use_interact();
	/*
	 * Basic step definition
	 */
	$step->set_name('Design 3: Introduction to UML', 'Design 3');
	$step->set_icon('icon.png', '');

	/*
	 * The step sections and tasks 
	 */
	$step->add_section("page1", "Page 1");
	$step->add_section("page2", "Page 2");


	/*
	 * Grading categories
	 */
	$grading = $step->grading;
	 
	// Number is percent of total step grade
	$grading->add_step_quizzes(20);
	$grading->add_manual(20, "peerreview", "Peer Review Participation");
	$grading->add_manual(60, "design3task", "Task");
	
	$submission = $step->submissions->add_image("design3task", "Task");
};





