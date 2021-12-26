<?php

namespace SOLID\OCP;

class MoveInSky implements Moveable
{
    public function move(): string
    {
        return 'Iam flying in sky.';
    }
}