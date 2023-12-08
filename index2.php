<form id="myForm" >
    <label>
        <input type="radio" name="myRadioGroup" value="Option 1"> Option 1
    </label>
    <label>
        <input type="radio" name="myRadioGroup" value="Option 2"> Option 2
    </label>
    <label>
        <input type="radio" name="myRadioGroup" value="Option 3"> Option 3
    </label>

    <button type="submit" onclick="getSelectedRadioValue(event)">Get Selected Value</button>
</form>

<script>
    function getSelectedRadioValue(e) {
        e.preventDefault()
        var selectedValue = document.querySelector('input[name="myRadioGroup"]:checked');

        if (selectedValue) {
            alert("Selected value: " + selectedValue.value);

            <?php

            
             ?>
        } else {
            alert("Please select a value");
        }

        
    }
</script>