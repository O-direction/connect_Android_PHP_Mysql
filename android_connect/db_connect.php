<?php
 
/*
 *
 * A class file to connect to database
 */
class DB_CONNECT {
 
    // constructor
    function __construct() {
        // connecting to database
        
    }
 
    // destructor
    function __destruct() {
        // closing db connection
        
    }
 
    /**
     * Function to connect with database
     */
    function connect() {
        // import database connection variables
        require_once __DIR__ . '/db_config.php';
        // Connecting to mysql database
        $conn =mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD);
 
		// 检测连接
		if ($conn->connect_error) {
			die($conn->connect_error);
		} 
        // Selecing database
        $db = mysqli_select_db($conn,DB_DATABASE) or die(mysqli_error($conn));
        // returing connection cursor
        return $conn;
    }
 
    /**
     * Function to close db connection
     */
    function close($conn) {
        // closing db connection
        mysqli_close($conn);
    }
 
}
 
?>