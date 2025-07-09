<?php

namespace OpenBoleto\Formatters;

/** @author Filipe Golfe <filipegolfee@gmail.com> */
class CpfCnpjFormatter
{
    public static function format($value)
    {
        if (!$value) {
            return $value;
        }

        $value = preg_replace('/[^0-9]/', '', $value);
        if (!in_array(strlen($value), [11, 14])) {
            return $value;
        }

        return strlen($value) === 11 ? self::formatForCpf($value) : self::formatForCnpj($value);
    }

    public static function formatForCpf($value)
    {
        return vsprintf('%s%s%s.%s%s%s.%s%s%s-%s%s', str_split($value));
    }

    public static function formatForCnpj($value)
    {
        return vsprintf('%s%s.%s%s%s.%s%s%s/%s%s%s%s-%s%s', str_split($value));
    }
}
