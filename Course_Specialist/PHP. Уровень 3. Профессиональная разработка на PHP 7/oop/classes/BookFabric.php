<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author student
 */

class BookFabric
{
    static function get($title,$author,$genre,$price){
        return new Book($title,$author,$genre,$price);
    }
}
