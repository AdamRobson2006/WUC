<?php
require "../includes/Portal-Mockup-HEADER.html";
?>
<!--Each module will load as an instance of this utilising php code -->

<h1 >Module Name</h1>
<h3 >Module Description</h3>

<hr id="gap">

<div id="moduleContent">
<!--Making a way for a dynamic option to come back to this menu when is going to be a good thing but I do not know how to do this -->
    <div id="modContent">
         <a id="hideLink" href="/Portal/VLE-content/Portal-Mockup-ModuleContent.html.php" ><h2>Content for Module</h2>
    </div>
    <div id="modContent">
         <a id="hideLink" href="/Portal/VLE-content/Assignment/Portal-Mockup-Assignment.html.php" ><h2>Assignments</h2></a>
    </div>
    <div id="modContent">
         <a id="hideLink" href="/Portal/VLE-content/Portal-Mockup-Grade.html.php" ><h2>Grades</h2></a>
    </div>
    <div id="modContent">
         <a id="hideLink" href="/Portal/Portal-Content/PAT/Portal-Mockup-PAT.html.php"><h2>Contact your tutor</h2></a>
    </div>
</div>
<?php
require "../Includes/Portal-Mockup-FOOTER.html";
?>