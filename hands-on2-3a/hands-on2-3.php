<h1>hands-on2-3a</hands-on2-3a></h1>

<?php

$table = array(
    "header" =>array(
        "StudentID", 
        "Firstname", 
        "Middlename", 
        "Lastname", 
        "Section", 
        "Course",
        "YearLevel"
    ),
    "body" => array(
    array(
        "firstname" => "Firstname1",
        "middlename"=> "Middlename1", 
        "lastname"=> "Lastname1", 
        "section"=> "Section1", 
        "course"=> "Course1", 
        "yearlevel"=> "Yearlevel1"
    ),
    array(
        "firstname" => "Firstname2",
        "middlename"=> "Middlename2", 
        "lastname"=> "Lastname2", 
        "section"=> "Section2", 
        "course"=> "Course2", 
        "yearlevel"=> "Yearlevel2"       
    ),
    array(
        "firstname" => "Firstname3",
        "middlename"=> "Middlename3", 
        "lastname"=> "Lastname3", 
        "section"=> "Section3", 
        "course"=> "Course3", 
        "yearlevel"=> "Yearlevel3"       
    ),
    array(
        "firstname" => "Firstname4",
        "middlename"=> "Middlename4", 
        "lastname"=> "Lastname4", 
        "section"=> "Section4", 
        "course"=> "Course4", 
        "yearlevel"=> "Yearlevel4"       
    ),
    array(
        "firstname" => "Firstname5",
        "middlename"=> "Middlename5", 
        "lastname"=> "Lastname5", 
        "section"=> "Section5", 
        "course"=> "Course5", 
        "yearlevel"=> "Yearlevel5"       
    ),
    array(
        "firstname" => "Firstname6",
        "middlename"=> "Middlename6", 
        "lastname"=> "Lastname6", 
        "section"=> "Section6", 
        "course"=> "Course6", 
        "yearlevel"=> "Yearlevel6"       
    ),
    array(
        "firstname" => "Firstname7",
        "middlename"=> "Middlename7", 
        "lastname"=> "Lastname7", 
        "section"=> "Section7", 
        "course"=> "Course7", 
        "yearlevel"=> "Yearlevel7"       
    ),
    array(
        "firstname" => "Firstname8",
        "middlename"=> "Middlename8", 
        "lastname"=> "Lastname8", 
        "section"=> "Section8", 
        "course"=> "Course8", 
        "yearlevel"=> "Yearlevel8"       
    )
    
    ),
)  
    

   
?>


<table border ="i">
            <thead>
           <?php

           for ($i = 0; $i <=count($table["header"]) -1; $i++){
            echo "<th>".$table["header"][$i]."</th>";
           }
        ?>


           

        </thead>
        <tbody>
            <?php
            for ($i = 0; $i <= count($table["body"]) -1; $i++) {
                
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$table["body"][$i]["firstname"]."</td>";
                echo "<td>".$table["body"][$i]["middlename"]."</td>";
                echo "<td>".$table["body"][$i]["lastname"]."</td>";    
                echo "<td>".$table["body"][$i]["section"]."</td>";
                echo "<td>".$table["body"][$i]["course"]."</td>";
                echo "<td>".$table["body"][$i]["yearlevel"]."</td>";
                echo "</tr>";
             
           

            }
            ?>
            </tbody>
            <table/>

        