<?php
$directory = 'img'; // Directory where your images are stored

// Get the list of files in the folder
$files = scandir($directory);

// Filter .png files
$pngFiles = array_filter($files, function($file) {
    return pathinfo($file, PATHINFO_EXTENSION) == 'png';
});

if (!empty($pngFiles)) {
    // Use the first .png file as the OG image
    $imageURL = 'https://yourwebsite.com/' . $directory . '/' . reset($pngFiles);

    // Set the dynamic OG tags
    echo '<meta property="og:image" content="' . $imageURL . '" />' . PHP_EOL;
    echo '<meta property="og:image:type" content="image/png" />' . PHP_EOL;
    echo '<meta property="og:image:width" content="400" />' . PHP_EOL;
    echo '<meta property="og:image:height" content="300" />' . PHP_EOL;
    echo '<meta property="og:description" content="Your image description" />' . PHP_EOL;
} else {
    // If there are no .png files, do not generate OG tags
    echo '<!-- No .png images found -->';
}
?>
