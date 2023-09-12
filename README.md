# recruitment-calculator
This is implementation of recruitment task.
## Task
**Topic:** Calculator  

**Description:** Goal is to create service in new instance of Symfony. This service has to work as calculator.  

**Required functionalities:**
1. Addition - input: two numbers, output: computation result,
2. Subtraction - input: two numbers, output: computation result,
3. Multiplication - input: two numbers, output: computation result,
4. Division - input: two numbers, output: computation result.

## Solution description
1. Created Calculator service that implements methods for each requirement functionality.
2. Added test to verifies working of Calculator's methods.
3. Created frontend that sends request to backend to perform calculation (example request for operation 10 + 5 looks as follows: http://127.0.0.1:8001/10/+/5).
4. Created CalculatorController to handle calculation requests.
5. Function that handles calculation requests has injected logger function to log all requested operations.

## Link to app deployed at Heroku
If you would like to test this app then please visit the following link:  
https://recruitment-calculator-274575a2d710.herokuapp.com/


