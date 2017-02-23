<?php

class triple_a
{
    const hogehuga_hugahuga = 111;

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
        $arr = [
            'aa' => 1,
            'ccc'    =>     111,

        ];


        return 'aa';
    }
}

triple_a::double_a();
$b = new triple_b();
$b->double_a();
