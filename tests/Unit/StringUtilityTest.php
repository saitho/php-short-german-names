<?php
namespace Saitho\Tests\ShortGermanNames\Unit;

use PHPUnit\Framework\TestCase;
use Saitho\ShortGermanNames\StringUtility;

class StringUtilityTest extends TestCase
{
    public function testShortenNameVon(): void
    {
        $this->assertEquals('Hans v. Müller', StringUtility::shortenName('Hans von Müller'));
    }

    public function testShortenNameDer(): void
    {
        $this->assertEquals('Peter d. Große', StringUtility::shortenName('Peter der Große'));
    }

    public function testShortenNameBoth(): void
    {
        $this->assertEquals('Hans v. d. Stein', StringUtility::shortenName('Hans von der Stein'));
    }

    public function testShortenNameNoChange(): void
    {
        $this->assertEquals('John Smith', StringUtility::shortenName('John Smith'));
    }

    public function testShortenNameEmpty(): void
    {
        $this->assertEquals('', StringUtility::shortenName(''));
    }

    public function testShortenNamePreservesOtherContent(): void
    {
        $this->assertEquals('Freiherr v. d. Aue', StringUtility::shortenName('Freiherr von der Aue'));
    }
}
