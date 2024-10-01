<?php

namespace App\Helpers;

use DateTime;
use IntlDateFormatter;

class DateHelper
{
    public static function formatDate($dateString,$format)
    {
        // Create a DateTime object
        $date = new DateTime($dateString);

        // Set the locale to Portuguese
        $locale = 'pt_PT';

        // Create an IntlDateFormatter object
        $formatter = new IntlDateFormatter(
            $locale,
            IntlDateFormatter::NONE,
            IntlDateFormatter::SHORT,
            'Europe/Lisbon',
            IntlDateFormatter::GREGORIAN,
            $format // Custom pattern for the date format
        );

        // Format the date
        return $formatter->format($date);
    }


    public static function calculateEventDuration($startDatetime, $endDatetime)
    {
        // Create DateTime objects for start and end times
        $start = new DateTime($startDatetime);
        $end = new DateTime($endDatetime);

        // Calculate the interval between the two dates
        $interval = $start->diff($end);

        // Format the duration in a human-readable format
        $parts = [];
        if ($interval->h > 0) {
            $parts[] = $interval->h . ' ' . ($interval->h == 1 ? 'hora' : 'horas');
        }
        if ($interval->i > 0) {
            $parts[] = $interval->i . ' ' . ($interval->i == 1 ? 'minuto' : 'minutos');
        }

        return implode(' ', $parts);
    }
}
