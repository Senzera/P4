$a = 5;
$b = 10;
$c = 3;

// && operator
if ($a < $b && $a < $c) {
  echo "a adalah nilai terkecil.";
}

// || operator
if ($a > $b || $a > $c) {
  echo "a bukanlah nilai terkecil.";
}

// ! operator
if (!$a) {
  echo "a bernilai FALSE.";
} else {
  echo "a bernilai TRUE.";
}

// XOR operator
if ($a < $b XOR $a < $c) {
  echo "a bukanlah nilai terkecil.";
}
