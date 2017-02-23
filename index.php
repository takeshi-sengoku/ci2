<?php

class triple_a
{
    public $single_a = 'a';

    public function double_a()
    {
        return 'aa';
    }
}

class triple_b
{
    public $single_a = 'a';

    public function double_a()
    {
        return 'aa';
    }
}

triple_a::double_a();
$b = new triple_b();
$b->double_a();
