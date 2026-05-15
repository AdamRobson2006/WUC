<div>

    <p >Student ID: <?php echo $student->student_id ?></p>
    <p >First Name: <?php echo $student->first_name ?></p>
    <p >Middle Name: <?php echo $student->middle_name ?></p>
    <p >Surname: <?php echo $student->surname ?></p>
    <p >Year of Study: <?php echo $student->year_of_study ?></p>
    <p >Current Address: <?php echo $student->current_address ?></p>
    <p >Home Address: <?php echo $student->home_address ?></p>
    <p >Phone Number: <?php echo $student->phone_number ?></p>
    <p >Email: <?php echo $student->email ?></p>

    <?php 
    
    if ($student->degree_classification != null) {

    echo "<p>Degree Classification: <?php echo $student->degree_classification ?></p>";

    }

    if ($student->offer_letter != null) {


    echo '
        <form action="/downloadDOCX" method="get">
            <input type="hidden" name="student_id" value="' . $student->student_id . '">
            <button type="submit">Download Offer Letter</button>
        </form>';


    }
  
    ?>

    <p >Emergency Contact ID: <?php echo $student->emergency_contact ?></p>
    <p >Course: <?php echo $course_name ?></p>

    <hr id="gap">


</div>
