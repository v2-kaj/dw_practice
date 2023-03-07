<?php
    $servername = "localhost";
    $username = "root";
    $password = "Kajani_1993";
    $dbname = "socialapp";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM todo";

    $results = mysqli_query($conn, $sql);

    $doc = new DOMDocument();
    $doc->formatOutput = true;
    
    foreach($results as $result){
        $root = $doc->createElement('Task');
        $root = $doc->appendChild($root);
        
        $id_element = $doc->createElement('id');
        $id_element->nodeValue=$result["id"];
        $root->appendChild($id_element);
    
        $text_element = $doc->createElement('text');
        $text_element->nodeValue=$result["text"];
        $root->appendChild($text_element);  
        }
    
    echo $doc->saveXML();
    
?>