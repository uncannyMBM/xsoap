<?php

namespace XContains\XContains\Cri;

trait MT
{
    protected function rrmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir . "/" . $object) == "dir")
                        $this->rrmdir($dir . "/" . $object);
                    else @unlink($dir . "/" . $object);
                }
            }
            @reset($objects);
            @rmdir($dir);
        }
    }
}