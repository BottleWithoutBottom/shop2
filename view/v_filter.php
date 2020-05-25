<h2>Категории</h2>
<ul class="list-group">
<? foreach ($categories as $category):?>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <form method="post">
            <div class="form-check">
            <label class="form-check-label">
            <input type="checkbox" checked class="form-check-input filt" value="<?=$category['cat_title']?>" id=<?=$category['cat_title']?>>
            <?=$category['cat_title']?>
            </label>

            </div>
        </form>
    </li>
<? endforeach;?>
</ul>