<div class="container1">
    <div class="main-content" style="margin-left: 250px;padding: 20px;">
        <div class="container mt-5">
            <h1>Create New Item</h1>
            <?php echo validation_errors(); ?>
            <form action="<?= site_url('admin_panel/masters/createPro') ?>" method="POST" id="createItemForm">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category:</label>
                    <select id="category" name="category" class="form-select" required>
                        <option value="" disabled selected>Select a category</option>
                        <option value="Vegetables">Vegetables</option>
                        <option value="Flowers">Flowers</option>
                        <option value="Fruits">Fruits</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create Item</button>
            </form>
        </div>
    </div>
</div>
<script>
    document.getElementById('createItemForm').addEventListener('submit', function(event) {
        var name = document.getElementById('name').value;
        if (name.trim() === '') {
            alert('Please enter a name.');
            event.preventDefault();
            return;
        }

        var description = document.getElementById('category').value;
        if (description.trim() === '') {
            alert('Please Select a Category.');
            event.preventDefault();
            return;
        }

    });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>