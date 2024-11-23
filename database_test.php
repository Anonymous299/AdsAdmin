<?php
namespace AdsAdmin\DatabaseHelpers;

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