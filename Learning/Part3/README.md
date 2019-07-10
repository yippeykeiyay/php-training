Part 3
===========

In part 3 we expand to to be able to create and list multiple owners of the car whilst validating their date of birth.

### Successful Usage
```
php create_car.php
```

#### Example Output
```
Part3\Car Object
(
    [make] => Mazda
    [model] => 3
    [year] => 2013
    [doors] => 5
    [seats] => 5
    [objEngine] => Part3\Engine Object
        (
            [size] => 1.6
            [fuel] => petrol
            [cylinders] => 4
        )

    [arrOwners] => Array
        (
            [0] => Part3\Owner Object
                (
                    [first_name] => James
                    [second_name] => Tyler
                    [date_of_birth] => 1992-06-17
                )

            [1] => Part3\Owner Object
                (
                    [first_name] => Faye
                    [second_name] => Hammond
                    [date_of_birth] => 1991-01-08
                )

        )

)
```

### Unsuccessful Usage
```
php create_broken_car.php
```

#### Example Output
```
Invalid owner date of birth
```