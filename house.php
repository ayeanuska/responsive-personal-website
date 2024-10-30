<!DOCTYPE html>
<html lang="en">
<head>
   
    <title> My House </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>

    </style>
</head>
<body>

    <nav id ="nav">
        <img src="assets/image/logo.jpeg" alt="anuska's logo">     
        <div class="list">
            <a href="index.html">Home</a>
            <a href="mystudy.html">My Study</a>
            <a href="myhobbies.html">My Hobbies</a>
            <a href="mymusic.html">My Music</a>
            <a href="house.php">My house</a>
        </div>
    </nav>

    <h1 class="page-title"> My House</h1>
git add     <section id="house">
        <h3>Rooms in My House:</h3>
            <?php
            $house = array(
                "Living Room"=>1,
                "Kitchen"=> 1,
                "Bedroom"=>2,
                "Bathroom"=>2,
                "address"=>"Hornsby"
                );
            ?>
        <table border="1.5">
            <tr>
                <th>Property</th>
                <th> value </th>
            </tr>
            <?php
                foreach ($house as $property => $value){
                    echo "<tr>";
                    echo "<td>$property</td>";
                    echo "<td>$value</td>";
                    echo  "</tr>";
                }
                ?>
        </table>
    </section>


    <footer> 
      <p> &#169; Created By Anuska Shrestha 2024</p>
  
      <div class="footer-links">
          <a href ="mailto:ayeanuska@gmail.com">Email</a>
          <a href ="https://www.linkedin.com/in/anuska-shrestha-065571287">Linkedin</a> 
          <a href="#nav"> Go Back to the top </a>
      </div>
    </footer>
 

</body>
</html>

