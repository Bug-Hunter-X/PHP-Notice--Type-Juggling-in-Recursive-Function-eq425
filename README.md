# PHP Notice: Type Juggling in Recursive Function
This repository demonstrates a common PHP error: a `Notice` caused by type juggling within a recursive function. The `processData` function attempts to multiply values by 2, but it doesn't check if the value is numeric, leading to a `Notice` when processing strings.

## Problem
The `processData` function processes an array recursively. If it encounters a non-numeric value, the multiplication operation throws a `Notice`. This is because PHP tries to implicitly convert the string to a number, resulting in a unexpected value and a notice-level error. 

## Solution
The solution adds a check to ensure the value is numeric before attempting multiplication.  This prevents the `Notice` and handles non-numeric values gracefully, either by skipping them or by providing a default value.