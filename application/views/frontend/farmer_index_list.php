<div class="main-content">
    <div class="container mt-5">
        <h2>Market Rates Details List</h2>
        <!-- <a href="<?php //echo site_url('admin_panel/main/add'); ?>" class="btn btn-primary float-end mb-3">Add New Entry</a> -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Taluka</th>
                    <th>Market</th>
                    <th>Commodity</th>
                    <th>Variety</th>
                    <th>Minimum Price</th>
                    <th>Maximum Price</th>
                    <th>Average Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($market_content as $index => $market_contents) : ?>
                    <tr>
                        <td><?php echo $start + $index; ?></td>
                        <td><?php echo $market_contents->state; ?></td>
                        <td><?php echo $market_contents->district; ?></td>
                        <td><?php echo $market_contents->taluka; ?></td>
                        <td><?php echo $market_contents->market; ?></td>
                        <td><?php echo $market_contents->name; ?></td>
                        <td><?php echo $market_contents->variety; ?></td>
                        <td><?php echo $market_contents->max_price; ?></td>
                        <td><?php echo $market_contents->min_price; ?></td>
                        <td><?php echo $market_contents->avg_price; ?></td>
                        <td>
                            <a href="<?php echo site_url('admin_panel/main/edit/' . $market_contents->id); ?>" class="btn btn-warning btn-sm">Edit</a> |
                            <a href="<?php echo site_url('admin_panel/main/delete/' . $market_contents->id); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="pagination-links">
            <?php echo $pagination; ?>
        </div>
    </div>
</div> 