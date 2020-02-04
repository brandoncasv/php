<?php 

    class Job {
        public $title;
        public $description;
        public $visible;
        public $months;
    }
    $job_one = new Job();
    $job_one->title = 'PHP Developer';
    $job_one->description = 'This is an awesome job';
    $job_one->visible = true;
    $job_one->months = 16;

    $jobs = [
        $job_one
        // [
        //     '' => 'PHP Developer',
        //     'description' => 'This is an awesome job!!!',
        //     'visible' => true,
        //     'months' => 16
        // ],
        // [
        //     'title' => 'Python Dev',
        //     'visible' => false,
        //     'months' => 14
        // ],
        // [
        //     'title' => 'Devops',
        //     'visible' => true,
        //     'months' => 5
        // ],
        // [
        //     'title' => 'Node Dev',
        //     'visible' => false,
        //     'months' => 8
        // ],
        // [
        //     'title' => 'Front-End Dev',
        //     'visible' => true,
        //     'months' => 3
        // ],
    ];
    funtion getDuration($months) {
        $years = floor($months / 12):
        $extraMonths = $months % 12;
        return "$years years $extraMonths months";
    }
    function printJob($job) {
        if($job['visible'] == false) {
            return;
        }
        echo '<li class="work-position">';
        echo '<h5>' .$job['title'] . '</h5>';
        echo '<p>' .$job['description'] . '<p>';
        echo '<p>' . getDuration($job['months']) . '</p>';
        echo '<strong>Achievements:</strong>';
        echo '<ul>';
        echo <ul>
             <li></li>
             
             </ul>
    }
?>