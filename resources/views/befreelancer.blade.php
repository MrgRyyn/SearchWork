
@include('header')

@include('template._be-freelancer')

@include('footer')


<script>
    function formatInput(inputElement, targetInputId) {
            let currentValue = inputElement.value;
            let formattedValue = currentValue.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            let numericValue = parseInt(formattedValue.replace(/,/g, ""));
            
            if (numericValue > 99999999999) {
                formattedValue = "99,999,999,999";
                numericValue = 99999999999;
            }
            
            inputElement.value = formattedValue;
            document.getElementById(targetInputId).value = numericValue;
        }
</script>
