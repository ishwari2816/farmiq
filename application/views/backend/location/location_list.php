<div class="main-content">
    <div class="container mt-5">
        <h2>Location List</h2>
        <a href="<?php echo site_url('admin_panel/location/add'); ?>" class="btn btn-primary float-end mb-3">Add New Location</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Taluka</th>
                    <th>Market</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($locations as $index => $location) : ?>
                    <tr>
                        <td><?php echo $start + $index; ?></td>
                        <td><?php echo $location->state_name; ?></td>
                        <td><?php echo $location->district_name; ?></td>
                        <td><?php echo $location->taluka; ?></td>
                        <td><?php echo $location->market; ?></td>
                        <td>
                            <a href="<?php echo site_url('admin_panel/location/edit/' . $location->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo site_url('admin_panel/location/delete/' . $location->id); ?>" class="btn btn-danger btn-sm">Delete</a>
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