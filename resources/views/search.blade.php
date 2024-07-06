@include('header')



@include('template._top-banner')



@include('template._sort')


<section id="service-and-filter">



    @include('template._product2')

</section>



@include('footer')


<script src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.list').click(function(){
            const value = $(this).attr('data-fiter');
            if (value == 'all'){
                $('.pro-card').show('1000');
            }
            else{
                $('.pro-card').not('.'+value).hide('1000')
                $('.pro-card').filter('.'+value).show('1000')
            }
        })
        // add active class on seleted item
        $('.list').click(function(){
            $(this).addClass('active').siblings().removeClass('active');
        })
    })


</script>
<script type="text/javascript" src="sort.js"></script>
