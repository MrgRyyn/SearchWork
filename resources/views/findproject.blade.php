
    @include('header')



    @include('template._find-project-banner')

    <section id="press-filter">
        <div class="press-fltr">
            <h3>Categories</h3>
            <li class="list active" data-fiter="all"><h4>Show all</h4></li>
            <li class="list" data-fiter="graphic"><h4>Graphic & Design</h4></li>
            <li class="list" data-fiter="photography"><h4>Photography & Videography</h4></li>
            <li class="list" data-fiter="editing"><h4>Video & Photo Editing</h4></li>
            <li class="list" data-fiter="gaming"><h4>Gaming</h4></li>
            <li class="list" data-fiter="web"><h4>Web Development</h4></li>
            <li class="list" data-fiter="business"><h4>Business</h4></li>
            <li class="list" data-fiter="music"><h4>Music & Audio</h4></li>
            <li class="list" data-fiter="other"><h4>Other</h4></li>
        </div>
    </section>
    
    <section id="service-and-filter">

        @include('template._filter')


        @include('template._project1')
        
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