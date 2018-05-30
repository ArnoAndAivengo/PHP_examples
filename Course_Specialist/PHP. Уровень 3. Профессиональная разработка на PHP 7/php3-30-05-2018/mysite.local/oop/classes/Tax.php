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

trait Tax {
    
    public function getPriceWithTax($tax = 1.18){
        return $this->price * $tax;
    }

}