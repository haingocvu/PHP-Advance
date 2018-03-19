<?php
class Products{
    function index($id){
        echo $id;
    }

    function delete($id){
        echo 'You wanna delete product '. $id;
    }
}