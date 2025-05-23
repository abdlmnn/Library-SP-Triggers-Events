<?php
class BorrowController{
    private $borrowModel;
    public function __construct($borrowModel){
        $this->borrowModel = $borrowModel;
    }

}
?>