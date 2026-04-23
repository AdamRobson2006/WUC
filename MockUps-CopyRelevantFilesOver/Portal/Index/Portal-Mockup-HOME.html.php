<?php
require "../includes/Portal-Mockup-HEADER.html";
?>
<!--I got lazy and could not be bothered to keep copy and pasting so we will use this piece of PHP code for the layout + another at the bottom -->

<h1>
    Welcome! <!-- HERE WE SHOULD ADD THE ABILITY FOR USERS TO SEE THEIR NAME -->

</h1>

<hr id="gap">

<div class="Module-Specific">
    
    <container><a id="hideLink" href="/Portal/VLE-content/Portal-Mockup-Module.html.php" >
        <h2>Module 1</h2>
        <img src="https://picsum.photos/536/354" alt="">
        <p>Description</p>
    <p class="learnMore">Learn More</p>
    </a></container>
    
    <container><a id="hideLink" href="/Portal/VLE-content/Portal-Mockup-Module.html.php" >
        <h2>Module 2</h2>
        <img src="https://picsum.photos/536/344" alt="">
        <p>Description</p>
        <p class="learnMore">Learn More</p>
    </a></container>
    
    <container><a id="hideLink" href="/Portal/VLE-content/Portal-Mockup-Module.html.php" >
        <h2>Module 3</h2>
        <img src="https://picsum.photos/536/364" alt="">
        <p>Description</p>        
        <p class="learnMore">Learn More</p>
    </a></container>
</div>

<hr id="gap">

<div class="Announcement-Specific">
    <h1><strong>Announcements</strong></h1>
        <container><a id="hideLink" href="/Portal/Portal-Content/Portal-Mockup-AnnouncementCard.html.php"><!--Currently, this is placeholder but when an announcement goes on, we should make it so that the most recent announcement appears first-->
            <h2>Announcement<!--Here would be good to put some sort of php code to call the title of each announcement--></h2>
        </a></container>
        <container><a id="hideLink" href="/Portal/Portal-Content/Portal-Mockup-AnnouncementCard.html.php"><!--Currently, this is placeholder but when an announcement goes on, we should make it so that the most recent announcement appears first-->
            <h2>Announcement<!--Here would be good to put some sort of php code to call the title of each announcement--></h2>
        </a></container>
        <!--We can try to use a bit of pagination & code reusability by limiting the announcements to 5 AND by using a php foreach-->
</div>

<hr id="gap" >
<h1 >YourPAT</h1>

<div id="Widget">
    <section id="widgetPat"><a id="hideLink" href="Portal-Mockup-upcomingMeeting.html.php" >
        <p>Upcoming Appointment's;</p>
        <container class="WidgetSpecific">[DATE]</container>
    </section>

    <section id="widgetPat"><a id="hideLink" href="Portal-Mockup-Feedback.html.php" >
        <p>Feedback from your last appointment;</p>
        <container class="WidgetSpecific">[FEEDBACK]</container>
    </section>
</div>

<hr id="gap">

<!--I made a mistake - one of thee can be done for timetable!! -->
<div class="Email-Specific">
    <h1>Email/Calendar</h1>
    <container>
        <h2>This is where we will have the Email/Calendar</h2>
    </container>
</div>

<hr id="gap">

<div class="Email-Specific">
    <h1>Email/Calendar</h1>
    <container>
        <h2>This is where we will have the Email/Calendar</h2>
    </container>
</div>

<hr id="gap">

<div>
<!-- Here can be a place for tickets which lead to the ticket page -->
<p >At Woodlands University College, we pride ourselves on everything and anything - even the help we can offer our students</p>
<!--PLEASE DO NOT KEEP THIS IMAGE, I WANT TO ADD MORE VISUAL ASPECTS TO THE SITE BUT WE HAVE NOTHING TO USE -->
<a id="hideLink" href="/Portal/Portal-Content/Portal-Mockup-Tickets.html.php" ><img id="helpIMG" src="/Public/students_09.jpg"></a>
</div>

<?php
require "../Includes/Portal-Mockup-FOOTER.html";
?>