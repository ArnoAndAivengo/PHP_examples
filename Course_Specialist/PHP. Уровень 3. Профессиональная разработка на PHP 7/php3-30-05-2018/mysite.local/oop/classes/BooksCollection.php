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

class BooksCollection
{
    const BOOK    = "Book";
    const JOURNAL = "Journal";
    
    private $data = [];
    public function __construct(array $data){
        $this->data = $data;
    }
    function __get($type = BooksCollection::BOOK){
        $arr = [];
        foreach($this->data as $item)
            if(get_class($item) == $type)
                array_push($arr,$item);
        return $arr;
    }
}