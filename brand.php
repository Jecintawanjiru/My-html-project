<?php
class car{

public function__construct($make,$color, $engine)

//initialize the variables using construct

{$this->make=$make;
 $this->color=$color;
 $this->engine=$engine;
}

function $make()

{
    return $this->make;

}

function $color()
{
    return $this->color;
}

function $engine()
{
    return $this->engine;
}
}

//instatiate 

$car=new car("toyota","black","DarkBulla");

echo $car -> make ();
"<br>"
echo $car -> color();
"<br>"
echo $car -> engine();
"<br>"
?>
