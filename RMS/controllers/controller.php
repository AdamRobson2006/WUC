<?php
namespace WUC;

class controllerRMS {

    private $assignmentsTable;
    private $attendanceTable;
    private $chatlogsTable;
    private $courseModulesLinkTable;
    private $coursesTable;
    private $departmentsTable;
    private $emergencyContactsTable;
    private $moduleAssignmentsTable;
    private $modulesTable;
    private $personalTutorialsTable;
    private $recordStatusesTable;
    private $staffTable;
    private $studentAssignmentsTable;
    private $studentsTable;
    private $ticketsTable;
    private $timetable;
    private $pdo;


    // Main Constructor

    public function __construct($assignmentsTable, $attendanceTable, $chatlogsTable, $courseModulesLinkTable, $coursesTable, $departmentsTable, $emergencyContactsTable, $moduleAssignmentsTable, $modulesTable, $personalTutorialsTable, $recordStatusesTable, $staffTable, $studentAssignmentsTable, $studentsTable, $ticketsTable, $timetable, $pdo = null) {

        $this->assignmentsTable = $assignmentsTable;
        $this->attendanceTable = $attendanceTable;
        $this->chatlogsTable = $chatlogsTable;
        $this->courseModulesLinkTable = $courseModulesLinkTable;
        $this->coursesTable = $coursesTable;
        $this->departmentsTable = $departmentsTable;
        $this->emergencyContactsTable = $emergencyContactsTable;
        $this->moduleAssignmentsTable = $moduleAssignmentsTable;
        $this->modulesTable = $modulesTable;
        $this->personalTutorialsTable = $personalTutorialsTable;
        $this->recordStatusesTable = $recordStatusesTable;
        $this->staffTable = $staffTable;
        $this->studentAssignmentsTable = $studentAssignmentsTable;
        $this->studentsTable = $studentsTable;
        $this->ticketsTable = $ticketsTable;
        $this->timetable = $timetable;
        $this->pdo = $pdo;

    }

    public function approveEnrolment($studentID, $decision, $offerLetterBlob = null) {
        if (!$this->studentsTable || !$this->recordStatusesTable) {
            return false;
        }

        $students = $this->studentsTable->find('studentID', $studentID);
        if (empty($students)) {
            return false;
        }

        $recordStatus = new \WUC\Entity\recordStatus();
        $recordStatus->status = $decision === 'accept' ? 'accepted' : 'rejected';
        $recordStatus->dateAdded = date('Y-m-d H:i:s');

        $statusId = $this->recordStatusesTable->insertRecord(get_object_vars($recordStatus));
        if (!$statusId) {
            return false;
        }

        $this->studentsTable->updateRecord('recordStatus', $statusId, 'studentID', $studentID);
        if ($offerLetterBlob !== null) {
            $this->studentsTable->updateRecord('offerLetter', $offerLetterBlob, 'studentID', $studentID);
        }

        return true;
    }

    public function approveGrade($studentID, $assignmentID) {
        if (!$this->studentAssignmentsTable || !$this->assignmentsTable) {
            return false;
        }

        $studentAssignments = $this->studentAssignmentsTable->find(['studentID', 'assignmentID'], [$studentID, $assignmentID]);
        if (empty($studentAssignments)) {
            return false;
        }

        $studentAssignment = $studentAssignments[0];
        $assignments = $this->assignmentsTable->find('assignmentID', $assignmentID);
        if (empty($assignments)) {
            return false;
        }

        $assignment = $assignments[0];
        if (!is_numeric($studentAssignment->grade) || !is_numeric($assignment->passGrade)) {
            return false;
        }

        if ($studentAssignment->grade >= $assignment->passGrade) {
            $this->studentAssignmentsTable->updateRecordByCriteria(
                ['dateOfReturn'],
                [date('Y-m-d')],
                ['studentID', 'assignmentID'],
                [$studentID, $assignmentID]
            );
            return true;
        }

        return false;
    }

    public function home() {


    $output = loadTemplate(__DIR__ . '/../templates/RMS-Mockup-Home.html.php', []);

    echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Home', 'output' => $output]);    
  
    }
    public function staffChat() {
        $output = loadTemplate(__DIR__ . '/../templates/options/RMS-Mockup-StaffChat.html.php', []);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Staff Chat', 'output' => $output]);
    }

public function chat() {

    $tempSessionID = (int) "00003226";

    $chatLogs = $this->chatlogsTable->findAll();

    $messagesArray = [];

    foreach ($chatLogs as $log) {

        $isMine = ($log->staff_id === $tempSessionID);

        $wrapperClass = $isMine ? 'mine' : 'theirs';
        $bubbleClass  = $isMine ? 'bubbleMine' : 'bubbleTheirs';

        array_push($messagesArray, loadTemplate(
            __DIR__ . '/../templates/chatlog.html.php',
            [
                'wrapperClass' => $wrapperClass,
                'bubbleClass'  => $bubbleClass,
                'message'      => htmlspecialchars($log->message),
            ]
        ));
    }

    $messagesOutput = implode(" ", $messagesArray);

    $output = loadTemplate(__DIR__ . '/../templates/RMS-Mockup-Chatlog.html.php', ['messagesOutput' => $messagesOutput, 'tempSessionID' => $tempSessionID]);

    echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Staff Chat', 'output' => $output]);

    }


    

public function send() {

    $message = $_POST['message'] ?? '';
    $tempSessionID = $_POST['tempSessionID'] ?? 0;

    if (!empty($message)) {
        $this->chatlogsTable->insertRecord([
            'message' => $message,
            'staff_id' => (int) $tempSessionID
        ]);
    }


    header('Location: /index.php/chat');
    exit;

}

public function studentRecords() {

    /*
    $searchTerm = $_GET['searchBar'] ?? null;
    if ($searchTerm) {
        $currentCourses = $this->coursesTable->find("course_title", $searchTerm);
    } else {
        $currentCourses = $this->coursesTable->findAll();
    }
    */

    $departments = [];

    foreach ($currentCourses as $course) {
        $courseID = $course->course_id;
        $departmentID = $course->department_id;

        // Fetch modules for this course
        $currentCourseModules = $this->courseModulesLinkTable->find('course_id', $courseID);
        $modulesArray = [];
        foreach ($currentCourseModules as $courseModule) {
            $moduleID = $courseModule->module_id;
            $currentModules = $this->modulesTable->find('module_id', $moduleID);
            foreach ($currentModules as $module) {
                $modulesArray[] = $module->module_description;
            }
        }

        // Fetch department info if not already loaded
        if (!isset($departments[$departmentID])) {
            $departmentData = $this->departmentsTable->find('department_id', $departmentID);
            foreach ($departmentData as $dept) {
                $departments[$departmentID] = [
                    'name'        => $dept->department_name,
                    'description' => $dept->department_description,
                    'courses'     => []
                ];
            }
        }

        // Add course under its department
        $departments[$departmentID]['courses'][] = [
            'id'          => $course->course_id,
            'name'        => $course->course_title,
            'description' => $course->course_description,
            'modules'     => $modulesArray,
            'url'         => '/index.php/subjects/' . $course->course_id
        ];
    }

    $output = loadTemplate(__DIR__ . '/../templates/allCourses.html.php', [
        'title'       => 'Subjects',
        'searchTerm'  => $searchTerm,
        'departments' => $departments
    ]);

    echo loadTemplate(__DIR__ . '/../templates/layout.html.php', [
        'title'  => 'Subjects',
        'output' => $output
    ]);







}

}



/*

    An example of the loadTemplate function in action

        echo loadTemplate('../templates/layout.html.php', [
        'title' => 'UON Home',
        'linkOutput' => $linkOutput,
        'subjectSearch' => '',
        'output' => loadTemplate('../templates/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

            'loginLinkOutput' => $loginLinkOutput,
            'managementOutput' => $managementOutput

        ])]);

    Step 1: Pass the file location of the template in as the first argument in single quotes
    Step 2: Pass in variables that the template will need to load
    Step 3: Load subtemplates via the same method

    
*/