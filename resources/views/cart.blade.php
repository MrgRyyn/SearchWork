

    @include('header')




    @include('template._cart-template')



    {{-- <section id="feature-services">
        <h2>Feature Services</h2>
        <p>Take a look at our feature services</p>
     
        {{-- @include('template._product2') --}}
     {{-- </section> --}}




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
   document.addEventListener('DOMContentLoaded', function () {
        var packageSelect = document.getElementById('package-select');
        var dealPrice = document.getElementById('deal-price');
        var packagePrice = document.getElementById('package-price');

        // Calculate subtotal on package select change
        packageSelect.addEventListener('change', function () {
            var selectedPrice = packageSelect.value;
            dealPrice.textContent = selectedPrice;
        });

        // Calculate initial subtotal
        var initialPrice = packagePrice.textContent;
        dealPrice.textContent = initialPrice;
    });
</script>  

<script type="text/javascript">
    
</script>