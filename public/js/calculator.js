window.onload = function() {

    let waitTime = 1000;

    const operands = [
        document.getElementById("operand1"),
        document.getElementById("operand2")
    ];

    operands.forEach((operand) => {
        operand.addEventListener(
            'keyup',
            debounce(() => {
                calculate();
            }, waitTime),
        );
    });

    function validateOperands () {
        let isValid = true;
        let numeric = new RegExp('^\\d+(?:\.\\d+)?$');

        operands.forEach((operand) => {
            if (!numeric.test(operand.value)) {
                isValid = false;
            }
        });

        return isValid;
    }

    function calculateRequest() {
        let operation = $('#operation option:selected').text();;
        $.ajax({
            method: "GET",
            dataType: "json",
            url: operands[0].value + "/" + operation + "/" + operands[1].value,
        })
            .done(function( response ) {
                let result = document.getElementById("result");
                result.textContent = response["result"];
            });
    }

    function calculate() {
        if(validateOperands()) {
            calculateRequest();
        }
    }

    function debounce(callback, waitTimeMS) {
        let timer;

        return (...args) => {
            clearTimeout(timer);

            timer = setTimeout(() => {
                callback(...args);
            }, waitTimeMS);
        };
    }

    function operationChosen(element) {
        let dropdownMenuButton = document.getElementById("dropdownMenuButton");
        let backup = dropdownMenuButton.textContent;
        dropdownMenuButton.textContent = element.textContent;
        element.textContent = backup;
        calculate();
    }

    $('select').on('change', function(){
        calculate();
    });

    let dropdownItems = document.getElementsByClassName("dropdown-item");

    for (let i = 0; i < dropdownItems.length; i++) {
        dropdownItems[i].addEventListener(
            'click',
            debounce(() => {
                operationChosen(dropdownItems[i]);
            }, waitTime),
        );
    }
};