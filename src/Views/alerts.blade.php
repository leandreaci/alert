@if (session()->has('flash_message'))
    <script>
        $.notify({
            title: "{!! session('flash_message.title') !!}",
            message: "{!! session('flash_message.message') !!}",
            timer: 1000
        },{
            type: "{{ session('flash_message.type') }}"
        });
    </script>
@endif