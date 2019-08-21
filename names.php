<?php
//Native code to use PostgreSQL with PHP
    $con = pg_connect("host=localhost dbname=php_intro") or die("Could not connect to Server\n);");
    //Query to get info from person table in database
    $results = pg_query($con, "SELECT * FROM person") or die('Query failed: ' . pg_last_error());

    //Setting results from query to $all_results
    $all_results = pg_fetch_all($results);

    //Looping through $all_results and displaying on DOM
    for($i = 0; $i < count($all_results); $i++){
        $row = $all_results[$i];
        echo "<li><h5>My name is $row[name] and I am $row[age] years old.</h5>
        <br />
        <img src=\"$row[img]\"</li>" . "\n <br>";
    };

     //Closing the connection
    pg_close($con);