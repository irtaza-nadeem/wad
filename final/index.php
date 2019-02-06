<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Join Pak Army</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="home">
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="img/army-logo" width="50" height="50" alt=""><h3 class="d-inline align-middle"> Join Pak Army </h3>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#showcase" class="nav-link">Candidates</a>
                </li>
                <li class="nav-item">
                    <a href="#join" class="nav-link">Join</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- JOIN -->
<section id="join" class="bg-light py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-9">
                <h3>Filter Eligible Candidates </h3>
                <p class="lead">JOIN PAK ARMY AS CAPTAIN THROUGH DIRECT SHORT SERVICE COMMISSION</p>
                <!--Question 1: Part 01:  Write the code below accordingly-->
                <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                    <div class="form-row">
                        <div class="col-md-12">
                            <textarea class="form-control"
                                      placeholder="Copy students data from 'data.txt' file and paste here to filter ..."
                                      id="data" rows="16" name="studentInfo"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Filter" id="filter" name="filter" class="btn btn-dark btn-block btn-lg">
                </form>
            </div>
            <div class="col-lg-3 d-none d-lg-block align-self-center">
                <img src="img/army.png" alt="Army" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section id="showcase" class="py-5">
    <div class="primary-overlay text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h4 class="display-4 mt-5">
                        Eligible Candidates List
                    </h4>
                    <p class="lead"></p>
                    <table class="table table-hover table-sm">
                        <thead>
                        <tr>
                            <td> Name </td>
                            <td> Reg# </td>
                            <td> CGPA </td>
                            <td> Dob </td>
                            <td> Height </td>
                            <td> Actions </td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        /*<!--Question 1:  Write the code below accordingly-->*/

                        global $data;
                        $name = array();
                        $reg = array();
                        $cgpa = array();
                        $dob = array();
                        $height = array();

                        if(isset($_POST['filter']))
                        {
                            $students = $_POST['studentInfo'];
                            $count = preg_match_all("/\d+\s+([a-zA-z]+\s[a-zA-z]+)\s+([a-zA-z0-9]{13})\s+([0-9]+\.[0-9]+)\s+([0-9]+\/[0-9]+\/[0-9]+)\s+(\d+\^?\d?)/", $students, $data);
                            global $name;
                            global $reg;
                            global $cgpa;
                            global $dob;
                            global $height;

                            for($a=0; $a<$count; $a++)
                            {
                                $temp = $data[1][$a];
                                array_push($name, $temp);
                            }
                            for($a=0; $a<$count; $a++)
                            {
                                $temp = $data[2][$a];
                                array_push($reg, $temp);
                            }
                            for($a=0; $a<$count; $a++)
                            {
                                $temp = $data[3][$a];
                                array_push($cgpa, $temp);
                            }
                            for($a=0; $a<$count; $a++)
                            {
                                $temp = $data[4][$a];
                                array_push($dob, $temp);
                            }
                            for($a=0; $a<$count; $a++)
                            {
                                $temp = $data[5][$a];
                                $temp = str_replace("^","'", $temp);
                                array_push($height, $temp);
                            }
                            for($a=0; $a<$count; $a++)
                            {
                                echo "<tr>
                            <td id='1'> $name[$a] </td>
                            <td id='2'> $reg[$a] </td>
                            <td id='3'> $cgpa[$a] </td>
                            <td id='4'> $dob[$a] </td>
                            <td id='5' > $height[$a] </td>
                            <td> <button id=\"$reg[$a]\" type=\"button\" class=\"btn btn-dark\" onclick=\"apply('$name[$a]','$reg[$a]','$cgpa[$a]','$dob[$a]','$height[$a]')\" name=\'b1\'>Apply</button> </td>
                        </tr>";
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="main-footer" class="py-3 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 ml-auto">
                <p class="lead">Copyright &copy; 2019</p>
            </div>
        </div>
    </div>
</footer>
<script>
    /*Question 2:  Write the code below accordingly*/
    function apply(a,b,c,d,e){

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(b).innerText = this.responseText;
                document.getElementById(b).classList.add("btn btn-primary");
            }
        };
        xhttp.open("GET", "apply.php?name="+a+"&reg="+b+"&cgpa="+c+"&dob="+d+"&height="+e, true);
        xhttp.send();
    }
</script>
</body>
</html>
