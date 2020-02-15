<?php 

    class Job {
        public $title;
        public $description;
        public $visible;
        public $months;

        public function setTitle($t) {
            if($t == '') {
                $this->title = 'N/A';
            } else {
                $this->title = $t;
            }
        }

        public function getTitle() {
            return $this->title;
        }

        public function getDurationAsString() {
            $years = floor($this->months / 12);
            $extraMonths = $this->$months % 12;
            return "$years years $extraMonths months";
        }
    }
    $job_one = new Job();
    $job_one->title = 'PHP Developer';
    $job_one->description = 'This is an awesome job';
    $job_one->visible = true;
    $job_one->months = 16;

    $job_two = new Job();
    $job_two->setTitle('Python Developer');
    $job_two->description = 'This is an awesome job';
    $job_two->visible = true;
    $job_two->months = 24;

    $job_three = new Job();
    $job_three->setTitle('');
    $job_three->description = 'This is an awesome job';
    $job_three->visible = true;
    $job_three->months = 24;

    $jobs = [
        $job_one,
        $job_two
    ];
    
    function printJob($job) {

        if($job->visible == false) {
            return;
        }

        echo '<li class="work-position">';
        echo '<h5>' . $job->getTitle() .'</h5>';
        echo '<p>' . $job->description . '<p>';
        echo '<p>' . $job->getDurationAsString() . '</p>';
        echo '<strong>Achievements:</strong>';
        echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% conse </li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% conse </li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% conse </li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% conse </li>';
        echo '</ul>';
        echo '</li>';     
    }
?>