<?php

function head()
{
    echo "1 tête\n";
}

function chest() 
{
    echo "chest\n";
}

function chest(){}
function left_arm(){
	echo "left_arm";
}
function right_arm(){
	echo "right_arm";
}
function abdomen(){}
function left_leg(){
	echo "left leg";
}
function right_leg(){
	echo "right leg";
}

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
