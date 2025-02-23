<style>
    .Table {
        margin-top: 30px;
        padding: 20px;
        border-radius: 8px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .Table table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }

    .Table th,
    .Table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .Table th {
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
    }

    .Table tr:hover {
        background-color: #f1f1f1;
    }

    .Table td img {
        width: 50px;
        /* Set the image size */
        height: 50px;
        /* Set the image size */
        object-fit: cover;
        border-radius: 5px;
    }
</style>
</div>
<!-- Content Start -->
<div class="content">
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <!-- <div class="ms-3">
                            <p class="mb-2">Today Entries</p>
                            <h6 class="mb-0"><?php // echo $count_today ?></h6>
                        </div> -->
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Visitors</p>
                        <h6 class="mb-0"><?php echo $visitor_count ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Today Revenue</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Revenue</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->


    <!-- Sales Chart Start -->
    <div class="Table">
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sample Product</td>
                    <td>10</td>
                    <td>$20</td>
                    <td>
                        <>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>