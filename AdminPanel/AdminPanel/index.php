
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sainath Motors | Admin Portal</title>
    <link rel="website icon" href="./assets/images/title_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.11/css/all.css"></link>
    <link rel="stylesheet" href="./assets/css/profileStyle.css"></link>
    <link rel="stylesheet" href="./assets/css/style.css"></link>
    <style>
        .col-sm-4 {
            padding-bottom: 25px;
            padding-right: 0;
            padding-left: 50px;
        }
    </style>
</head>
<body>
    
        <?php
            include "./adminHeader.php";
            include "./sidebar.php";
           
            include_once "./config/dbconnect.php";
        ?>

    <div id="main-content" class="container allContent-section py-4" style="margin-left: 117px;">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <i class="fas fa-car mb-2" style="font-size: 70px; color: #a10e0e;"></i>
                    <h4 style="color:black;">Total Number Of Cars Available:</h4>
                    <h4 style="color:black;">
                    <?php
                        $sql="SELECT * FROM `car_stock`";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?>
                    </h4>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <i class="fas fa-user-tag mb-2" style="font-size: 70px; color: #a10e0e;"></i>
                    <h4 style="color:black;">No. Of People Used Sell Your Car Page:</h4>
                    <h4 style="color:black;">
                    <?php
                       $sql="SELECT * FROM `sell_your_car`";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                               $count=$count+1;
                           }
                       }
                       echo $count;
                    ?>
                    </h4>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <i class="fas fa-shield-alt mb-2" style="font-size: 70px; color: #a10e0e;"></i>
                    <h4 style="color:black;">No. Of People Asked For Insurance Guide:</h4>
                    <h4 style="color:black;">
                    <?php       
                       $sql="SELECT * FROM `insurance_guide`";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                               $count=$count+1;
                           }
                       }
                       echo $count;
                    ?>
                    </h4>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-sm-4">
                <div class="card">
                    <i class="fas fa-university mb-2" style="font-size: 70px; color: #a10e0e;"></i>
                    <h4 style="color:black;">No. Of People Asked For Finance Guide:</h4>
                    <h4 style="color:black;">
                    <?php       
                       $sql="SELECT * FROM `finance_guide`";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                               $count=$count+1;
                           }
                       }
                       echo $count;
                    ?>
                    </h4>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <i class="fas fa-file-alt mb-2" style="font-size: 70px; color: #a10e0e;"></i>
                    <h4 style="color:black;">No. Of People Asked For RTO Transfer:</h4>
                    <h4 style="color:black;">
                    <?php       
                       $sql="SELECT * FROM `rto_transfer`";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                               $count=$count+1;
                           }
                       }
                       echo $count;
                    ?>
                    </h4>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <i class="fas fa-comment-dots mb-2" style="font-size: 70px; color: #a10e0e;"></i>
                    <h4 style="color:black;">Number Of People Gave Feedback:</h4>
                    <h4 style="color:black;">
                    <?php           
                       $sql="SELECT * FROM `feedback`";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                               $count=$count+1;
                           }
                       }
                       echo $count;
                    ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
       
        
        <?php
            if (isset($_GET['brand']) && $_GET['brand'] == "success") {
                echo '<script> alert("Brand Successfully Added")</script>';
            }else if (isset($_GET['brand']) && $_GET['brand'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['car_stock']) && $_GET['car_stock'] == "success") {
                echo '<script> alert("Car Details Successfully Added")</script>';
            }else if (isset($_GET['car_stock']) && $_GET['car_stock'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['car_image']) && $_GET['car_image'] == "success") {
                echo '<script> alert("Car Images Successfully Added")</script>';
            }else if (isset($_GET['car_image']) && $_GET['car_image'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
        ?>


    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script type="text/javascript" src="./assets/js/profileScript.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>