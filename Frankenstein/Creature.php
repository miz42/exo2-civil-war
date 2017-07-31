<?php

function head()
{
    echo "1 tête\n";
}

function chest()
{
    echo "2 torse\n";
}
function left_arm(){}
function right_arm(){}
function abdomen(){}

function left_leg(){
	echo "jambe gauche";
}
function right_leg(){
	echo "jambe droit";
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
