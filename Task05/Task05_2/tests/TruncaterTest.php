<?php

namespace App\Tests;

use App\Truncater;
use PHPUnit\Framework\TestCase;

class TruncaterTest extends TestCase
{
    //<= max length test
    public function testNoTruncation()
    {
        $truncater = new Truncater();
        $this->assertSame($truncater->truncate('Вотяков Михаил Александрович'), 'Вотяков Михаил Александрович');
    }

    //empty string test
    public function testEmptyString()
    {
        $truncater = new Truncater();
        $this->assertSame($truncater->truncate(''), '');
    }
    //> max length test
    public function testTruncateWithDefaultLength()
    {
        $truncater = new Truncater();
        $this->assertSame(
            $truncater->truncate('Вотяков Михаил Александрович', ['length' => 10]),
            'Вотяков Ми...'
        );
    }

    //user separate test
    public function testCustomSeparator()
    {
        $truncater = new Truncater();
        $this->assertSame(
            $truncater->truncate('Вотяков Михаил Александрович', ['length' => 10, 'separator' => '*']),
            'Вотяков Ми*'
        );
    }

    //redefine test
    public function testOverrideDefaults()
    {
        $truncater = new Truncater(['length' => 20, 'separator' => '#']);
        $this->assertSame(
            $truncater->truncate('Вотяков Михаил Александрович'),
            'Вотяков Михаил Алекс#'
        );
    }

    //< 0 length test
    public function testNegativeLength()
    {
        $truncater = new Truncater();
        $this->assertSame(
            $truncater->truncate('Вотяков Михаил Александрович', ['length' => -10]),
            'Вотяков Михаил Але...'
        );
    }

    //< max test
    public function testShorterThanLength()
    {
        $truncater = new Truncater();
        $this->assertSame(
            $truncater->truncate('Вотяков Михаил Александрович', ['length' => 50]),
            'Вотяков Михаил Александрович'
        );
    }

    //<= max length with separate test
    public function testSeparatorWithoutTruncation()
    {
        $truncater = new Truncater(['separator' => '*']);
        $this->assertSame(
            $truncater->truncate('Вотяков Михаил Александрович', ['length' => 50]),
            'Вотяков Михаил Александрович'
        );
    }

    //empty separate test
    public function testEmptySeparator()
    {
        $truncater = new Truncater(['separator' => '']);
        $this->assertSame(
            $truncater->truncate('Вотяков Михаил Александрович', ['length' => 10]),
            'Вотяков Ми'
        );
    }
}
