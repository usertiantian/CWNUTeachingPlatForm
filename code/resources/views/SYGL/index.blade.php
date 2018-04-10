<meta name="_token" content="{{ csrf_token() }}"/>


<div>
        <button type="submit" onclick="send()">Submit</button>
</div>

<script>
    function send()
    {
        $.ajax({
            type: 'POST',
            url: '/postTest',
            data: { date : '2015-03-12'},
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(data){
                console.log(data.status);
            },
            error: function(xhr, type){
                alert('Ajax error!')
            }
        });
    }

</script>