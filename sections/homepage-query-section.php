<?php
$serviceCategoryIds = get_option('selectService');
$serviceCategories = get_terms([
    'term_taxonomy_id' => $serviceCategoryIds,
    'hide_empty'       => false
]);
?>
<div class="orange-banner-form row justify-content-center">
    <select id="bannerServiceCat" class="col-md-3 mr-3">
        <?php foreach ($serviceCategories as $serviceCategory): ?>
            <option value="<?php echo $serviceCategory->term_id ?>"><?php echo $serviceCategory->name ?></option>
        <?php endforeach; ?>
    </select>
    <div id="bannerService" class="col-md-5">
        <input type="text" placeholder="Lorem Ipsum Dummy Text Lorem Ipsum">
        <ul class="servicece-list">
            <li><a href="#">Product 1</a></li>
            <li><a href="#">Product 2</a></li>
            <li><a href="#">Product 3</a></li>
            <li><a href="#">Product 4</a></li>
            <li><a href="#">Product 5</a></li>
        </ul>
    </div>
</div>

