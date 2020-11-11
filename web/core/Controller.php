<?php
    class Controller{
        public function model($model){
            require_once "./web/models/".$model.".php";
            return new $model;
        }

        public function view($view, $data=[]){
            require_once "./web/views/".$view.".php";
        }
    }
?>