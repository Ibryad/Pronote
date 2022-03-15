<?php

class connexionBDD
{
    public function coPDO(){
        return new PDO('mysql:host=localhost;dbname=projetvol;charset=utf8', 'root', '');

    }

}