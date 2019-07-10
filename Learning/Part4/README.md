Part 4
===========

In this part we create two cars that actually have the same engine. Then we apply them to a garage object.

### Successful Usage
```
php create_garage.php
```

#### Example Output
```
Part4\Garage Object
(
    [_arrCars:Part4\Garage:private] => Array
        (
            [0] => Part4\Car Object
                (
                    [make] => Mazda
                    [model] => 3
                    [year] => 2013
                    [doors] => 5
                    [seats] => 5
                    [objEngine] => Part4\Engine Object
                        (
                            [size] => 1.6
                            [fuel] => petrol
                            [cylinders] => 4
                        )

                    [arrOwners] => Array
                        (
                            [0] => Part4\Owner Object
                                (
                                    [first_name] => James
                                    [second_name] => Tyler
                                    [date_of_birth] => 1992-06-17
                                )

                            [1] => Part4\Owner Object
                                (
                                    [first_name] => Faye
                                    [second_name] => Hammond
                                    [date_of_birth] => 1991-01-08
                                )

                        )

                )

            [1] => Part4\Car Object
                (
                    [make] => BMW
                    [model] => 1 Series
                    [year] => 2019
                    [doors] => 3
                    [seats] => 5
                    [objEngine] => Part4\Engine Object
                        (
                            [size] => 1.6
                            [fuel] => petrol
                            [cylinders] => 4
                        )

                    [arrOwners] => Array
                        (
                            [0] => Part4\Owner Object
                                (
                                    [first_name] => John
                                    [second_name] => Smith
                                    [date_of_birth] => 1974-10-28
                                )

                        )

                )

        )

)
```