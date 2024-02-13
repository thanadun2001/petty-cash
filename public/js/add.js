 //บวกตัวเลข
 function calculateTotal() {
    var totalCost = 0;

    // Loop through all the input fields with class 'costInput'
    var costInputs = document.getElementsByClassName('costInput');
    for (var i = 0; i < costInputs.length; i++) {
        var costInput = parseFloat(costInputs[i].value);
        // Check if the input is a valid number
        if (!isNaN(costInput)) {
            totalCost += costInput;
        }
    }

    // Update the total label with the calculated result
    document.getElementById('totalLabel').textContent = totalCost.toFixed(2) + ' THB';
}

     // Define the function to merge dropdown values
     function mergeDropdownValues() {

        
        var dropdown1Value = document.getElementById('branch').value;
        var dropdown2Value = document.getElementById('segment').value;
        var dropdown3Value = document.getElementById('costcenter').value;
        var dropdown4Value = document.getElementById('project').value;
        var dropdown5Value = document.getElementById('product').value;
        var dropdown6Value = document.getElementById('bois').value;
        var dropdown7Value = document.getElementById('intercompany').value;
        var dropdown8Value = document.getElementById('reserve').value;

        // Concatenate values with '-'
        var mergedValue =
            `${dropdown1Value}-${dropdown2Value}-${dropdown3Value}-${dropdown4Value}-${dropdown5Value}-${dropdown6Value}-${dropdown7Value}-${dropdown8Value}`;

        // Display the merged value
        document.getElementById("mergedValueDisplay").textContent = "GEN: " + mergedValue;
    }

    // Attach onchange event listeners to each dropdown
    document.getElementById('branch').onchange = mergeDropdownValues;
    document.getElementById('segment').onchange = mergeDropdownValues;
    document.getElementById('costcenter').onchange = mergeDropdownValues;
    document.getElementById('project').onchange = mergeDropdownValues;
    document.getElementById('product').onchange = mergeDropdownValues;
    document.getElementById('bois').onchange = mergeDropdownValues;
    document.getElementById('intercompany').onchange = mergeDropdownValues;
    document.getElementById('reserve').onchange = mergeDropdownValues;

    
    function updateLabels() {
        var selectedOption = document.getElementById('employee').value.split(':');
    
        document.getElementById('EmpIDDisplay').textContent = ': ' + selectedOption[0];
        document.getElementById('NameDisplay').textContent = ': ' + selectedOption[1];
        document.getElementById('LastNameDisplay').textContent = ': ' + selectedOption[2];
        document.getElementById('CompanyDisplay').textContent = ': ' + selectedOption[3];
        document.getElementById('DepartmentDisplay').textContent = ': ' + selectedOption[4];
        document.getElementById('DivisionDisplay').textContent = ': ' + selectedOption[5];
    }
    
    // Attach onchange event listener to the dropdown
    document.getElementById('employee').onchange = updateLabels;
    
    // Call the updateLabels function initially to set the initial values
    updateLabels();

    
