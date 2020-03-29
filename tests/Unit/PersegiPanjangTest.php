<?php

namespace Davpyu\BangunRuang\Tests;

use Davpyu\BangunRuang\Tests\TestCase;
use Davpyu\BangunRuang\Facades\PersegiPanjang;

class PersegiPanjangTest extends TestCase
{
    public function testLuas()
    {
        $panjang = 10;
        $lebar = 5;
        $luas = PersegiPanjang::luas($panjang, $lebar);
        $this->assertEquals($luas, 50);
    }

    public function testKeliling()
    {
        $panjang = 10;
        $lebar = 5;
        $keliling = PersegiPanjang::keliling($panjang, $lebar);
        $this->assertEquals($keliling, 30);
    }
}
