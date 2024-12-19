```php
function processData(array $data): array
{
  $result = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $result[$key] = $this->processData($value);
    } elseif (is_numeric($value)) {
      $result[$key] = $value * 2;
    } else {
      $result[$key] = $value; // or handle non-numeric values as needed, e.g., $result[$key] = 0;
    }
  }
  return $result;
}

$data = ['a' => 1, 'b' => ['c' => 'hello', 'd' => 5]];
$processedData = processData($data);
print_r($processedData);
```