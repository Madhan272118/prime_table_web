<?php

namespace App\Controllers;

class PrimeTableController extends BaseController
{
    /**
     * Displays the prime table form.
     *
     * @return \CodeIgniter\View\View
     */
    public function index()
    {
        return view('prime_table_form');
    }

    /**
     * Generates the multiplication table of the first N prime numbers.
     * 
     * This method retrieves the input number from the form, validates it,
     * and calls the function to generate the prime numbers. If the input
     * is valid, it renders the view to display the multiplication table.
     * 
     * @return \CodeIgniter\HTTP\RedirectResponse|\CodeIgniter\View\View
     */
    public function generate()
    {
        $n = (int)$this->request->getPost('number');
        // Validate that the number is at least 1
        if ($n >= 1) {
            $primes = $this->generatePrimes($n);
            return view('prime_table', ['primes' => $primes]);
        }
        return redirect()->back()->with('error', 'Please enter a valid number greater than 0.');
    }

    /**
     * Generates an array of the first N prime numbers.
     *
     * This method uses a while loop to find prime numbers starting from 2
     * until it collects the specified count of primes.
     * 
     * @param int $n The number of prime numbers to generate
     * @return array An array containing the first N prime numbers
     */
    private function generatePrimes($n)
    {
        $primes = [];
        $num = 2;
        // Continue until we have found N prime numbers
        while (count($primes) < $n) {
            if ($this->isPrime($num)) {
                $primes[] = $num;  // Add prime number to the array
            }
            $num++;
        }
        return $primes;
    }

    /**
     * Checks if a number is prime.
     *
     * This method determines if the given number is a prime number by
     * checking for factors from 2 up to the square root of the number.
     * 
     * @param int $num The number to check for primality
     * @return bool True if the number is prime, false otherwise
     */
    private function isPrime($num)
    {
        if ($num < 2) {
            return false;  // Numbers less than 2 are not prime
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;  // Found a factor, so the number is not prime
            }
        }
        return true;
    }
}
