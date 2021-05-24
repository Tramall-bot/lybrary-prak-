<?php
    function getBookAll(){
        $host = "lybrary";
        $user = "root";
        $password = "root";
        $db = "library";
        $conn = new mysqli($host, $user, $password, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        $result=$conn->query("SELECT * FROM book");
        $arr = array();
        if($result){
            while($row = $result->fetch_assoc()) {
                $arr[]=$row;
            }
            $result->close();
        }
        mysqli_close($conn);
        return $arr;
    }
    function getBooksByGenreId($genid){
        $host = "lybrary";
        $user = "root";
        $password = "root";
        $db = "library";
        $conn = new mysqli($host, $user, $password, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        $result=$conn->query("SELECT * FROM book WHERE genid = '$genid'");
        $arr = array();
        if($result){
            while($row = $result->fetch_assoc()) {
                $arr[]=$row;
            }
            $result->close();
        }
        mysqli_close($conn);
        return $arr;
    }
    function getQuotesAll(){
        $host = "lybrary";
        $user = "root";
        $password = "root";
        $db = "library";
        $conn = new mysqli($host, $user, $password, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        $result=$conn->query("SELECT * FROM quotes");
        $arr = array();
        if($result){
            while($row = $result->fetch_assoc()) {
                $arr[]=$row;
            }
            $result->close();
        }
        mysqli_close($conn);
        return $arr;
    }
    function getUsersAll(){
        $host = "lybrary";
        $user = "root";
        $password = "root";
        $db = "library";
        $conn = new mysqli($host, $user, $password, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        $result=$conn->query("SELECT * FROM users");
        $arr = array();
        if($result){
            while($row = $result->fetch_assoc()) {
                $arr[]=$row;
            }
            $result->close();
        }
        mysqli_close($conn);
        return $arr;
    }
    function getUserByLogin($log, $pass){
        $host = "lybrary";
        $user = "root";
        $password = "root";
        $db = "library";
        $conn = new mysqli($host, $user, $password, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        $result=$conn->query("SELECT * FROM users WHERE login = '$log'");
        $arr = array();
        if($result){
            while($row = $result->fetch_assoc()) {
               $arr = $row;
            }
            $result->close();
        }
        mysqli_close($conn);
        return $arr;
    }
    function getUserById($id){
        $host = "lybrary";
        $user = "root";
        $password = "root";
        $db = "library";
        $conn = new mysqli($host, $user, $password, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        $result=$conn->query("SELECT * FROM users WHERE id = '$id'");
        $arr = array();
        if($result){
            while($row = $result->fetch_assoc()) {
               $arr = $row;
            }
            $result->close();
        }
        mysqli_close($conn);
        return $arr;
    }
    function getReviewsAll(){
        $host = "lybrary";
        $user = "root";
        $password = "root";
        $db = "library";
        $conn = new mysqli($host, $user, $password, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        $result=$conn->query("SELECT * FROM reviews");
        $arr = array();
        if($result){
            while($row = $result->fetch_assoc()) {
                $arr[]=$row;
            }
            $result->close();
        }
        mysqli_close($conn);
        return $arr;
    }
    function getGenreAll(){
        $host = "lybrary";
        $user = "root";
        $password = "root";
        $db = "library";
        $conn = new mysqli($host, $user, $password, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        $result=$conn->query("SELECT * FROM genre");
        $arr = array();
        if($result){
            while($row = $result->fetch_assoc()) {
                $arr[]=$row;
            }
            $result->close();
        }
        mysqli_close($conn);
        return $arr;
    }
    function getGenreById($id){
        $host = "lybrary";
        $user = "root";
        $password = "root";
        $db = "library";
        $conn = new mysqli($host, $user, $password, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        $result=$conn->query("SELECT * FROM genre WHERE id= '$id'");
        $arr = array();
        if($result){
            while($row = $result->fetch_assoc()) {
                $arr=$row;
            }
            $result->close();
        }
        mysqli_close($conn);    
        return $arr;
    }
?>