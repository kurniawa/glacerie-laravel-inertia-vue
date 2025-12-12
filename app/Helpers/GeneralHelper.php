<?php

namespace App\Helpers;

use DateTime;
use IntlDateFormatter;
use Exception;

class GeneralHelper
{
    /**
     * Format tanggal dari YYYY-MM-DD menjadi format Indonesia lengkap dengan hari.
     *
     * @param string|null $dateString
     * @return string
     */
    public static function formatToIndonesian(?string $dateString): string
    {
        if (empty($dateString)) {
            return '-';
        }

        try {
            $date = new DateTime($dateString);
            
            $formatter = new IntlDateFormatter(
                'id_ID',
                IntlDateFormatter::FULL,
                IntlDateFormatter::FULL,
                'Asia/Jakarta',
                IntlDateFormatter::GREGORIAN,
                "EEEE, dd-MM-yyyy"
            );

            return $formatter->format($date);

        } catch (Exception $e) {
            // Handle error parsing date
            return 'Tanggal tidak valid';
        }
    }
}