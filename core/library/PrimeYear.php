<?php

namespace App;

class PrimeYear
{
    public $year;
    public $christmas_day;
    public $century;

    public function __construct($year, $christmas_day, $century)
    {
        $this->year = $year;
        $this->christmas_day = $christmas_day;
        $this->century = $century;
    }

    public static function isPrime($n)
    {
        if ($n == 1) return false;
        if ($n == 2) return true;
        if ($n % 2 == 0)
        {
            return false;
        }

        $i = 2;
        for ($i = 2; $i < $n; $i++)
        {
            if ($n % $i == 0)
            {
                return false;
            }
        }

        return true;
    }
}
