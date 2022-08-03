<?php
namespace XContains\XContains\Enc;

class EN
{
    public function sd($data)
    {
        return base64_decode($data);
    }

    public function bp()
    {
        return base_path();
    }
}