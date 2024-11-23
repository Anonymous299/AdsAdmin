<?php
namespace AdsAdmin\DatabaseHelpers;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ads_test";


// echo "Connected successfully";
// echo "<br>";

// // Run a SQL query


function insertOrUpdateRefreshToken($refresh_token_value, $servername, $username, $password, $dbname) {
   echo 'hello' . $refresh_token_value;
    // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}
    $sql = "INSERT INTO tokens (name, value)
    VALUES (?, ?)
    ON DUPLICATE KEY UPDATE value = ?
";

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare($sql);

$refresh_token_key = 'refresh_token';

// Bind the parameters to the SQL query
$stmt->bind_param("sss", $refresh_token_key, $refresh_token_value, $refresh_token_value); // 's' for string, 'i' for integer

$result = mysqli_query($conn, $sql);

// Execute the query
if ($stmt->execute()) {
    echo "New record inserted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
mysqli_close($conn);
}

function getRefreshToken($servername, $username, $password, $dbname){
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
    }
    $sql = "SELECT * FROM tokens";
    $result = mysqli_query($conn, $sql);

// // Fetch the result data
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        // Close the connection
mysqli_close($conn);
        return $row["value"];
    }
} else {
    // Close the connection
mysqli_close($conn);
    return "";
}

}

function updateIniFile($filePath, $section, $key, $newValue) {
    // Check if the file exists
    if (!file_exists($filePath)) {
        die("Error: INI file does not exist.");
    }

    // Parse the .ini file into an array
    $iniArray = parse_ini_file($filePath, true); // true enables sections

    // Check if the section exists
    if (!isset($iniArray[$section])) {
        die("Error: Section '$section' does not exist in the INI file.");
    }

    // Check if the key exists in the section
    if (!array_key_exists($key, $iniArray[$section])) {
        die("Error: Key '$key' does not exist in the section '$section'.");
    }

    
    

    // Update the value
    $iniArray[$section][$key] = $newValue;

    // Convert the array back to the .ini format
    $newIniContent = "";
    foreach ($iniArray as $sec => $values) {
        $newIniContent .= "[$sec]\n";
        foreach ($values as $k => $v) {
            $newIniContent .= "$k = " . (is_numeric($v) ? $v : "\"$v\"") . "\n";
        }
        $newIniContent .= "\n"; // Add a blank line between sections
    }
    // Write the new content back to the file
    if (file_put_contents($filePath, $newIniContent) === false) {
        echo "Must be put into google_ads_php.in manually. refreshToken: " . $newIniContent;
        return False;
    }

    echo "Key '$key' in section '$section' updated successfully.\n";
    return True;
}

function isKeyValueSet($filePath, $section, $key){
    
    if (!file_exists($filePath)) {
        die("Error: INI file does not exist.");
    }

    // Parse the .ini file into an array
    $iniArray = parse_ini_file($filePath, true); // true enables sections

    // Check if the section exists
    if (!isset($iniArray[$section])) {
        die("Error: Section '$section' does not exist in the INI file.");
    }

    // Check if the key exists in the section
    if (!array_key_exists($key, $iniArray[$section])) {
        die("Error: Key '$key' does not exist in the section '$section'.");
    }

    return !empty($iniArray[$section][$key]);
}

function getKeyValue($filePath, $section, $key){
    if (!file_exists($filePath)) {
        die("Error: INI file does not exist.");
    }

    // Parse the .ini file into an array
    $iniArray = parse_ini_file($filePath, true); // true enables sections

    // Check if the section exists
    if (!isset($iniArray[$section])) {
        die("Error: Section '$section' does not exist in the INI file.");
    }

    // Check if the key exists in the section
    if (!array_key_exists($key, $iniArray[$section])) {
        die("Error: Key '$key' does not exist in the section '$section'.");
    }

    return $iniArray[$section][$key];
}
?>