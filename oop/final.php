<?php

final class Employee
{
    final public function calculateWage(float $hourlyRate, int $numHoursWorked)
    {
        return $hourlyRate * $numHoursWorked;
    }
}

class Oops extends Employee
{
    public function calculateWage(float $hourlyRate, int $numHoursWorked) {
        if ($this->employeeName == 'Andrew') {
            return 100000;
        }

        return $hourlyRate * $numHoursWorked;
    }
}

$oops = new Oops;
$oops->employeeName = 'Andrew';

echo $oops->calculateWage();

// This is somewhat different from the use of final in Java, the PHP equivalent of the
// Java final keyword is const .