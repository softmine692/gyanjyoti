<span class="m-switch m-switch--outline m-switch--success">
    <label>
        <input type="checkbox" {{ $checked ? 'checked' : null }} name="{{ $name ?? null }}"  value="{{ $id }}" onchange="changeStatus(this.value)">
        <span></span>
    </label>
</span>

<script>
    function changeStatus(id) {
        $.ajax({
            url : 'http://127.0.0.1:8000/admin/blog/category/status/change/' + id,
            type : 'GET',
            success : function(data) {
            },
            error : function(request,error)
            {
                alert("Request: "+JSON.stringify(request));
            }
        });
    }
</script>
