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
        <!--<form action="submit.php" method="post">
            
            <label for="name">Jméno</label> <input type="text" />
            <label for="gender">Pohlaví:</label>
            <select name="gender">
                <option value="male">Muž</option>
                <option value="female">Žena</option>
            </select>  
        </form>
        -->
        
        <?php
        $gender = "male";
        $previousJob = "Popelář";
        $result = FALSE;
        define("accepted", "Přijat!");
        define("notAccepted", "Nepřijat!");
                
        
        if ($gender == "male")
        {
            switch ($previousJob)
            { 
                case "Popelář":                   
                    $result = FALSE;
                    break;
                
                case "Zedník":                   
                    $result = FALSE;
                    break;
                
                case "Elektrikář":                   
                    $result = FALSE;
                    break;
                
                case "Účetní":
                    $result = TRUE;
                    break;
                
                case "IT_technik":
                    $result = TRUE;
                    break;
                
                case "Webmaster":
                    $result = TRUE;
                    break;
                
                default:
                    $result = TRUE;
                    break;
                    
            }
        }
        elseif ($gender == "female")
        {
            switch ($previousJob) 
            {
                case "Uklízečka":
                    $result = FALSE;
                    echo $notAccepted;
                    break;
                
                case "Zdravotní_sestra":
                    $result = FALSE;
                    break;
                
                case "Cukrářka":
                    $result = FALSE;
                    break;
                
                case "Finanční_poradkyně":
                    $result = TRUE;
                    break;
                
                case "Grafička":
                    $result = TRUE;
                    break;
                
                case "Manažerka":
                    $result = TRUE;
                    break;

                default:
                    $result = FALSE;
                    break;
            }
        }
        else
        {
         $result = FALSE;
         echo "Jsou pouze dvě pohlaví!";
        }
        
        
        if ($result == TRUE)
        {
            echo "Pohlaví: $gender"
            ?> <br /> <?php
            echo "Předchozí zaměstnání: $previousJob";
            ?> <br /> <br /> <?php
            echo accepted;
        }
        else
        {
            echo "Pohlaví: $gender"
            ?> <br /> <?php
            echo "Předchozí zaměstnání: $previousJob";
            ?> <br /> <br /> <?php
            echo notAccepted;
        }
        
        ?>
           
    </body>
</html>
