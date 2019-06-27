<?php

namespace Part5;

/**
 * This class represents an owner of a car
 */
class Owner
{

    /**
     * The owner's first name
     * @var string
     */
    public $first_name;

    /**
     * The owner's second name
     * @var string
     */
    public $second_name;

    /**
     * The owner's date of birth
     * @var string
     */
    public $date_of_birth;

    /**
     * Apply the supplied arguments to the class and then validate them
     *
     * @param string $first_name
     * @param string $second_name
     * @param string $date_of_birth
     */
    public function __construct(string $first_name, string $second_name, string $date_of_birth)
    {
        // Apply the arguments to the class
        $this->first_name = $first_name;
        $this->second_name = $second_name;
        $this->date_of_birth = $date_of_birth;

        // Run validation
        $this->_validate();
    }

    /**
     * Validate the date of birth is of a valid format
     *
     * @return bool
     *
     * @throws InvalidArgumentException
     */
    private function _validate(): bool
    {
        // Create a DateTime object with a format of YYYY-MM-DD using the supplied date_of_birth
        $objDate = \DateTime::createFromFormat('Y-m-d', $this->date_of_birth);

        // Validate the DateTime object worked and
        if ($objDate === false || !$objDate instanceof \DateTime || $objDate->format('Y-m-d') !== $this->date_of_birth) {
            throw new \InvalidArgumentException('Invalid owner date of birth');
        }

        return true;
    }

    /**
     * Put together and return the full owner's name
     *
     * @return string
     */
    public function getFullName(): string
    {
        return $this->first_name . ' ' . $this->second_name;
    }

    /**
     * Calculate the age of the owner
     *
     * @return int
     */
    public function getAge(): int
    {
        // Create a DateTime object from the owner's date of birth
        $objBirthDate = new \DateTime($this->date_of_birth);

        // Create a \DateTime object for now (default functionality when no date supplied)
        $objNowDate = new \DateTime();

        // Calculate the difference between the dates - use $objNowDate because it'll be greater than $objBirthDate
        $objInterval = $objNowDate->diff($objBirthDate);

        $age = $objInterval->y;
        return $age;
    }

}
