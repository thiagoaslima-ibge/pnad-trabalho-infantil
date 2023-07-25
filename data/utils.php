<?php 
/**
 * Print the svg code directly in the HTML.
 * If for any reason it fails, fallback to an img tag
 * @param string $filePath - The path for the file (the same that would be used as img src)
 * @param string $imgClass - The class wanted to be added to the img tag
 * @param string $alt - The Alt text, in case the svg import fails
 */
function inlineSvg($filePath, $imgClass = 'image', $alt = '') {
    try {
        $svg = file_get_contents($filePath);
        // Remove custom doctype added by Adobe Illustrator
        $pattern = '/<!DOCTYPE svg.*?]>/s';
        $updatedContent = preg_replace($pattern, '', $svg);
        echo $updatedContent;
    } catch (Exception $e) {
        echo "<img class='$imgClass' src='$filePath' alt='$alt' />";
       // Executed only in PHP 5, will not be reached in PHP 7
    }
}
?>