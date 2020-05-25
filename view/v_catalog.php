<div class="catalog row">

<div class="filter col col-2">
    <div class="filter__inner">
        <?=$filter?>
    </div>
</div>

<div class="main-part col col-10">
    <div class="main-part__inner">
    <?=$mainpart?>
    </div>
</div>

</div>

<script>
window.onload = function() {
    function getFilter(text_id) {
        let filterData = [];
        $('.filt:checked').each(function() {
            filterData.push($(this).val())
            console.log(filterData);
            return filterData;
        })
    }
    $('.filt').on('click', function() {
        let category = [];
        for (let i = 0; i < document.querySelectorAll('.filt').length; i++) {
            category.push(document.querySelectorAll('.filt')[i].getAttribute('value'))
        }
        console.log(category);

        getFilter();
        $.ajax({
            url: '<?$DATA_BASE?>controller/catalog',
            method: "POST",
            data: {category: category},
            cache: false,
            success: function(category) {
                $(".products").html(category);
            }

        })
    })
}
</script>
