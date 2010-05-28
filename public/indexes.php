<?php
foreach (glob('tmp/*.jpg') as $filename) {
    echo '<img src=\'' . $filename . '\' />';
}


