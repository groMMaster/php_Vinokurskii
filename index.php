<?php
namespace Geometry;
chdir('src');
require_once("Geometry.php");

$p1 = new Point(0, 0);
$p2 = new Point(1, 1);

$p3 = new Point(2, 0);
$p4 = new Point(0, 2);

$p5 = new Point(0, 0);

$t = new Point(rand(1, 10), rand(1, 10));

$v1 = new Vector($p1, $p2);
$v2 = new Vector($p5, $p5);
$v3 = new Vector($p3, $p4);

echo "<pre>"; print_r($v1 -> length()); echo "<pre>";
echo "<pre>"; print_r($v2 -> length()); echo "<pre>";
echo "<pre>"; print_r($v3 -> length()); echo "<pre>";

echo "<pre>"; print_r($v1 -> nullChecking()); echo "<pre>";
echo "<pre>"; print_r($v2 -> nullChecking()); echo "<pre>";

echo "<pre>"; print_r($v1 -> perpendicularityChecking($v3)); echo "<pre>";

echo "<pre>"; print_r($t); echo "<pre>";
$t->x = $v1->x->x;
$t->y = $v1->x->y;
echo "<pre>"; print_r($t); echo "<pre>";
?>