<?php

class triple_a {
	var $single_a = 'a';

	function double_a () {
		return 'aa';
	}
}

class triple_b {
	var $single_a = 'a';

	function double_a () {
		return 'aa';
	}
}

triple_a::double_a();
$b = new triple_b;
$b->double_a();
