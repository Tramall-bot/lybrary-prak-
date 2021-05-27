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
    function getBookById($bkid){
        $host = "lybrary";
        $user = "root";
        $password = "root";
        $db = "library";
        $conn = new mysqli($host, $user, $password, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        $result=$conn->query("SELECT * FROM book WHERE id = '$bkid'");
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
    function getBookByTitle($title){
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
                if(mb_strtolower($row['title'], 'utf-8') == mb_strtolower($title, 'utf-8')){
                    $arr=$row;
                }
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
    function getUserByLogin($log){
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
    function saveUser($name, $login, $pass){
        $host = "lybrary";
        $user = "root";
        $password = "root";
        $db = "library";
        $conn = new mysqli($host, $user, $password, $db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $conn->query("INSERT INTO users(name, login, password, isAdmin) VALUES('$name', '$login', '$pass', 0)");
        mysqli_close($conn);    
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
    function postReview($usr, $text, $date){
        $host = "lybrary";
        $user = "root";
        $password = "root";
        $db = "library";
        $conn = new mysqli($host, $user, $password, $db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $result = $conn->query("INSERT INTO reviews(user_id, text, date) VALUES ('$usr', '$text','$date')");
        mysqli_close($conn);
        return $result;
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
    function getGenreByName($name){
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
                if((mb_strtolower($row['name'], 'utf-8') == mb_strtolower($name, 'utf-8')) || str_contains(mb_strtolower($row['name'], 'utf-8'), mb_strtolower($name, 'utf-8')) ){
                    $arr=$row;
                    break;
                }
            }
            $result->close();
        }
        mysqli_close($conn);    
        return $arr;
    }
?>