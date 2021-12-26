<?php

namespace SOLID\OCP;

class MoveOnRoad implements Moveable
{
    public function move(): string
    {
        return 'Iam moving on roads';
    }
}