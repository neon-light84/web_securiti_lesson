<?php
declare(strict_types=1);


//df36
echo 'sha384-' . base64_encode(hash_file('sha384', __DIR__ . '/summ1.0.1.js', true));
//echo 'sha384-' . base64_encode(hash_file('sha384', __DIR__ . '/s.css', true));
