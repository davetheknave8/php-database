<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="./jquery-3.4.1.min.js"></script>
    <script src="./client.js"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <h1>PHP Group<h1>
    </header>
    <section>
        <div id="namesContainer">
            <ul id="names">
                
            </ul>
        </div>
    </section>
</body>

</html>

<?php
    //Native code to use PostgreSQL with PHP
    // $con = pg_connect("host=localhost dbname=php_intro") or die("Could not connect to Server\n);");
    //Query to get info from person table in database
    // $results = pg_query($con, "SELECT * FROM person") or die('Query failed: ' . pg_last_error());

    //Setting results from query to $all_results
    // $all_results = pg_fetch_all($results);

    //Looping through $all_results and displaying on DOM
    // for($i = 0; $i < count($all_results); $i++){
    //     $row = $all_results[$i];
    //     echo "<ul><li><h1>My name is $row[name] and I am $row[age] years old.</h1></li></ul>" . "\n <br>";
    // };

    //Closing the connection
    // pg_close($con);
?>
