<?php
/**
 * @file
 * Custom configuration for Interact! system
 */

return function(CL\Interact\Interact $interact) {
	$interact->add_canned("Error Help", "Did you try error help?");
	$interact->add_canned("Submit", "Can you please submit your solution so we can take a look at it?");
	$interact->add_canned("New Thread", "When asking a new question, please start a new Interact! thread rather than asking in the discussion of an existing one.");

	$error = <<<ERROR
If you ask about an error, always paste in the entire error message. Do not attempt to summarize
the error. You will almost certainly omit information we might have been able to use to help you solve the problem.
ERROR;

	$interact->add_canned("Asking about Errors", $error);

    $error = <<<ERROR
This Interaction has an Interact! rules violation. See the 
<a href="https://facweb.cse.msu.edu/cbowen/cse335/commonissues/rules.php" target="_blank">Rules for using Interact</a> for details.
If you are asking a question about an error, you must paste in the entire error message. Do not summarize and do you try
to type the error message in. If you ask questions like this one in the future,
we may close the interaction and not provide help in the future.
ERROR;



    $interact->add_canned("Rules Violation about errors", $error);
	
	$error = <<<ERROR
This Interaction has been closed due to a rules violation. See the 
<a href="https://facweb.cse.msu.edu/cbowen/cse335/commonissues/rules.php" target="_blank">Rules for using Interact</a> for details.
ERROR;

	$interact->add_canned("Closed due to Rules Violation", $error);

	$error = <<<ERROR
In general, we do not help with test failures unless you clearly indicate what test failed, what assertion in the test
failed, the expected and actual values for the test failure, and the line of code for the test that failed the
assertion. You are expected to make a significant effort to debug the test before asking us to help you do so. 
ERROR;

	$interact->add_canned('Debugging Tests', $error);

    $error = <<<ERROR
Have you tried the <a href="https://facweb.cse.msu.edu/cbowen/cse335/commonissues/cmake/">CMake issues page</a>? 
ERROR;

    $interact->add_canned('CMake issues', $error);

    $error = <<<ERROR
We do not provide help with crashes unless you tell us where <em>in your code</em> it is crashing. 
Run in the debugger until the program crashes. It will often crash in a library function somewhere.
Use the call stack on the left to determine where it was executing in your code.<br><br>
Look for null or invalid pointers, particularly "this", which should never be null (0).
ERROR;

    $interact->add_canned('Crashes statement', $error);
};
