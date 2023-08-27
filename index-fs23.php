<!DOCTYPE html>
<html lang="en-US">
<head>
<link href="cl/site.css" type="text/css" rel="stylesheet" />
<link href="cl/course.css" type="text/css" rel="stylesheet" />
<?php echo $view->head(); ?>
<style>
    div.office-hours {
        display: table;
        margin: -1em 0 0 0;
        font-size: 0.9em;
    }

    div.office-hours>div {
        display: table-row;
    }

    div.office-hours>div>div {
        display: table-cell;
        padding-right: 0.5em;
    }

    div.office-hours>div>div:first-child {
        text-align: right;
        font-style: italic;
    }

    .mac {
      color:blue;
    }

    .pc {
      color:red;
    }

</style>	
</head>
<body>
<?php echo $view->header(false); ?>
<div class="cl-course-home">
<!--
 - The main block at the top of the page
 -->
<div class="cl-main">
  <div>

    <div class="cl-controls">

      <?php
      echo $view->logout_button();
      echo $view->interact_button();
      echo $view->management_controls();
      if($user->staff) echo '<p class="cl-home-control center"><a href="staffinfo">Staff Info</a></p>';
      ?>

      <!-- This version appears only on mobile devices -->
      <p class="mobile"><a href="https://www.facebook.com/pages/Dr-Owen-Community/130467223718047"><img src="images/facebook-group.png" width="100" height="68" alt="Dr. Owen Community" /></a></p>

    </div>

    <p class="cl-single-space"><?php echo $section->season . ', ' . $section->year; ?>, <span id="cl-site-time"></span><br />
      Greetings <?php echo $user->displayName; ?> </p>

	  
      <p><strong><a href="http://www.cse.msu.edu/~cbowen">Dr. Charles B. Owen</a></strong>, Instructor,
          <a class="email" href="mailto:cbowen@cse.msu.edu">cbowen@msu.edu</a><br>
          Office Hours, 3134 EB: 4:00-5:00pm Monday and Wednesday and by request<br>
          <a href="https://msu.zoom.us/j/92031735332" target="_blank">Zoom Meetings</a>, Passcode: 391212<br>
          Zoom Office Hours, 4:00-5:00pm Thursday and by request
      </p>

      <p><strong><a href="https://www.cse.msu.edu/tart/profile/anik-momtaz">Dr. Anik Momtaz</a></strong>, Instructor,
          <a class="email" href="mailto:momtazan@msu.edu">momtazan@msu.edu</a><br>
          Office Hours, <br>
      </p>
    <p><em>Teaching Assistants</em><br>
        Caitlin Coggins, <a href="mailto:cogginsc@msu.edu">cogginsc@msu.edu</a><br>
        Md Alamin, <a href="mailto:alaminmd@msu.edu">alaminmd@msu.edu</a><br>
        Daniyal Dar, <a href="mailto:dardaniy@msu.edu">dardaniy@msu.edu</a><br>
        Matt DiRisio, <a href="mailto:dirisiom@msu.edu">dirisiom@msu.edu</a><br>
        Guangliang Liu, <a href="mailto:liuguan5@msu.edu">liuguan5@msu.edu</a>
    </p>

<?php echo Toggle::begin("Expand for helproom schedules and undergraduate learning assistants.", "p"); ?>
    <p>*** pending ***</p>
<!--       <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <caption>
            <strong>In Person Helprooms in 1230 Engineering</strong><br>
          </caption>
          <tr style="background-color:#0496FF;">
              <th valign="top"><p align="center">Day</p></th>
              <th valign="top"><p align="center">7PM-8PM</p></th>
              <th valign="top"><p align="center">8PM-9PM</p></th>
              <th valign="top"><p align="center">9PM-10PM</p></th>
          </tr>

          <tr>
              <td valign="top"><p align="center">Sunday</p></td>
              <td valign="top"><p align="center">Simon, Dongyu</p></td>
              <td valign="top"><p align="center">Simon, Dongyu</p></td>
              <td valign="top"><p align="center">Dongyu</p></td>
          </tr>

          <tr>
              <td valign="top"><p align="center">Monday</p></td>
              <td valign="top"><p align="center">Evan B, Jacob</p></td>
              <td valign="top"><p align="center">Evan B, Jacob, Evan M</p></td>
              <td valign="top"><p align="center">Caitlin, Cameron, Evan M</td>
          </tr>

          <tr>
              <td valign="top"><p align="center">Tuesday</p></td>
              <td valign="top"><p align="center">Conner, Mehmet</p></td>
              <td valign="top"><p align="center">Conner, Mehmet</p></td>
              <td valign="top"><p align="center">Mehmet, Jabob</td>
          </tr>
         

          <tr>
              <td valign="top"><p align="center">Wednesday</p></td>
              <td valign="top"><p align="center">Dongyu, Caitlin</p></td>
              <td valign="top"><p align="center">Dongyu, Evan M</p></td>
              <td valign="top"><p align="center">Cameron, Evan M</td>
          </tr>

          <tr>
              <td valign="top"><p align="center">Thursday</p></td>
              <td valign="top"><p align="center">Clarence, Liu</p></td>
              <td valign="top"><p align="center">Clarence, Liu</p></td>
              <td valign="top"><p align="center">Cameron, Conner</td>
          </tr>
      </table>

      <br>


      <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <caption>
            <strong>Online Helprooms (see below for information)</strong><br>
          </caption>
          <tr style="background-color:#0496FF;">
              <th valign="top"><p align="center">Day</p></th>
              <th valign="top"><p align="center">7PM-8PM</p></th>
              <th valign="top"><p align="center">8PM-9PM</p></th>
              <th valign="top"><p align="center">9PM-10PM</p></th>
          </tr>

          <tr>
              <td valign="top"><p align="center">Sunday</p></td>
              <td valign="top"><p align="center">Mehmet, Daniyal</p></td>
              <td valign="top"><p align="center">Bella, Cameron, Yousif</p></td>
              <td valign="top"><p align="center">Bella, Cameron, Yousif</p></td>
          </tr>

          <tr>
              <td valign="top"><p align="center">Monday</p></td>
              <td valign="top"><p align="center">Shaojie, Mehmet</p></td>
              <td valign="top"><p align="center">Shaojie, Nick, Simon, Bella</p></td>
              <td valign="top"><p align="center">Bella, Daniyal</td>
          </tr>

          <tr>
              <td valign="top"><p align="center">Tuesday</p></td>
              <td valign="top"><p align="center">Clarence, Evan B</p></td>
              <td valign="top"><p align="center">Yousif, Liu</p></td>
              <td valign="top"><p align="center">Yousif, Liu, Mary</td>
          </tr>
         

          <tr>
              <td valign="top"><p align="center">Wednesday</p></td>
              <td valign="top"><p align="center">Shaojie, Evan B</p></td>
              <td valign="top"><p align="center">Simon, Nick, Shaojie</p></td>
              <td valign="top"><p align="center">Conner, Jacob</td>
          </tr>

          <tr>
              <td valign="top"><p align="center">Thursday</p></td>
              <td valign="top"><p align="center">Mary, Caitlin</p></td>
              <td valign="top"><p align="center">Mary, Caitlin</p></td>
              <td valign="top"><p align="center">Mary, Caitlin</td>
          </tr>
      </table> -->

<p>This is the connection information for the Zoom help room:</p>
      <p>Zoom: <a href="https://msu.zoom.us/j/93107822519">https://msu.zoom.us/j/93107822519</a><br>
          Meeting ID: 931 0782 2519<br>
          Passcode: 032142</p>

		<p>During help room hours, this link will take you to the Zoom meeting room with staff available for online help. If you have not previously done so, you will have to install Zoom on your computer. </p>

		<p>The Zoom login will be your MSU credentials (not EGR or CSE). Once you log in, you will be placed in a waiting list and course staff will respond in order of arrival.</p>


    <br>


<!-- <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <caption>
      <strong>Interact Hours</strong><br>
    </caption>
    <tr style="background-color:#0496FF;">
        <th valign="top"><p align="center">Day</p></th>
        <th valign="top"><p align="center">11am</p></th>
        <th valign="top"><p align="center">Noon</p></th>
        <th valign="top"><p align="center">1pm</p></th>
        <th valign="top"><p align="center">2pm</p></th>
        <th valign="top"><p align="center">3pm</p></th>
        <th valign="top"><p align="center">4pm</p></th>
        <th valign="top"><p align="center">5pm</p></th>
        <th valign="top"><p align="center">6pm</p></th>
        <th valign="top"><p align="center">7pm</p></th>
        <th valign="top"><p align="center">8pm</p></th>
        <th valign="top"><p align="center">9pm</p></th>
        <th valign="top"><p align="center">10pm</p></th>
    </tr>

    <tr>
        <td valign="top"><p align="center">Sunday</p></td>
        <td valign="top"><p align="center">Mary</p></td>
        <td valign="top"><p align="center">Mary</p></td>
        <td valign="top"><p align="center">Simon</p></td>
        <td valign="top"><p align="center">Simon</p></td>
        <td valign="top"><p align="center">Daniyal</p></td>
        <td valign="top"><p align="center">Daniyal</p></td>
        <td valign="top"><p align="center">Jacob</p></td>
        <td valign="top"><p align="center">Yousif</p></td>
        <td valign="top"><p align="center">Yousif</p></td>
        <td valign="top"><p align="center">Clarence</p></td>
        <td valign="top"><p align="center">Clarence</p></td>
        <td valign="top"><p align="center">Cameron</p></td>
    </tr>

    <tr>
        <td valign="top"><p align="center">Monday</p></td>
        <td valign="top"><p align="center">Nick</p></td>
        <td valign="top"><p align="center">Nick</p></td>
        <td valign="top"><p align="center">Nick</p></td>
        <td valign="top"><p align="center">Evan B</p></td>
        <td valign="top"><p align="center">Evan B</p></td>
        <td valign="top"><p align="center">Conner</p></td>
        <td valign="top"><p align="center">Conner</p></td>
        <td valign="top"><p align="center">Shaojie</p></td>
        <td valign="top"><p align="center">Caitlin</p></td>
        <td valign="top"><p align="center">Mehmet</p></td>
        <td valign="top"><p align="center">Mehmet</p></td>
        <td valign="top"><p align="center">Bella</p></td>
    </tr>

    <tr>
        <td valign="top"><p align="center">Tuesday</p></td>
        <td valign="top"><p align="center">Caitlin</p></td>
        <td valign="top"><p align="center">Caitlin</p></td>
        <td valign="top"><p align="center">Liu</p></td>
        <td valign="top"><p align="center">Liu</p></td>
        <td valign="top"><p align="center">Shaojie</p></td>
        <td valign="top"><p align="center">Shaojie</p></td>
        <td valign="top"><p align="center">Clarence</p></td>
        <td valign="top"><p align="center">Clarence</p></td>
        <td valign="top"><p align="center">Evan M</p></td>
        <td valign="top"><p align="center">Evan M</p></td>
        <td valign="top"><p align="center">Cameron</p></td>
        <td valign="top"><p align="center">Cameron</p></td>
    </tr>
   

    <tr>
        <td valign="top"><p align="center">Wednesday</p></td>
        <td valign="top"><p align="center">Nick</p></td>
        <td valign="top"><p align="center">Nick</p></td>
        <td valign="top"><p align="center">Nick</p></td>
        <td valign="top"><p align="center">Conner</p></td>
        <td valign="top"><p align="center">Bella, Conner</p></td>
        <td valign="top"><p align="center">Evan B</p></td>
        <td valign="top"><p align="center">Evan B</p></td>
        <td valign="top"><p align="center">Shaojie</p></td>
        <td valign="top"><p align="center">Mehmet</p></td>
        <td valign="top"><p align="center">Mehmet</p></td>
        <td valign="top"><p align="center">Mehmet</p></td>
        <td valign="top"><p align="center">Jacob</p></td>
    </tr>

    <tr>
        <td valign="top"><p align="center">Thursday</p></td>
        <td valign="top"><p align="center">Dongyu</p></td>
        <td valign="top"><p align="center">Caitlin</p></td>
        <td valign="top"><p align="center">Bella</p></td>
        <td valign="top"><p align="center">Bella</p></td>
        <td valign="top"><p align="center">Cameron</p></td>
        <td valign="top"><p align="center">Evan M</p></td>
        <td valign="top"><p align="center">Evan M</p></td>
        <td valign="top"><p align="center">Clarence</p></td>
        <td valign="top"><p align="center">Daniyal</p></td>
        <td valign="top"><p align="center">Daniyal</p></td>
        <td valign="top"><p align="center">Dongyu</p></td>
        <td valign="top"><p align="center">Dongyu</p></td>
    </tr>

    <tr>
        <td valign="top"><p align="center">Friday</p></td>
        <td valign="top"><p align="center">Mary</p></td>
        <td valign="top"><p align="center">Simon, Mary</p></td>
        <td valign="top"><p align="center">Simon</p></td>
        <td valign="top"><p align="center">Cameron</p></td>
        <td valign="top"><p align="center">Dongyu</p></td>
        <td valign="top"><p align="center">Dongyu</p></td>
        <td valign="top"><p align="center">Yousif</p></td>
        <td valign="top"><p align="center">Yousif</p></td>
        <td valign="top"><p align="center">Liu</p></td>
        <td valign="top"><p align="center">Liu</p></td>
        <td valign="top"><p align="center">Jacob</p></td>
        <td valign="top"><p align="center">Jacob</p></td>
    </tr>

    <tr>
        <td valign="top"><p align="center">Saturday</p></td>
        <td valign="top"><p align="center">-</p></td>
        <td valign="top"><p align="center">-</p></td>
        <td valign="top"><p align="center">-</p></td>
        <td valign="top"><p align="center">-</p></td>
        <td valign="top"><p align="center">Yousif</p></td>
        <td valign="top"><p align="center">Yousif</p></td>
        <td valign="top"><p align="center">Daniyal</p></td>
        <td valign="top"><p align="center">Daniyal</p></td>
        <td valign="top"><p align="center">Liu</p></td>
        <td valign="top"><p align="center">Liu</p></td>
        <td valign="top"><p align="center">-</p></td>
        <td valign="top"><p align="center">-</p></td>
    </tr>
</table> -->


    <h3>Undergraduate Learning Assistants</h3>

<?php
$staff = $view->staff($section);
$str = '';
foreach($staff as $member) {
  if($member->role === \CL\Course\Member::ULA || $member->role === \CL\Course\Member::GRADER) {
    if(strlen($str) > 0) {
      $str .= '<br>';
    }

    $str .= <<<HTML
$member->displayName, <a href="mailto:$member->email">$member->email</a>
HTML;
  }
}

echo "<p class=\"indent\">$str</p>";
?>

    <p>Undergraduate Learning Assistants are available to answer questions online, provide help via Zoom, and
      do much of the grading in this course.</p>

	  <?php echo Toggle::end(); ?>

    <?php echo Toggle::begin("Expand for course description", "p"); ?>
    <p>This is the home page for CSE 335: Object-oriented Software Development.  CSE 335 is taught in the fall and spring of every year.&nbsp; </p>

    <p>This course will introduce students to the development of object-oriented software with emphasis on design concerns that dominate the development of such software. These concerns include reliability, reusability, maintainability, and ease of extension and contraction. Students will learn how to use object-oriented design techniques to address these concerns. The course emphasizes explicit modeling and critical analysis of designs prior to implementation. Students will learn heuristic methods to design for integration and changes in requirements. </p>

    <p>This course focuses on implementation techniques, analysis and design heuristics, and best practices that have proved useful in making the software-development process rigorous, systematic, repeatable, and manageable. Students will be introduced to current methods, which they will apply to programming and design projects.</p>

    <p>Finally, this course is primarily about design, which is very difficult to learn by reading a book or cramming for a test. Design problems involve choices and tradeoffs, and often there is no single "right" answer. The instructor's role in such a course is to set up an environment that will help students to confront and appreciate difficult design issues and to provide critical and continual feedback to students on their choices. It is the student's responsibility to actively participate in this environment and to reflect and respond to the issues that are discussed. </p>

    <p>Objectives:	</p>
    <ul>
      <li>Students will learn methods for structuring computer programs using object-oriented methodologies.</li>
      <li>Students will gain experience using object-oriented methods include inheritance, polymorphism.</li>
      <li>Students will learn how to apply design patterns to the solution of programming problems.</li>
      <li>Students learn about professional programming methodologies and ethics, and effective communication.</li>
    </ul>

	  <?php echo Toggle::end(); ?>

    <p>The course <a href="http://www.cse.msu.edu/~cse335/<?php echo $section->semesterLC; ?>/syllabus.php" target="_blank">syllabus</a> is available.</p>

<!--     <h1 class="center">Please complete the <a href="sirs">online SIRS</a><br>&nbsp;</h1> -->

<?php
if($user->atLeast(CL\Course\Member::STUDENT)) {
echo <<<HTML
<p class="shoutout">Please see the page <a href="startup">Semester Startup</a>.</p>
HTML;
} else {
echo <<<HTML
<p class="centerbox comp">If you see this message, you are accessing the course site as a guest user.
If you have enrolled in the course and are seeing this message, your enrollment
has not yet been transferred from the enrollment system to the course web site.
Please contact <a href="mailto:cbowent@msu.edu">Dr. Owen</a> to ensure that transfer takes place.</p>
HTML;
}
?>

<?php echo $view->hot(); ?>

<!--<div class="centerbox secondb">
  <p>Please schedule 10 minute slots for Project 2 design reviews by Dr. Owen or Dr. Rupp. Be sure you
      submit your design before coming to the review session so we can easily view it or you can
      share your screen if you prefer.</p>
  <p class="center"><a href="cl/schedule/project2owen">Project 2 Design Reviews Scheduler: Owen</a><br>
      <a href="cl/schedule/project2rupp">Project 2 Design Reviews Scheduler: Rupp</a></p>
  <p>You can only schedule one slot at a time. If you need to come back for a second review you will need to reschedule later.
      You can reschedule after your current slot time has expired. Please ensure at least two team members come to the design review meeting.</p>
</div>
-->
<?php echo $view->present_calendar(); ?>

    <div>

      <div class="cl-twocol cl-nopadding-lr">
        <div class="cl-card">
          <h2>Course resources</h2>
          <ul>
            <li class="star"><a href="commonissues">Common and Frequent Problems</a></li>
            <LI class="star"><A href="software">Software Requirements for this Course</A></LI>
            <LI class="star"><A href="staff">Course Staff</A><br />&nbsp;</LI>

            <LI><a href="http://www.cse.msu.edu/~cse335/<?php echo $section->semesterLC; ?>/syllabus.php" target="_blank">Course syllabus</a>
            <LI><a href="handbook">Course Handbook</a></LI>
            <LI><a href="doxygen">Using Doxygen</a></LI>
            <LI><a href="commonissues/gettinghelp.php">Getting Help</a></LI>

          </ul>
        </div>

        <div class="cl-card">
          <H2>Site Tools and Resources</H2>
		    <?php echo $view->enrolled_tools(); ?>
          <ul>
            <li><a href="startup/succeed.php">Succeeding in CSE335</a></li>
            <li><a href="faq">Frequently Asked Questions</a></li>
           <!-- <li><a href="lib/review/peerreview.php">About the Peer Review System</a></li> -->
            <li><a href="credits">  Site Credits</a></li>
          </ul>

        </div>
      </div>

    </div>

  </div> <!-- main/.left -->

</div> <!-- main -->

<!--
 - The various lists
 -->
<div class="cl-lists">
  <div class="cl-twocol">
    <div class="cl-card">
      <h2>Design Assignments</h2>
		  <?php echo $view->assignments('designs'); ?>
      <p>When two dates are displayed, the first is the due date
        and the second is the last date for peer reviews.</p>
    </div>

    <div class="cl-card">
      <h2>Step Assignments</h2>
		  <?php echo $view->assignments('steps'); ?>
    </div>
  </div>

  <div class="cl-twocol">
    <div class="cl-card">
      <h2>Exam</h2>
        <?php echo $view->assignments('exam'); ?>
    </div>

    <div class="cl-card">
      <h2>Projects</h2>
      <?php echo $view->assignments('projects'); ?>
    </div>

  </div>

  <div class="cl-twocol">
    <div class="cl-card">

      <h2>CLion and wxWidgets</h2>
      <ul>
        <li><a href="software/clion">Configuring CLion</a></li>
        <li><a href="software/clion/toolchains">CLion Toolchains</a></li>
        <li><a href="software/clion/profiles">CLion CMake Profiles</a></li>
        <li><a href="software/clion/configurations">CLion Project Configurations</a></li>
        <li><a href="commonissues/cmake">Common CMake problems</a></li>
        <li><a href="test-project">Adding the Tests project</a></li>
        <li><a href="git">Using GIT</a></li>
        <li><a href="wx/menus">wxWidgets Menus</a></li>
        <li><a href="wx/wxgraphics">Using wxGraphicsContext</a></li>
        <li><a href="wx/shutdown-on-close">Animation Shutdown on Close</a></li>
        <li><a href="wx/release">wxWidgets Release Builds</a></li>
        <!-- <LI><a href="debugging/index.php">Debugging</a></LI> -->
      </ul>

      <h2>C++</h2>
      <ul>
        <LI><a href="howto">C++ How To page</a></LI>
        <LI><a href="commonissues/copyandclone.php">Copy Constructor and Cloning Examples</a></LI>
        <LI><a href="example/iterators">Iterator Examples</a></LI>
        <LI><a href="example/visitors">Visitor Examples</a></LI>
        <LI ><a href="vtables">How C++ Implements Virtual Functions (vtables)</a></LI>
      </ul>
    </div>

    <div class="cl-card">

      <h2>Design</h2>
        <ul>
            <li><a href="howto/addtoclass">Adding Capabilities to a Class</a></li>
        </ul>

      <h2>Visual Paradigm for UML</h2>
      <ul>
        <LI><a href="visualparadigm">Installing Visual Paradigm for UML</a></LI>
        <LI><a href="visualparadigm/config.php">Configuring Visual Paradigm for UML</a></LI>
      </ul>


      <h2>Ethics and Professionalism</h2>
      <ul>
        <li><a href="http://www.acm.org/about/code-of-ethics" target="_blank">ACM  Code of Ethics and Professional Practice</a></li>
        <li><a href="http://ethics.acm.org/code-of-ethics/software-engineering-code/" target="_blank">ACM/IEEE Software Engineering Code of Ethics and Professional Practice</a></li>
        <li><a href="http://www.asq509.org/ht/a/GetDocumentAction/i/46090" target="_blank">Siemens
            presentation on categorization of ethical dilemmas</a></li>
      </ul>


    </div>
  </div>

</div>  <!-- .lists -->

</div>  <!-- div.cl-course-home -->
<?php echo $view->footer(false); ?>
</body>
</html>
