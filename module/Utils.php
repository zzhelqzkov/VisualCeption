<?php

namespace Codeception\VisualCeption\Module;

class Utils
{
    public function getTestFileName($signature, $identifier)
    {
        return str_replace([':', '\\'],  '.', $signature) . '.' . $identifier . '.png';
    }
}
