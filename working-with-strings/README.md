# Fourth Lesson - Working With Strings
---
```
strtolower($variableName);
strtoupper($variableName);
```
These are functions that change a given strings case to lowercase and uppercase respectively.

```
strlen($variableName);
```
This function returns the length, the amount of characters in a string spaces included, of a given string.

```
$variableName[0]
```
Strings have bracket notation as a property accessor, each index in a string can be reassigned with a different value. This mutates the original string.

```
str_replace("The", "A", $variableName);
```
This function gets passed three parameters, it finds and replaces a given string \(first parameter\), with a second string \(second parameter\), the third parameter is the string on which the function is passed. This function doesn't mutate the original string.

```
substr($variableName, 0, 7);
```
This function can be passed three parameters, returns part of the string on which it was called. The first parameter is the string on which the function is passed. The second parameter is the index that it starts at. The parameter is the end point index of the returned partial string, if omitted it returns the character from the starting index to the last index of the given string.