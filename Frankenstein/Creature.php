<?php

function head()
{
    echo "1 tête\n";
}

function chest(){
	echo "1 chest";
}
function left_arm()
{
	echo "Bras gauche\n";
}
function right_arm()
{
	echo "Bras droit\n";
}
function abdomen(){
	echo "1 abdomen";
}
function left_leg(){}
function right_leg(){}

function its_alive(){
	head();
	chest();
	left_arm();
	right_arm();
	abdomen();
	left_leg();
	right_leg();
}

its_alive();

?>
