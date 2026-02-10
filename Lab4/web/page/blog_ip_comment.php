<div>
    <form id="fm_blog">
        <input type="text" name="blog">
        <button type="submit">SAVE</button>
    </form>
</div>

<script>
    $("#fm_blog").submit(function(e) {
        $fm_blog = $(this);
        e.preventDefault();

        $.ajax({
            url: "/php/blog.php",
            type: "POST",
            data: $fm_blog.serialize(),
            success: function(res) {
                alert(res);
            }
        });
    });
</script>