<div id="list">
    <ul>
        <li class="item"><a id="hideLink" href="/staffRecords" >Overview</a></li>
        <li class="item"><a id="hideLink" href="/staApplication" >Staff Application</a></li>
        <li class="item" id="thatOne"><a id="hideLink" href="/staCurrent" >Current Staff</a></li>
        <li class="item"><a id="hideLink" href="/staPast" >Past Staff</a></li>
    </ul>
</div>

<h1> <?php echo $title ?></h1>

<!--LIST OF STAFF! -->
<section class="List">

<?php echo $staffOutput ?>

</section>

<!--Selected -->
<section id="Selected">
<p>Selected; <p id="selection"> Jane Doe - 222222222 / Teaches</p> </p>
</section>

<!--Options -->
<section id="RecOptions">
    <div class="Recoption">
        <a id="hideLink"href="/staffProfile">View Staff</a>
    </div>
    <div class="Recoption">
        <a id="hideLink" href="/timetable">Timetable</a>
    </div>
        <div class="Recoption">
        <p>Grading</p>
    </div>
</section>

<?php
?>