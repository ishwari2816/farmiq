<style>
    .tag-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .tag {
        background-color: #28a745;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        text-decoration: none;
    }
    .tag2 {
        background-color:rgb(25, 109, 236);
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        text-decoration: none;
    } 

    .table-responsive {
        overflow-x: auto;
    }

    tr.clickable-row {
        cursor: pointer;
    }
</style>
<h4 class="mt-4">Pesticide Dealers - City Wise</h4>
<div class="tag-container">
    <?php foreach ($agri_shops as $agri_shop): ?>
        <a href="#" class="tag"><?php echo $agri_shop->name; ?></a>
    <?php endforeach; ?>
    <a href="" class="tag2">See More</a>
</div><br>
<h4 class="mt-4">Fertilizers Dealers - District Wise</h4>
<div class="tag-container">
    <?php foreach ($ferti_shops as $ferti_shop): ?>
        <a href="#" class="tag"><?php echo $ferti_shop->name; ?></a>
    <?php endforeach; ?>
    <a href="" class="tag2">See More</a>

</div><br>
<h4 class="mt-4">Soil Labs - District Wise</h4>
<div class="tag-container">
    <?php foreach ($soil_labs as $soil_lab): ?>
        <a href="#" class="tag"><?php echo $soil_lab->name; ?></a>
    <?php endforeach; ?>
    <a href="" class="tag2">See More</a>

</div><br>
<h4 class="mt-4">Cold Storages - Near Me</h4>
<div class="tag-container">
    <?php foreach ($cold_storages as $cold_storage): ?>
        <a href="#" class="tag"><?php echo $cold_storage->name; ?></a>
    <?php endforeach; ?>
    <a href="" class="tag2">See More</a>

</div>