<?php
require "../templates/Website-Mockup-HEADER.html";
?>


<div id="pageTitle">
    <h2>Course Search</h2>

        <form action="/index.php/search">
        <input type='text' name='searchBar' id='searchBar'>
        <input type='submit' name='beginSearch' hidden />
        <input type='hidden' name='pageCounter' value=1>
    </form>

</div>

<hr id="gap">

<div class="MainContent">

<?php
echo $output
?>

</div>


<!--To follow what I had proposed in the wireframe, I want to add an image carousel here -->
<?php
require "../templates/Website-Mockup-FOOTER.html";
?>
