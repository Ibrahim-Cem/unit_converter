<?php
    $weightUnits= array("mg","cg","dg","g","dag","hg","kg");
    function weightWrite($weightUnits){
        $temp = "";
        $i = 1;
        foreach($weightUnits as $weightUnit){
            $temp .="<option value = '$i'>$weightUnit </option>";
            $i++;
        }
        return $temp;
    }

    
    
    function weightConvertor(int $from, int $to, float $fromVal, $weightUnits){  
        if(is_int($from) && is_int($to) && is_float($fromVal)){
        $difference = $from - $to;
        $result= $fromVal * pow(10, $difference);/* pow ile üs alıyoruz */
        $result = strval($fromVal).$weightUnits[$from-1].'-->'.$result.$weightUnits[$to-1];
    
        return $result;
        } 

        else{
            echo "Something went wrong!";
        }
    }
    if(isset($_GET['formBtn'])){
        $from = $_GET['fromSelect'];
        $to = $_GET['toSelect'];
        $fromVal = $_GET['fromText'];
        

    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Unit Convertor</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
    </head>

    <body>
    <nav class="navbar navbar-expand-sm bg-light justify-content-center">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link"href="weight_convertor.php">Weight Convertor </a></li>
            <li class="nav-item"><a class="nav-link" href="lenght_convertor.php">Lenght Convertor </a></li>
        </ul>
    </nav>
    
        <main class="container">
        <form action="weight_convertor.php" method="GET">
            <div class="row">
                <div class="col-md-5">
                    <!-- from section-->
                    <div class="row">
                        <div class="col-md-12 m-2">
                            <h1>From:</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 m-2">
                            <select class="form-select" name="fromSelect" id="fromSelect">
                                <option value="Please select">Please select</option>
                                <?php
                                    
                                        echo weightWrite($weightUnits);
                                    

                                    
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12 m-2">
                            <input class="form-control" type="text" name="fromText" id="fromText" reqired placeholder="Value">
                        </div>
                        <div class="col-md-12 m-2">
                            <input type="submit" name="formBtn" id="fromBtm" value="Convert" class="btn btn-primary" >
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <!--right arrow-->
                    <!--
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                    </svg>
                    -->
                </div>
                <div class="col-md-5">
                    <!--to section-->
                    <div class="row">
                        <div class="col-md-12">
                            <h1>To:</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 m-1">
                            <select class="form-select" name="toSelect" id="toSelect">
                                <option value="PLease select">Please select</option>
                                <?php 
                                    echo weightWrite($weightUnits);
                                ?>
                            
                            </select>
                        </div>
                    </div>
            </form>
                    <div class="row">
                        <?php 
                            if(isset($_GET['formBtn']))
                            echo '
                            <div class="col-md-12 m-2">
                                <h3>Result:</h3>
                            </div>
                            <div class="col-md-12 m-2">
                                <p>'.weightConvertor($from, $to, $fromVal, $weightUnits).'</p>
                            </div>
                            ';
                        ?>
                        <!--<div class="col-md-12 m-2">
                            <h3>Result:</h3>
                        </div>
                        <div class="col-md-12 m-2">

                        </div>
                        -->
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>