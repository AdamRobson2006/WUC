<?php
require "../includes/Website-Mockup-HEADER.html";
?>

<h1>Study at Woodlands University College - Check out our Subject Area's</h1>

<!-- Search Function -->
<div class="subjectSearch">
    <form method="GET" action="?page=courseSearch">
        <input type="text" name="search" placeholder="Search course">
        <button type="submit">Search</button>
    </form>
</div>

<!--Filter Options-->
<div>
</div>
<div id="subjectBox">
    
<?php foreach ($departments as $department): ?>

    <h1><?= htmlspecialchars($department->department_name) ?></h1>

    <?php endforeach; ?>

<hr id="gap">
<section class="Courses">
    <container id="course"><a id="hideLink" href="/Website/Study/Website-Course.html.php" >
        <img src="https://picsum.photos/536/354" alt="">   
         <h2>Course 1</h2>
         <p>Description</p>
    <p class="learnMore">Learn More</p>
    </a></container>
    <container id="course"><a id="hideLink" href="/Website/Study/Website-Course.html.php" >
        <img src="https://picsum.photos/536/354" alt="">   
         <h2>Course 2</h2>
         <p>Description</p>
         <p class="learnMore">Learn More</p>
    </a></container>
    <container id="course"><a id="hideLink" href="/Website/Study/Website-Course.html.php" >
        <img src="https://picsum.photos/536/354" alt="">    
        <h2>Course 3</h2>
        <p>Description</p>
        <p class="learnMore">Learn More</p>
    </a></container>
</section>
<hr id="gap">

<?php
require "../includes/Website-Mockup-FOOTER.html";
?>