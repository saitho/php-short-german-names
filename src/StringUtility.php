<?php
namespace Saitho\ShortGermanNames;

class StringUtility
{
    public static function shortenName(string $name): string
    {
        $name = str_replace(' von ', ' v. ', $name);
        return str_replace(' der ', ' d. ', $name);
    }
}
