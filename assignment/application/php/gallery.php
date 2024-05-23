<?php
$directory = '../application/assets/images/Gallery'; // Path to the images folder
$allowed_types = array('jpg', 'jpeg', 'png', 'gif'); // Allowed image types
$file_parts = array();
$ext = '';
$title = '';
$i = 0;

// Open directory
if (is_dir($directory)) {
    if ($dir_handle = opendir($directory)) {
        // Read directory
        while ($file = readdir($dir_handle)) {
            if ($file == '.' || $file == '..') continue; // Skip . and .. directories

            $file_parts = explode('.', $file);
            $ext = strtolower(array_pop($file_parts));

            // Check if file is an image
            if (in_array($ext, $allowed_types)) {
                echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">';
                echo '<a href="' . $directory . '/' . $file . '" class="fancybox" rel="ligthbox">';
                echo '<img src="' . $directory . '/' . $file . '" class="img-fluid" alt="">';
                echo '</a>';
                echo '</div>';
            }
        }
        // Close directory
        closedir($dir_handle);
    }
}
?>
