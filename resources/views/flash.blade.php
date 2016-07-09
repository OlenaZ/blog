<div class = "container">

    @if (Session::has('flash_message'))

        <div class="alert alert-success">{{ session('flash_message') }}</div>

    @endif

</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script>
    $('div.alert').delay(3000).slideUp(300);
</script>

    


