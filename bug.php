```php
function processData(array $data): array
{
  $result = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $result[$key] = $this->processData($value); // Recursive call
    } else {
      $result[$key] = $value * 2; //Potential Error: Notice if $value is not numeric 
    }
  }
  return $result;
}

$data = ['a' => 1, 'b' => ['c' => 'hello', 'd' => 5]];
$processedData = processData($data);
print_r($processedData);
```