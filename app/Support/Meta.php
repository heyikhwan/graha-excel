<?php

namespace App\Support;

class Meta
{
    public static function cleanDescription(?string $value): string
    {
        $raw = $value ?? '';
        $decoded = html_entity_decode($raw, ENT_QUOTES, 'UTF-8');
        $stripped = strip_tags($decoded);
        $stripped = str_replace("\xc2\xa0", ' ', $stripped);
        $clean = trim(preg_replace('/\s+/', ' ', $stripped));

        return $clean;
    }
}
