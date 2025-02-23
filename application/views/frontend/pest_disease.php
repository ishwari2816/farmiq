<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pest Disease - Smart Kisan App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #4CAF50;
        }
        .navbar-brand {
            color: white;
        }
        .table th {
            background-color: #4CAF50;
            color: white;
        }
        .crop-buttons .btn {
            margin: 5px;
            background-color: #4CAF50;
            color: white;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px;
            margin-top: 20px;
        }

        /* Responsive Design */
        @media (max-width: 767px) {
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }

            .table th, .table td {
                padding: 8px;
            }

            .table {
                font-size: 0.9rem;
            }

            .navbar-brand {
                font-size: 1.2rem;
            }

            .crop-select-container {
                margin-bottom: 15px;
            }

            .crop-buttons .btn {
                width: 100%;
                margin-bottom: 10px;
            }

            /* Make the table scrollable horizontally on small screens */
            .table-responsive {
                -webkit-overflow-scrolling: touch;
                overflow-x: auto;
            }

            /* Adjust table layout for mobile */
            .table th, .table td {
                white-space: nowrap;
            }
        }

        @media (min-width: 768px) {
            .table th, .table td {
                padding: 12px;
            }
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">NaPanta Agri - Smart Kisan App</a>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="mb-3 crop-select-container">
            <label for="cropSelect" class="form-label">Select Crop Name</label>
            <select class="form-select" id="cropSelect">
                <option selected>Cotton</option>
                <option>Apple</option>
                <option>Banana</option>
                <option>Brinjal</option>
                <option>Tomato</option>
                <option>Potato</option>
                <option>Wheat</option>
                <option>Maize</option>
                <option>Rice</option>
                <option>Peanut</option>
                <option>Chili</option>
                <option>Onion</option>
                <option>Cauliflower</option>
            </select>
            <button class="btn btn-success mt-2" onclick="filterTable()">SEARCH</button>
        </div>

        <h3 class="mt-4" id="cropTitle">Cotton Crop Pest and Disease Management</h3>

        <!-- Make the table responsive -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Crop</th>
                        <th>Pesticide Name</th>
                        <th>Pest/Disease/Weed Name</th>
                        <th>AI</th>
                        <th>Formulation</th>
                        <th>Diluted in Water</th>
                        <th>Water Per</th>
                    </tr>
                </thead>
                <tbody id="cropTableBody">
                    <tr><td>Cotton</td><td>Flubendiamide 39.35% SC</td><td>Spotted Bollworm</td><td>48-60</td><td>100-125</td><td>375-500</td><td>25</td></tr>
                    <tr><td>Apple</td><td>Carbendazim 50% WP</td><td>Apple Scab</td><td>500</td><td>1g/litre</td><td>500</td><td>200</td></tr>
                    <tr><td>Banana</td><td>Chlorpyrifos 20% EC</td><td>Banana Weevil</td><td>1000</td><td>2ml/litre</td><td>500</td><td>250</td></tr>
                    <tr><td>Brinjal</td><td>Imidacloprid 17.8% SL</td><td>Jassids</td><td>25</td><td>0.3ml/litre</td><td>500</td><td>300</td></tr>
                    <tr><td>Tomato</td><td>Fipronil 5% SC</td><td>Tomato Leaf Miner</td><td>50</td><td>1ml/litre</td><td>500</td><td>350</td></tr>
                    <tr><td>Potato</td><td>Mancozeb 75% WP</td><td>Late Blight</td><td>600</td><td>2g/litre</td><td>500</td><td>400</td></tr>
                    <tr><td>Wheat</td><td>Propiconazole 25% EC</td><td>Rust</td><td>750</td><td>1ml/litre</td><td>500</td><td>450</td></tr>
                    <tr><td>Maize</td><td>Lambda Cyhalothrin 5% EC</td><td>Stem Borer</td><td>30</td><td>0.5ml/litre</td><td>500</td><td>500</td></tr>
                    <tr><td>Rice</td><td>Tricyclazole 75% WP</td><td>Blast</td><td>1000</td><td>2g/litre</td><td>500</td><td>550</td></tr>
                    <tr><td>Peanut</td><td>Endosulfan 35% EC</td><td>Leaf Spot</td><td>1500</td><td>2ml/litre</td><td>500</td><td>200</td></tr>
                    <tr><td>Chili</td><td>Carbendazim 50% WP</td><td>Leaf Spot</td><td>250</td><td>1g/litre</td><td>500</td><td>300</td></tr>
                    <tr><td>Onion</td><td>Chlorothalonil 75% WP</td><td>Downy Mildew</td><td>300</td><td>0.5g/litre</td><td>500</td><td>200</td></tr>
                    <tr><td>Cauliflower</td><td>Azoxystrobin 23.5% SC</td><td>Alternaria Leaf Spot</td><td>500</td><td>1ml/litre</td><td>500</td><td>250</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Our Farmer Services</h5>
                    <ul>
                        <li>Daily Market Prices</li>
                        <li>Commodity Market Prices</li>
                        <li>Cold Storages</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>About NaPanta</h5>
                    <ul>
                        <li>About us</li>
                        <li>Careers</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact NaPanta Smart Kisan Agri App</h5>
                    <p>G12, H.No: 6-3-652, Dhruvatara Apartments, Somajiguda, Hyderabad - 500 082</p>
                    <p>Phone: +91 93461 99939</p>
                    <p>Email: support@napanta.com</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function filterTable() {
            let selectedCrop = document.getElementById("cropSelect").value;
            document.getElementById("cropTitle").innerText = selectedCrop + " Crop Pest and Disease Management";
            let rows = document.querySelectorAll("#cropTableBody tr");
            rows.forEach(row => {
                row.style.display = row.cells[0].innerText === selectedCrop ? "" : "none";
            });
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
