Part 1
===========

This first exercise deals with creating a simple object that represents a car.

### Successful Usage
```
php create_car.php
```

#### Example Output
```
Part1\Car Object
(
    [make] => Mazda
    [model] => 3
    [year] => 2013
    [doors] => 5
    [seats] => 5
    [engine_size] => 1
    [engine_fuel] => petrol
    [engine_cylinders] => 4
)
```

### Unsuccessful Usage
```
php create_broken_car.php
```

#### Example Output
```
PHP Fatal error:  Uncaught TypeError: Argument 3 passed to Part1\Car::__construct() must be of the type integer, string given, called in /Users/jamestyler/Documents/RapidSpike/Repos/Misc/training/Part1/create_broken_car.php on line 5 and defined in /Users/jamestyler/Documents/RapidSpike/Repos/Misc/training/Part1/Car.php:69
...
```