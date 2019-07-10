Part 2
===========

This exercise creates an object that represents an engine and then creates a car object with the engine attached.

We'll also go through validating the engine's fuel type and handling errors correctly.

### Successful Usage
```
php create_car.php
```

#### Example Output
```
Part2\Car Object
(
    [make] => Mazda
    [model] => 3
    [year] => 2013
    [doors] => 5
    [seats] => 5
    [objEngine] => Part2\Engine Object
        (
            [size] => 1.6
            [fuel] => petrol
            [cylinders] => 4
        )

)
```

### Unsuccessful Usage (1)
```
php create_broken_car.php
```

#### Example Output
```
PHP Fatal error:  Uncaught InvalidArgumentException: Invalid fuel type supplied in /Users/jamestyler/Documents/RapidSpike/Repos/Misc/training/Part2/Engine.php:55
...
```

### Unsuccessful Usage (2)
```
php create_broken_car_handled.php
```

#### Example Output
```
Invalid fuel type supplied
```