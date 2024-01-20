<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity=
"sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
        crossorigin="anonymous">
  <style>
    form{
        border:8px solid;
        background-color: #a6a6a6;
    }
    .ceva{
        width: 23.38%;
        max-height:fit-content;
        background-color:
        rgb(53,94,59)
    }
    body{
        display: flex;
        background-image: url("https://i.pinimg.com/originals/35/c2/23/35c223ba7ff2992901142d61cf92b074.gif");
        justify-content: center;
        align-items: center;
    }
</style>
    <script>
    
        function updateDisplay(value) {
            var display = document.getElementById("display");

            // Add a space after each operator
            if (value.match(/[+\-*/%]/) && display.value.length > 0) {
                display.value +=  value ;
            } else {
                display.value += value;
            }
        }

        function clearDisplay() {
            document.getElementById("display").value = '';
        }

        function calculateExpression(expression) {
            // Split the expression into operands and operator
            const matches = expression.match(/([-+]?\d*\.\d+|\d+)([+\-*/%])([-+]?\d*\.\d+|\d+)/);

            if (matches && matches.length === 4) {
                const operand1 = parseFloat(matches[1]);
                const operator = matches[2];
                const operand2 = parseFloat(matches[3]);

                // Perform the calculation based on the operator
                switch (operator) {
                    case '+':
                        return operand1 + operand2;
                    case '-':
                        return operand1 - operand2;
                    case '*':
                        return operand1 * operand2;
                    case '/':
                        // Handle division by zero
                        return (operand2 !== 0) ? operand1 / operand2 : 'Error';
                    case '%':
                        // Handle modulus operation
                        return operand1 % operand2;
                    default:
                        return 'Error';
                }
            } else {
                return 'Error';
            }
        }

        function calculateAndDisplay() {
            var display = document.getElementById("display");
            var result = calculateExpression(display.value);
            display.value = result;
        }
    
    </script>
</head>
<body>


<form>
<h2 class="rounded-pill">Calculator</h2>
<br>
<input type="text" name="display" id="display" readonly>
    <br>
    <button style="width: 100%;;max-height:fit-content;background-color:rgb(53,94,59);" type="button" onclick="clearDisplay()">C</button>
    <br>
    <button  class="ceva"  type="button" onclick="updateDisplay('1')">1</button>
    <button class="ceva"   type="button" onclick="updateDisplay('2')">2</button>
    <button  class="ceva"  type="button" onclick="updateDisplay('3')">3</button>
    <button  class="ceva"  type="button" onclick="updateDisplay('*')">*</button>
    <br>
    <button class="ceva"  type="button" onclick="updateDisplay('4')">4</button>
    <button  class="ceva" type="button" onclick="updateDisplay('5')">5</button>
    <button  class="ceva" type="button" onclick="updateDisplay('6')">6</button>
    <button  class="ceva" type="button" onclick="updateDisplay('/')">/</button>
    <br>
    <button  class="ceva" type="button" onclick="updateDisplay('7')">7</button>
    <button class="ceva" type="button" onclick="updateDisplay('8')">8</button>
    <button  class="ceva" type="button" onclick="updateDisplay('9')">9</button>
    <button  class="ceva" type="button" onclick="updateDisplay('%')">%</button>
    <br>
    <button class="ceva" type="button" onclick="updateDisplay('0')">0</button>
    <button  class="ceva" type="button" onclick="updateDisplay('-')">-</button>
    <button  class="ceva" type="button" onclick="updateDisplay('+')">+</button>
    <button  class="ceva" type="button" onclick="calculateAndDisplay()">=</button>

</form>


</body>
</html>
