<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  require_once "class/Point2D.class.php";
        require_once "class/Form.class.php";
        require_once "class/Rectangle.class.php";
        require_once "class/Cercle.class.php";
        require_once "class/Carre.class.php";

        // $A=new Point2D(2,3);
        
        // $A->_toString();
        // var_dump($A->_toString());
      
        // var_dump ($A->bouger(4,5));
        $p1=new Point2D(2,3);

        $A=new Cercle(8,$p1);
        $B=new Cercle(5,$p1);
        $carree=new Carre(2,$p1);
        var_dump($carree);
         
        //    echo $A->surface() ."  ";
        //    echo $A->perimetre();
    //    echo $B->__toString();
       echo $carree->__toString();
    ?>
</body>
</html>