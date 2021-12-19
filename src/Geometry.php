<?php
namespace Geometry;

class Point {
    public $x, $y;

    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
}

class Vector {
	public $x, $y;

	function __construct(Point $x, Point $y) {
        $this->x = $x;
        $this->y = $y;
    }

    function length() {
    	return sqrt(($this->x->x - $this->y->x) ** 2 + ($this->x->y - $this->y->y) ** 2);
    }

    function nullChecking() {
        if ($this->length() == 0)
            return 'Вектор имеет нулевую длинну';
        else
            return 'Вектор имеет ненулевую длинну';
    }

    function perpendicularityChecking($otherVector) {
        if ((($this->y->x - $this->x->x) * ($otherVector->y->x - $otherVector->x->x) + ($this->y->y - $this->x->y) * ($otherVector->y->y - $otherVector->x->y)) == 0)
            return 'Вектора перпендикулярны';
        else
            return 'Вектора не перпендикулярны';
    }
}
?>