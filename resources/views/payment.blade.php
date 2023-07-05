

@include('header')



    @include('template._pay')



@include('footer')

<script type="text/javascript">

    let selectBox = document.querySelector('#package-select');
    selectBox.addEventListener('change', function() {
        let selectedOption = selectBox.value ;
        let packageSelect = document.querySelector('#package-price')
        packageSelect.innerText = selectedOption;
    });
 
    let selectBox2 = document.querySelector('#package-select2');
    selectBox2.addEventListener('change', function() {
        let selectedOption2 = selectBox2.value ;
        let packageSelect2 = document.querySelector('#package-price2')
        packageSelect2.innerText = selectedOption2;
    });
 
 </script>  
