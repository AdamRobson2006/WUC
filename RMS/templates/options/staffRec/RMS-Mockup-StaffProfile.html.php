<div>

    <p>Staff ID: <?php echo $staffMember->staff_id ?></p>
    <p>First Name: <?php echo $staffMember->first_name ?></p>
    <p>Middle Name: <?php echo $staffMember->middle_name ?></p>
    <p>Surname: <?php echo $staffMember->surname ?></p>
    <p>Current Address: <?php echo $staffMember->current_address ?></p>
    <p>Phone Number: <?php echo $staffMember->phone_number ?></p>
    <p>Email: <?php echo $staffMember->email ?></p>
    <p>Module Leader: <?php echo $staffMember->mod_leader ?></p>
    <p>Role: <?php echo $staffMember->role ?></p>

        <?php 
    
    if ($staffMember->entry_qualifications != null) {

    echo '
        <form action="/downloadDOCX" method="get">
            <input type="hidden" name="staff_id" value="' . $staff->staff_id . '">
            <button type="submit">Download Entry Qualifications</button>
        </form>';


    }
  
    ?>

    <p>Specialism: <?php echo $staffMember->specialism ?></p>
    <p >Emergency Contact ID: <?php echo $staffMember->emergency_contact ?></p>

    <hr id="gap">


</div>
