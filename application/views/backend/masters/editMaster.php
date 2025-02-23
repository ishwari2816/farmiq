<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Item</title>
</head>
<style>
    .main-content {
        margin-left: 250px;
        padding: 20px;
    }
</style>

<body>
    <div class="main-content">
        <div class="container mt-5">
            <h1>Edit Item</h1>
            <?php echo validation_errors(); ?>
            <form action="<?= site_url('admin_panel/masters/editPro/'.$item->id) ?>" method="POST" id="createItemForm">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" value="<?= $item->name; ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category:</label>
                    <select id="category" name="category" class="form-select" required>
                        <!-- Placeholder Option -->
                        <option value="" disabled selected hidden><?= $item->category; ?></option>

                        <!-- Category Options -->
                        <option value="Vegetables">Vegetables</option>
                        <option value="Flowers">Flowers</option>
                        <option value="Fruits">Fruits</option>
                    </select>
                </div>



                <!-- <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" id="price" name="price" class="form-control" required>
                </div> -->

                <button type="submit" class="btn btn-primary">Edit Item</button>
            </form>
        </div>
    </div>
    <!-- JavaScript validation -->
    <script>
        document.getElementById('createItemForm').addEventListener('submit', function(event) {
            // Validate name
            var name = document.getElementById('name').value;
            if (name.trim() === '') {
                alert('Please enter a name.');
                event.preventDefault(); // Prevent form submission
                return;
            }

            // Validate description
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
</body>

</html>