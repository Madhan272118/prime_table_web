# Prime Number Multiplication Table

This is a simple web application built with CodeIgniter 4 that allows users to input a number **N** and generates a multiplication table for the first **N** prime numbers. The multiplication table and the form are displayed on the same page.

## Features

- Input a whole number **N** (where **N** ≥ 1).
- Generate the first **N** prime numbers.
- Display a multiplication table of those **N** prime numbers.
- Basic error handling (displays an error message if the input is invalid).

## Requirements

- PHP version 7.3 or higher
- [XAMPP](https://www.apachefriends.org/index.html) (or any server with PHP and Apache)
- CodeIgniter 4
- Composer (optional, for managing dependencies)

## Installation and Setup

Follow these steps to set up the project on your local environment using **XAMPP**.

### 1. Install XAMPP

1. Download and install XAMPP from [here](https://www.apachefriends.org/index.html).
2. Start the **Apache** and **MySQL** services from the XAMPP Control Panel.

### 2. Download the CodeIgniter 4 Project

1. Download the CodeIgniter 4 framework from [here](https://codeigniter.com/download).
2. Extract the downloaded folder and rename it to `PrimeTableWeb`.
3. Move the folder to your XAMPP `htdocs` directory. The directory structure should look like this:

### 3. Configure the Application

1. Open the `PrimeTableWeb/app/Config/App.php` file.
2. Set the base URL to the correct URL for your project:
```php
public $baseURL = 'http://localhost/PrimeTableWeb/';
```

### 4. Enable the intl Extension (If Required)

1. Open the php.ini file from the XAMPP Control Panel (Config -> PHP (php.ini)).
2. Uncomment the following line (remove the ; at the start):
3. Save the php.ini file and restart Apache from the XAMPP Control Panel.

## Run the Application

Open a web browser and navigate to: http://localhost/PrimeTableWeb/prime-table
Enter a number N and press Generate Table to display the multiplication table for the first N prime numbers.

## How It Works
1. The user inputs a number N.
2. The first N prime numbers are generated using a custom algorithm in PHP.
3. The application generates an N+1 x N+1 grid of numbers where the first row and column are the prime numbers, and each cell contains the product of the respective row and column prime numbers.
4. The form and result are displayed on the same page, allowing the user to try different values without leaving or refreshing the page.
Example
For N = 3, the first 3 primes are 2, 3, and 5. The multiplication table will look like this:

|   |   |   |   |
|---|---|---|---|
| 2 | 3 | 5 |   |
| 2 | 4 | 6 | 10|
| 3 | 6 | 9 | 15|
| 5 | 10| 15| 25|
