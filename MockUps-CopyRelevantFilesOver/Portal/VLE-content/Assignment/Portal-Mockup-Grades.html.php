<?php
require "../../includes/Portal-Mockup-HEADER.html";
?>
<div id="listForAss">
<!--A cool thing we can do is use a sort of active navigation page, when we go to a page,
it makes that page darker/lighter AND when it  -->
    <ul>
        <li class="itemASS"><a id="hideLink" href="Portal-Mockup-Assignment.html.php" >Overview</a></li>
        <li class="itemASS"><a id="hideLink" href="Portal-Mockup-PreviousAssignment.html.php" >Previous Assignments</a></li>
        <li class="itemASS"><a id="hideLink" href="Portal-Mockup-UpcomingAssignment.html.php" >Upcoming Assignments</a></li>
        <li class="itemASS"><a id="hideLink" href="Portal-Mockup-FeedbackASS.html.php" >Feedback</a></li>
        <li class="itemASS" id="thatOne"><a id="hideLink" href="Portal-Mockup-Grades.html.php" >Grade</a></li>
    </ul>
</div>

<h2 >Your Grades!</h2>

<hr id="smallerGap">


<!--Link to grade map -->
<div id="linktoGradeMap">
<p><a id="hideLink" href="/Portal/Portal-Content/Portal-Mockup-gradeMap.html.php" >Check out how you are doing so far!</a></p>

</div>

<?php
require "../../Includes/Portal-Mockup-FOOTER.html";
?>