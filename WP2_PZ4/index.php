<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $mark = 3;
        
        switch ($mark) {
            case 1:
            case 2:
                echo "Jsi přijat bez příjmaček!";
                break;
            
            case 3:
            case 4:
                echo "Jsi přijat s příjmačkama!";
                break;
            
            case 5:
                echo "Nejsi přijat!";
                break;

            default:
                echo "Neplatná známka!";
                break;
        }
                
             
        
        ?>
    </body>
</html>
