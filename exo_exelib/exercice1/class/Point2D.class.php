<?php
    class Point2D{
        private $x;
        private $y;
        public function __construct($x, $y){
            $this->setX($x);
            $this->setY($y);
        }

        public function setX($x){
            $this->x=$x;
        }
        public function setY($y){
            $this->y=$y;
        }

        public function getY(){
           return $this->y;
        }

        public function getX(){
            return $this->x;
        }

        public function _toString(){
           return "Point(x=".$this->x.",y=".$this->y .")";
        }

        public function bouger($dx,$dy){
            $a=$this->x+$dx;
            $b=$this->y+$dy;
            return "PointTranslater(x=".$a.",y=".$b .")";
        }
    }