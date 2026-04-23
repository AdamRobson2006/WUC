<?php
require "../includes/Portal-Mockup-HEADER.html";
?>

<h1 class="ticketTxt">How can we help you?</h1>

<form id="ticketForm">
        <!--Probably better to do a dropdown here with a list of reasons -->
        <p class="ticketTxt">Select a reason</p>
        <select>
            <option>Reason One</option>
            <option>Reason Two</option>
            <option>Reason Three</option>
            <option>Reason Four</option>
            <option>Other</option>
        </select>
        <hr id="smallerGap">
        <p class="ticketTxt">Please tell us more about your problem so we can give you the best help possible!</p>
        <textarea></textarea>
        <button>Submit</button>
</form>

<?php
require "../Includes/Portal-Mockup-FOOTER.html";
?>