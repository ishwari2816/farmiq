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
            <form action="<?php echo site_url('admin_panel/main/save'); ?>" method="post" onsubmit="return validateForm();">
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
                    <select class="form-control" id="taluka" name="taluka" required>
                        <option value="">Select Taluka</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="market">Market:</label>
                    <select class="form-control" id="market" name="market" required>
                        <option value="">Select Market</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary"><?php echo isset($location) ? 'Update' : 'Save'; ?></button>
                <a href="<?php echo site_url('admin_panel/location'); ?>" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#state').change(function() {
            var stateId = $(this).val();

            if (stateId) {
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

    $(document).ready(function() {
        // Trigger AJAX when district is selected
        $('#district').change(function() {
            var districtId = $(this).val();

            if (districtId) {
                // Make AJAX request to fetch taluka names for the selected district
                $.ajax({
                    url: '<?php echo site_url('admin_panel/main/getTalukas'); ?>', // The URL to the getTalukas method
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        district_id: districtId
                    }, // Sending district id to the server
                    success: function(response) {
                        // If the response contains taluka names
                        if (response) {
                            var options = '<option value="">Select Taluka</option>'; // Default option
                            $.each(response, function(index, taluka) {
                                options += '<option>' + taluka.taluka + '</option>';
                            });
                            $('#taluka').html(options); // Update the taluka dropdown
                        } else {
                            // If no taluka names found, clear the taluka dropdown
                            $('#taluka').html('<option value="">Select Taluka</option>');
                        }
                    },
                    error: function() {
                        alert('Error fetching taluka names.');
                    }
                });
            } else {
                // If no district is selected, clear the taluka dropdown
                $('#taluka').html('<option value="">Select Taluka</option>');
            }
        });
    });

    $(document).ready(function() {
        $('#taluka').on('change', function() {
            var talukaId = $(this).val();

            if (talukaId) {
                $.ajax({
                    url: '<?php echo site_url("admin_panel/main/fetch_markets_by_taluka"); ?>',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        taluka_name: talukaId
                    },
                    success: function(response) {
                        if (response) {
                            var options = '<option value="">Select Market</option>';
                            $.each(response.markets, function(index, market) {
                                $('#market').append('<option>' + market.market + '</option>');
                            });
                            // $('#taluka').html(options);
                        } else {
                            $('#market').html('<option value="">Select Market</option>');
                        }
                    }
                });
            } else {
                $('#market').html('<option value="">Select Market</option>');
            }
        });
    });
</script>
