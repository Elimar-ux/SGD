<?php 
declare(strict_types=1);
static function brazilianPhoneParser(string $phoneString, bool $forceOnlyNumber = true) : ?array
{
    $phoneString = preg_replace('/[()]/', '', $phoneString);
    if (preg_match('/^(?:(?:\(?([0-9]{1}[0-9]{1})\)?\s?)??(?:((?:9\d|[2-9])\d{3}\-?\d{4}))$/', $phoneString, $matches) === false) {
        return null;
    }

    $ddd = preg_replace('/^0/', '', $matches[2] ?? '');
    $number = $matches[3] ?? '';
    if ($forceOnlyNumber === true) {
        $number = preg_replace('/-/', '', $number);
    }

    return ['ddd' => $ddd , 'number' => $number];
}