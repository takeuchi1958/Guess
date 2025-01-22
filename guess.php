<?php
echo "minimum (n)";
$n = fgets(STDIN);
echo "max (m)";
$m = fgets(STDIN);

$randam = rand($n, $m);

if ($n > $m) {
    echo "Error".\n";
}

$maxAttempts = 10;
for ($attempts = 1; $attempts <= $maxAttempts; $attempts++) {
    echo "$attempts".\n";
    $guess = intval(fgets(STDIN));
}

if ($guess < $randam){
    echo "low! onemore!.\n";
} elseif ($guess > $randam){
    echo "high! onemore!!.\n";
} elseif ($guess = $randam){
    echo "nice! OK!!.\n";
}