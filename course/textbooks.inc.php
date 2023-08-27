<?php
/** @file
 * Function that defines the course textbooks
 *
 * This file is only loaded if there is a need for the
 * textbook information.
 */

return function(CL\Course\Section $section) {
	$textbook = new \CL\Course\Textbook("Object-Oriented Modeling and Design with UML", "Blaha and Rumbaugh", "Pearson/Prentice-Hall", "2005", "images/blaha100.png", "Object-Oriented Modeling and Design with UML");
	$section->add_textbook($textbook);

	$textbook = new \CL\Course\Textbook("Design Patterns: Elements of Reusable Object-oriented Software", "Gamma, Helm,
Johnson, and Vlissides", "Addison Wesley", "1995", "images/designpatterns100.png", "Design Patterns");
	$section->add_textbook($textbook);
};
