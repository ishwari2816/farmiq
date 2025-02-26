<div class="main-content">
    <h1>शेतीमाल यादी</h1>
    <a href="<?= base_url('admin_panel/masters/create') ?>" class="btn btn-primary float-end mb-3">नवीन शेतीमाल</a>
    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $index => $item) : ?>
                <tr>
                    <td><?= $start + $index ?></td>
                    <td><?= $item->name ?></td>
                    <td><?= $item->category ?></td>
                    <td>
                        <a href="<?= site_url('admin_panel/masters/edit/' . $item->id) ?>" class="btn btn-warning btn-sm">Edit</a> |
                        <a href="<?= site_url('admin_panel/masters/delete/' . $item->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="pagination-links">
        <?php echo $pagination; ?>
    </div>
</div> 