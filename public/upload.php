<?php
$post_fp   =  fopen("php://input", "r");
$tmpFilePath = 'tmp/' . time() . '.jpg';
file_put_contents($tmpFilePath, $post_fp);
fclose($post_fp);
echo '["<img src=\'' . $tmpFilePath . '\' />"]';
