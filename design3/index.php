<?php
require_once "../site.php";	// For all pages
$view = new \CL\Step\StepPageView($site, 'design3');
?>
<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<link href="../cl/course.css" type="text/css" rel="stylesheet" />
<?php echo $view->head(); ?>
</head>
<body>
<?php echo $view->header(); ?>

<p>This design assignment introduces UML and class modelling.</p>

<?php echo $view->due_present(); ?>

<?php echo $view->present_sections(); ?>

<?php echo $view->footer(); ?>
</body>
</html>
