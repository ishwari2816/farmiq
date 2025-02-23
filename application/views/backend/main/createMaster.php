<div class="container1">
    <div class="main-content" style="margin-left: 250px;padding: 20px;">
        <div class="container mt-5">
            <h2>Add Market Data</h2>
            <?php $data = $this->session->userdata('data'); ?>
            <form action="<?php echo site_url('admin_panel/main/CreatePro'); ?>" method="post">
                <div class="row">
                    <div class="col-md-3">
                        <label for="date">Date :</label>
                        <input type="date" class="form-control" name="date" id="date" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <label for="state">State:</label>
                        <input type="text" class="form-control" name="state" id="state" value="<?php echo $data['state'] ?>" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="district">District:</label>
                        <input type="text" class="form-control" name="district" id="district" value="<?php echo $data['district'] ?>" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="taluka">Taluka :</label>
                        <input type="text" class="form-control" name="taluka" id="taluka" value="<?php echo $data['taluka'] ?>" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="market">Market :</label>
                        <input type="text" class="form-control" name="market" id="market" value="<?php echo $data['market'] ?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="commodity">Commodity :</label>
                        <select id="commodity" name="commodity" class="form-control" required>
                            <option value="">Select Commodity</option>
                            <?php foreach ($commodities as $commodity) : ?>
                                <option value="<?php echo $commodity->id; ?>">
                                    <?php echo $commodity->name; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="Variety">Variety :</label>
                        <input type="text" id="variety" name="variety" value="" class="form-control" required>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 10px;">
                    <div class="col-md-3">
                        <label for="min_price">Minimum Price :</label>
                        <input type="text" id="min_price" name="min_price" value="" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label for="max_price">Maximum Price :</label>
                        <input type="text" id="max_price" name="max_price" value="" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label for="avg_price">Average Price :</label>
                        <input type="text" id="avg_price" name="avg_price" value="" class="form-control" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo site_url('admin_panel/main/delete_session_data'); ?>" class="btn btn-secondary">Change Market</a>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>