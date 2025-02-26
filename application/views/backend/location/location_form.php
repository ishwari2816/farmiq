<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // JavaScript form validation
        function validateForm() {
            var state = document.getElementById('state').value;
            var district = document.getElementById('district').value;
            var taluka = document.getElementById('taluka').value;
            var market = document.getElementById('market').value;

            if (state == "" || district == "" || taluka == "" || market == "") {
                alert("All fields must be filled out.");
                return false;
            }
            return true;
        } 
    </script>
</head>

<body>
    <div style="margin-left: 250px;padding: 20px;">
        <div class="container mt-5">
            <h2><?php echo isset($location) ? 'Edit' : 'Add'; ?> Location</h2>
            <form action="<?php echo site_url('admin_panel/location/save'); ?>" method="post" onsubmit="return validateForm();">
                <?php if (isset($location)) : ?>
                    <input type="hidden" name="id" value="<?php echo $location->id; ?>">
                <?php endif; ?>
                <div class="form-group">
                    <label for="state">State:</label>
                    <select class="form-control" id="state" name="state" required>
                        <option value="">Select State</option>
                        <?php foreach ($states as $state) : ?>
                            <option value="<?php echo $state->id; ?>" <?php echo isset($location) && $location->state_id == $state->id ? 'selected' : ''; ?>>
                                <?php echo $state->state_name; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="district">District:</label>
                    <select class="form-control" id="district" name="district" required>
                        <option value="">Select District</option>
                        <?php if (isset($districts)) : ?>
                            <?php foreach ($districts as $district) : ?>
                                <option value="<?php echo $district->district_id; ?>" <?php echo isset($location) && $location->district == $district->district_id ? 'selected' : ''; ?>>
                                    <?php echo $district->district_name; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="taluka">Taluka:</label>
                    <input type="text" class="form-control" id="taluka" name="taluka" value="<?php echo isset($location) ? $location->taluka : ''; ?>" required>
                </div>
                <div class="form-group">
                    <label for="market">Market:</label>
                    <input type="text" class="form-control" id="market" name="market" value="<?php echo isset($location) ? $location->market : ''; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary"><?php echo isset($location) ? 'Update' : 'Save'; ?></button>
                <a href="<?php echo site_url('admin_panel/location'); ?>" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        // Trigger AJAX when state is selected
        $('#state').change(function() {
            var stateId = $(this).val();

            if (stateId) {
                // Make AJAX request to fetch districts based on selected state
                $.ajax({
                    url: '<?php echo site_url('admin_panel/location/getDistricts'); ?>', // The URL to the getDistricts method
                    type: 'GET',
                    data: {
                        state_id: stateId
                    }, // Sending state id to the server
                    success: function(response) {
                        // Clear current districts
                        $('#district').empty();
                        // Add default option
                        $('#district').append('<option value="">Select District</option>');

                        // Parse the response (assuming the server returns a JSON object)
                        var districts = JSON.parse(response);

                        // Populate the district dropdown with the received districts
                        $.each(districts, function(index, district) {
                            $('#district').append('<option value="' + district.district_id + '">' + district.district_name + '</option>');
                        });
                    },
                    error: function() {
                        alert('Error fetching districts.');
                    }
                });
            } else {
                // If no state is selected, clear the district dropdown
                $('#district').empty();
                $('#district').append('<option value="">Select District</option>');
            }
        });
    });
</script>

</html>