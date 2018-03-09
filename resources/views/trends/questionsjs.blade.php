<script>
    // Redirect user to the trends page for the selection question
    // TODO - do this instead with vue component (no need for redirect)
    $( "#trends-sel-q" ).change(function() {
        $( "#trends-sel-q option:selected" ).each(function() {
            window.location.href = $(this).val();
        });
    });
</script>