<div id="list">
    <ul>
        <li class="item"><a id="hideLink" href="/studentRecords" >Overview</a></li>
        <li class="item"><a id="hideLink" href="/stuApplication" >Student Applications</a></li>
        <li class="item" id="thatOne"><a id="hideLink" href="/stuCurrent" >Current Students</a></li>
        <li class="item"><a id="hideLink" href="/stuPast" >Past Students</a></li>
    </ul>
</div>

<h1> <?php echo $title ?></h1>

<!--LIST OF STUDENTS! -->
<section class="List">

<?php echo $studentOutput ?>

</section>



<!--Options -->
<section id="RecOptions">
    <div class="Recoption">
        <a id="hideLink" href="/timetable">Timetable</a>
    </div>

    <div class="Recoption">
        <p>Grademap</p>
    </div>
</section>

<?php
?>