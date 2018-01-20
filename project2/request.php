<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
<input type="text" id="rowData" value="">
<div id="response"></div>
<script>
    $(document).ready(function () {
        $('#rowData').keyup(function () {
            var data = $(this).val();

            $.ajax({
                type:'POST',
                url: "abc.php",
                data: {data:data},
            }).done(function(response) {
              $('#response').html(response)
            });

        })
    })
</script>