<?php
namespace WUC\Entity;

class student {

    public $student_id;
    public $first_name;
    public $middle_name;
    public $surname;
    public $year_of_study;
    public $current_address;
    public $home_address;
    public $phone_number;
    public $email;
    public $offer_letter;
    public $degree_classification;
    public $emergency_contact;
    public $record_status;
    public $course_id;
    public $password_hash;

    private static $attributeMap = [
        'student_id' => 'studentID',
        'first_name' => 'firstName',
        'middle_name' => 'middleName',
        'surname' => 'surName',
        'year_of_study' => 'yearOfStudy',
        'current_address' => 'currentAddress',
        'home_address' => 'homeAddress',
        'phone_number' => 'phoneNumber',
        'email' => 'email',
        'offer_letter' => 'offerLetter',
        'degree_classification' => 'degreeClassification',
        'emergency_contact' => 'emergencyContact',
        'record_status' => 'recordStatus',
        'course_id' => 'courseID'
    ];

    public function __construct() {

    }

    public function getRecord($studentID) {
        return $this->studentID === $studentID ? $this : null;
    }

    public function getRecordVal($studentID, $attribute) {
        if ($this->studentID !== $studentID || !isset(self::$attributeMap[$attribute])) {
            return null;
        }
        $property = self::$attributeMap[$attribute];
        return $this->$property ?? null;
    }

    public function setRecord($studentID, $student) {
        if ($this->studentID !== $studentID || !($student instanceof self)) {
            return false;
        }

        foreach (self::$attributeMap as $property) {
            if (property_exists($student, $property)) {
                $this->$property = $student->$property;
            }
        }

        return true;
    }

    public function setRecordVal($studentID, $attribute, $newValue) {
        if ($this->studentID !== $studentID || !isset(self::$attributeMap[$attribute])) {
            return false;
        }
        $property = self::$attributeMap[$attribute];
        $this->$property = $newValue;
        return true;
    }

    public static function getAllowedAttributes() {
        return array_keys(self::$attributeMap);
    }

}

?>