<?php
namespace WUC;

class controllerCommercial {

    private $assignmentsTable;
    private $attendanceTable;
    private $chatlogsTable;
    private $courseModulesLinkTable;
    private $coursesTable;
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


    // Main Constructor

    public function __construct($assignmentsTable, $attendanceTable, $chatlogsTable, $coursesModulesLinkTable, $coursesTable, $emergencyContactsTable, $moduleAssignmentsTable, $modulesTable, $personalTutorialsTable, $recordStatusesTable, $staffTable, $studentAssignmentsTable, $studentsTable, $ticketsTable, $timetable) {

        $this->assignmentsTable = $assignmentsTable;
        $this->attendanceTable = $attendanceTable;
        $this->chatlogsTable = $chatlogsTable;
        $this->courseModulesLinkTable = $courseModulesLinkTable;
        $this->coursesTable = $coursesTable;
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

    public function test() {

    echo loadTemplate('../templates/index.html.php', []);

    }

    public function about() {
        echo loadTemplate('../About/Website-AboutWoodlands.html.php', [
            'title' => 'About Woodlands',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../About/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }
    public function awards() {
        echo loadTemplate('../About/Website-Awards.html.php', [
            'title' => 'Awards',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../About/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }
    public function news() {
        echo loadTemplate('../About/Website-News.html.php', [
            'title' => 'News',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../About/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }
    public function research() {
        echo loadTemplate('../About/Website-Research.html.php', [
            'title' => 'Research',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../About/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }
    public function services() {
        echo loadTemplate('../About/Website-Services.html.php', [
            'title' => 'Services',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../About/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }

    public function contact() {
        echo loadTemplate('../Contact/Website-Contact.html.php', [
            'title' => 'Contact',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../Contact/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }


    public function accomodation() {
        echo loadTemplate('../Life/Webiste-Accomodation.html.php',[
            'title' => 'Accomodation',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../Life/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }
    public function atWoodlands() {
        echo loadTemplate('../Life/Webiste-AtWoodlands.html.php',[
            'title' => 'At Woodlands',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../Life/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }
    public function OpenDays() {
        echo loadTemplate('../Life/index.html.php',[
            'title' => 'Open Days',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../Life/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }
    public function studentLife() {
        echo loadTemplate('../Life/Website-Student-Life.html.php',[
            'title' => 'Student Life',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../Life/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }
    public function studentUnion() {
        echo loadTemplate('../Life/Website-StudentUnion.html.php',[
            'title' => 'Student Union',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../Life/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }
    public function support() {
        echo loadTemplate('../Life/Webiste-Support.html.php',[
            'title' => 'Support',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../Life/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }

    public function course() {
        echo loadTemplate('../Study/Website-Course.html.php', [
            'title' => 'Courses',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../Study/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }
    public function study() {
        echo loadTemplate('../Study/Website-Study.html.php', [
            'title' => 'Study',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../Study/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
    }
    public function subjects() {
        echo loadTemplate('../Study/Website-Subjects.html.php', [
            'title' => 'Subjects',
            'linkOutput' => $linkOutput,
            'subjectSearch' => '',
            'output' => loadTemplate('../Study/' . ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') . '.html.php', [

                'loginLinkOutput' => $loginLinkOutput,
                'managementOutput' => $managementOutput

        ])]);
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
