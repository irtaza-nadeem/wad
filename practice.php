<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Final Mock Exam</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<form method="post" action="practice.php">
    <section class="bg-info py-5">
        <div class="container">
            <h4> Enter URL's </h4>
            <div class="row">
	                <div class="col-lg-12 col-sm-4">
	                    <div class="form-group">
	                        <textarea class="form-control"  id="txtArea" rows="6"  cols="30" name="txtArea"></textarea>
	                    </div>
	                </div>
	                <div class="col-lg-12 col-sm-4 rounded">
	                    <input type="submit" value="Extract Domains" class="btn btn-dark btn-block" name="hahahaha" id="1">
	                </div>
            </div>
        </div>
    </section>
</form>
<h2 class="actions"> Result  </h2>
<table id="transaction-table" cellspacing="0" rules="all" border="1" style="width:100%;">
    <tr>
        <th align="left" valign="middle" scope="col" style="background-color:grey; color: white; text-align: center">#</th>
        <th align="left" valign="middle" scope="col" style="background-color:grey; color: white; text-align: center">Domain</th>
        <th align="left" valign="middle" scope="col" style="background-color:grey; color: white; text-align: center"></th>
        <?php
			if(isset($_POST['hahahaha']))
			{	
			        $var = $_POST['txtArea'];
			        
			        $matches = preg_match_all("/(ftp:|https:|http:)?(www\.)?[a-zA-Z0-9]+(\.com)/", $var, $abc);
			        
			        for($a=0; $a<$matches; $a++)
			        {
			        	$z = $a+1;
			        	$za = $abc[0][$a];
			        	echo "<tr><th align=\"left\" valign=\"middle\" scope=\"col\" style=\"text-align: center\">$z</th>";
			        	echo "<th align=\"left\" valign=\"middle\" scope=\"col\" style=\"text-align: center\">$za</th>";
			        	echo "<th align=\"left\" valign=\"middle\" scope=\"col\" style=\"text-align: center\"><input type=\"submit\" value=\"Info\" class=\"btn btn-danger\" name=\"ha\" id=\"$a\"></th>";
			        }
			}
		?>
    </tr>
</table>
<script>
	    document.getElementById("txtArea").value =
        "https://stackoverflow.com/questions/261218919/asdsadasd/asdas\n" 
        + 
        "https://www.facebook.com/groups/154848181/\n"
        +
        "http://www.google.com/search?q=extract\n"
        +
        "http://localhost/waducp/final";
</script>
</body>
</html>