<?php

namespace Tests;

use App\Models\Planet;

class PerfTest extends \Illuminate\Foundation\Testing\TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $start = microtime(true);

        Planet::truncate();

        for ( $i = 0; $i < 20; $i++ ) {
            Planet::create(['name' => "venus-$i"]);
        }

        if ($this->name() != 'test00') {    # skip first test
            echo strtoupper($this->name()) . ' TIME: ' .
                floor((microtime(true) - $start) * 1000) . 'ms' . PHP_EOL;
        }
    }

    public function test00() { $this->assertTrue(true); }
    public function test01() { $this->assertTrue(true); }
    public function test02() { $this->assertTrue(true); }
    public function test03() { $this->assertTrue(true); }
    public function test04() { $this->assertTrue(true); }
    public function test05() { $this->assertTrue(true); }
    public function test06() { $this->assertTrue(true); }
    public function test07() { $this->assertTrue(true); }
    public function test08() { $this->assertTrue(true); }
    public function test09() { $this->assertTrue(true); }
    public function test10() { $this->assertTrue(true); }
    public function test11() { $this->assertTrue(true); }
    public function test12() { $this->assertTrue(true); }
    public function test13() { $this->assertTrue(true); }
    public function test14() { $this->assertTrue(true); }
    public function test15() { $this->assertTrue(true); }
    public function test16() { $this->assertTrue(true); }
    public function test17() { $this->assertTrue(true); }
    public function test18() { $this->assertTrue(true); }
    public function test19() { $this->assertTrue(true); }
    public function test20() { $this->assertTrue(true); }
    public function test21() { $this->assertTrue(true); }
    public function test22() { $this->assertTrue(true); }
    public function test23() { $this->assertTrue(true); }
    public function test24() { $this->assertTrue(true); }
    public function test25() { $this->assertTrue(true); }
    public function test26() { $this->assertTrue(true); }
    public function test27() { $this->assertTrue(true); }
    public function test28() { $this->assertTrue(true); }
    public function test29() { $this->assertTrue(true); }
    public function test30() { $this->assertTrue(true); }
    public function test31() { $this->assertTrue(true); }
    public function test32() { $this->assertTrue(true); }
    public function test33() { $this->assertTrue(true); }
    public function test34() { $this->assertTrue(true); }
    public function test35() { $this->assertTrue(true); }
}
