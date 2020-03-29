<?php

namespace Davpyu\BangunRuang\Helpers;

class PersegiPanjang
{
    public function keliling(int $panjang, int $lebar)
    {
        return 2 * ($panjang + $lebar);
    }

    public function luas(int $panjang, int $lebar)
    {
        return $panjang * $lebar;
    }
}
