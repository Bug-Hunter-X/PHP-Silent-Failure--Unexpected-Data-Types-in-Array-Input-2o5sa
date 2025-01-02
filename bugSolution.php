function calculateSum(numbers) {
  if (!is_array(numbers)) {
    throw new Exception('Invalid input: numbers must be an array.');
  }

  $sum = 0;
  foreach ($numbers as $number) {
    if (!is_numeric($number)) {
      //Handle Non-numeric gracefully 
      trigger_error('Invalid input: array elements must be numbers. Non-numeric element encountered: ' . $number, E_USER_WARNING);
      continue; //Skip non-numeric values
    } 
    $sum += $number;
  }

  return $sum;
}

$numbers = [1, 2, 3, '4', 5];
$sum = calculateSum($numbers);

if ($sum !== 15) {
    echo "Unexpected result: " . $sum . "\n";
} else {
    echo "Sum calculated correctly: " . $sum . "\n";
}
