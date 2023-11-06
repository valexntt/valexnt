<?php
$directory = 'img'; // No need for a full path; it's in the same directory as index.html

// Get the list of .png files in the folder
$pngFiles = glob($directory . '/*.png');

if (!empty($pngFiles)) {
    // Use the first .png file as the OG image
    $ogImage = 'https://yourwebsite.com/' . $directory . '/' . basename($pngFiles[0]);
    
    // Set the image dimensions (adjust these values as needed)
    $width = 400;
    $height = 300;

    // Set the dynamic OG tags with centered image
    echo '<meta property="og:image" content="' . $ogImage . '" />' . PHP_EOL;
    echo '<meta property="og:image:type" content="image/png" />' . PHP_EOL;
    echo '<meta property="og:image:width" content="' . $width . '" />' . PHP_EOL;
    echo '<meta property="og:image:height" content="' . $height . '" />' . PHP_EOL;
    echo '<meta property="og:image:height" content="image/png" />' . PHP_EOL;
    echo '<meta property="og:image:height" content="center" />' . PHP_EOL;
    echo '<meta property="og:description" content="Your image description" />' . PHP_EOL;
} else {
    // If there are no .png files, use a default image
    echo '<meta property="og:image" content="https://yourwebsite.com/img_placeholder.png" />' . PHP_EOL;
}
?>
