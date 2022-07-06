<?php
    $lengthUnits= array("mm","cm","dm","m","dam","hm","km");
    function lengthWrite($lengthUnits){
        $temp = "";
        foreach($lengthUnits as $lengthUnit){
            $temp .="<option value = '$lengthUnit'>$lengthUnit </option>";
        }
        return $temp;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Unit Converter</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
    </head>

    <body>
        <main class="container">
        <form action="index.php" method="GET">
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
                            <select name="fromSelect" id="fromSelect">
                                <option value="Please select">Please select</option>
                                <?php
                                    
                                        echo lengthWrite($lengthUnits);
                                    

                                    
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12 m-2">
                            <input type="submit" name="btn btn-primary" id="fromBtm" value="Convert" class="btn btn-primary">
                        </div>
                        <div class="col-md-12 m-2">
                            <input type="text" name="fromText" id="fromText">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <!--right arrow-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                    </svg>
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
                            <select>
                                <option value="PLease select">Please select</option>
                                <?php 
                                    echo lengthWrite($lengthUnits);
                                ?>
                            
                            </select>
                        </div>
                    </div>
            </form>
                    <div class="row">
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