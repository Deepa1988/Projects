<?php

class TimePicker {

    private $date;
    private $time;
    private $format;

    public function __construct($date, $time, $format) {
        $this->date = $date;
        $this->time = $time;
        $this->format = $format;
    }

    public function getHTML() {
        $output = '<input type="datetime-local" name="date" value="' . $this->date . 'T' . $this->time . '" />';
        $output .= '<script>';
        $output .= '$(document).ready(function() {';
        $output .= '$("#date").datetimepicker({';
        $output .= 'format: "' . $this->format . '",';
        $output .= '});';
        $output .= '});';
        $output .= '</script>';
        return $output;
    }

}

$date = '2023-03-14';
$time = '12:00:00';
$format = 'Y-m-d H:i:s';

$timePicker = new TimePicker($date, $time, $format);

echo $timePicker->getHTML();

?>
