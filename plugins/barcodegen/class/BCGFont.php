<?php
//zend by QQ:1527200768  鸿宇科技  禁止倒卖 一经发现停止任何服务
interface BCGFont
{
	public function getText();

	public function setText($text);

	public function getRotationAngle();

	public function setRotationAngle($rotationDegree);

	public function getBackgroundColor();

	public function setBackgroundColor($backgroundColor);

	public function getForegroundColor();

	public function setForegroundColor($foregroundColor);

	public function getDimension();

	public function draw($im, $x, $y);
}


?>
