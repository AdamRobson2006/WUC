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

    
    private const int STATUS_LIVE        = 1;
    private const int STATUS_PROVISIONAL = 2;
    private const int STATUS_DORMANT     = 3;


    // Main Constructor

    public function __construct($assignmentsTable, $attendanceTable, $chatlogsTable, $courseModulesLinkTable, $coursesTable, $departmentsTable, $emergencyContactsTable, $moduleAssignmentsTable, $modulesTable, $personalTutorialsTable, $recordStatusesTable, $staffTable, $studentAssignmentsTable, $studentsTable, $ticketsTable, $timetable) {

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


    }

    /*
      Renders a content template and catches any failure (e.g. a DB error or
      unfinished class) so the layout — and therefore navigation — always loads.
      Only the content area shows the fallback message; the layout itself is
      called outside this method so structural failures remain visible.
     */
    private function tryRender(string $template, array $vars = []): string {
        try {
            return loadTemplate($template, $vars);
        } catch (\Throwable $e) {
            return '<p>This page is currently unavailable.</p>';
        }
    }

    public function home() {
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', [
            'title'  => 'Home',
            'output' => loadTemplate(__DIR__ . '/../templates/RMS-Mockup-Home.html.php', [])
        ]);
    }

    // --- Student routes ---

    public function students() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/RMS-Mockup-StudentRec.html.php', [
            'students' => $this->studentsTable->findAll()
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Student Records', 'output' => $output]);
    }

    public function studentProfile() {
        $id = $_GET['id'] ?? null;
        $output = $this->tryRender(__DIR__ . '/../templates/options/studentRec/RMS-Mockup-StudentProfile.html.php', [
            'student' => $this->studentsTable->find('student_id', $id)
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Student Profile', 'output' => $output]);
    }

    public function currentStudents() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/studentRec/RMS-Mockup-StuCurrent.html.php', [
            'students' => $this->studentsTable->find('record_status', self::STATUS_LIVE)
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Current Students', 'output' => $output]);
    }

    public function pastStudents() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/studentRec/RMS-Mockup-StuPast.html.php', [
            'students' => $this->studentsTable->find('record_status', self::STATUS_DORMANT)
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Past Students', 'output' => $output]);
    }

    public function studentApplications() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/studentRec/RMS-Mockup-StuApplication.html.php', [
            'students' => $this->studentsTable->find('record_status', self::STATUS_PROVISIONAL)
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Student Applications', 'output' => $output]);
    }

    // --- Staff routes ---

    public function staff() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/RMS-Mockup-StaffRec.html.php', [
            'staff' => $this->staffTable->findAll()
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Staff Records', 'output' => $output]);
    }

    public function staffProfile() {
        $id = $_GET['id'] ?? null;
        $output = $this->tryRender(__DIR__ . '/../templates/options/staffRec/RMS-Mockup-StaffProfile.html.php', [
            'staff' => $this->staffTable->find('staff_id', $id)
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Staff Profile', 'output' => $output]);
    }

    public function currentStaff() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/staffRec/RMS-Mockup-StaCurrent.html.php', [
            'staff' => $this->staffTable->find('record_status', self::STATUS_LIVE)
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Current Staff', 'output' => $output]);
    }

    public function pastStaff() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/staffRec/RMS-Mockup-StaPast.html.php', [
            'staff' => $this->staffTable->find('record_status', self::STATUS_DORMANT)
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Past Staff', 'output' => $output]);
    }

    public function staffApplications() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/staffRec/RMS-Mockup-StaApplication.html.php', [
            'staff' => $this->staffTable->find('record_status', self::STATUS_PROVISIONAL)
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Staff Applications', 'output' => $output]);
    }

    // --- Other routes ---

    public function attendance() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/RMS-Mockup-Attendance.html.php', [
            'attendance' => $this->attendanceTable->findAll()
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Attendance', 'output' => $output]);
    }

    public function timetable() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/RMS-Mockup-Timetable.html.php', [
            'timetable' => $this->timetable->findAll()
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Timetable', 'output' => $output]);
    }

    public function courses() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/RMS-Mockup-CourseRec.html.php', [
            'courses' => $this->coursesTable->findAll()
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Courses', 'output' => $output]);
    }

    public function archive() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/RMS-Mockup-Archive.html.php', [
            'students' => $this->studentsTable->find('record_status', self::STATUS_DORMANT),
            'staff'    => $this->staffTable->find('record_status', self::STATUS_DORMANT),
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Archive', 'output' => $output]);
    }

    public function tickets() {
        $output = $this->tryRender(__DIR__ . '/../templates/options/tickets/RMS-Mockup-PenTicket.html.php', [
            'openTickets'   => $this->ticketsTable->find('solved_bool', 0),
            'closedTickets' => $this->ticketsTable->find('solved_bool', 1),
        ]);
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', ['title' => 'Tickets', 'output' => $output]);
    }

    public function documents() {
        echo loadTemplate(__DIR__ . '/../templates/layout.html.php', [
            'title'  => 'Documents',
            'output' => loadTemplate(__DIR__ . '/../templates/options/RMS-Mockup-Document.html.php', [])
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