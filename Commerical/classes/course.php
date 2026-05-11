<?php
namespace WUC\Entity;

#[\AllowDynamicProperties]

class course {
    public $course_id;
    public $course_title;
    public $department_id;
    public $course_description;
    public $award_map;

    public function __construct() {

    }
}
?>