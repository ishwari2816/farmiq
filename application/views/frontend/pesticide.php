<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesticide Dealers and Farmers in India</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .tag-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .tag {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        /* Make table scrollable on smaller screens */
        .table-responsive { 
            overflow-x: auto;
        }
        /* Make rows clickable */
        tr.clickable-row {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Pesticide Dealers and Farmers in India</h2>
        <div class="row my-3">
            <div class="col-12 col-sm-6 col-md-4">
                <select class="form-select" id="state-select">
                    <option selected>Select State</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <select class="form-select" id="district-select">
                    <option selected>Select District</option>
                    <!-- Districts will be populated based on the selected state -->
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <select class="form-select" id="area-select">
                    <option selected>Select Area</option>
                    <!-- Areas will be populated based on the selected district -->
                </select>
            </div>
        </div>

        <h4>Pesticide Dealers and Farmers</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-success">
                    <tr>
                        <th>#</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody id="data-table">
                    <!-- Sample data for dealers and farmers -->
                    <script>
                        // Randomly generated farmer data
                        const farmers = [
                            { id: 1, name: "Ravi Kumar", location: "Village A, Andhra Pradesh", contact: "9876543210", state: "Andhra Pradesh" },
                            { id: 2, name: "Vikram Singh", location: "Village B, Maharashtra", contact: "8765432109", state: "Maharashtra" },
                            { id: 3, name: "Ajay Yadav", location: "Village C, Delhi", contact: "7654321098", state: "Delhi" },
                            { id: 4, name: "Suresh Reddy", location: "Village D, Uttar Pradesh", contact: "6543210987", state: "Uttar Pradesh" },
                            { id: 5, name: "Manoj Kumar", location: "Village E, Tamil Nadu", contact: "5432109876", state: "Tamil Nadu" },
                            { id: 6, name: "Rajesh Patel", location: "Village F, Andhra Pradesh", contact: "4321098765", state: "Andhra Pradesh" },
                            { id: 7, name: "Sunil Gupta", location: "Village G, Maharashtra", contact: "3210987654", state: "Maharashtra" },
                            { id: 8, name: "Sandeep Sharma", location: "Village H, Delhi", contact: "2109876543", state: "Delhi" },
                            { id: 9, name: "Harish Kumar", location: "Village I, Uttar Pradesh", contact: "1098765432", state: "Uttar Pradesh" },
                            { id: 10, name: "Kumar Ghosh", location: "Village J, Tamil Nadu", contact: "0987654321", state: "Tamil Nadu" }
                        ];

                        // Sample pesticide dealer data
                        const dealers = [
                            { id: 11, name: "Dealer 1", location: "City 1", contact: "6789012345", state: "Andhra Pradesh" },
                            { id: 12, name: "Dealer 2", location: "City 2", contact: "7890123456", state: "Maharashtra" },
                            { id: 13, name: "Dealer 3", location: "City 3", contact: "8901234567", state: "Delhi" },
                            { id: 14, name: "Dealer 4", location: "City 4", contact: "9012345678", state: "Uttar Pradesh" },
                            { id: 15, name: "Dealer 5", location: "City 5", contact: "0123456789", state: "Tamil Nadu" }
                        ];

                        // Add farmer data to the table
                        function addFarmerData() {
                            const tableBody = document.getElementById('data-table');
                            farmers.forEach(farmer => {
                                const row = `<tr class="clickable-row" onclick="viewDetails('farmer', ${farmer.id})">
                                                <td>${farmer.id}</td>
                                                <td>Farmer</td>
                                                <td>${farmer.name}</td>
                                                <td>${farmer.location}</td>
                                                <td><a href="javascript:void(0);">View</a></td>
                                            </tr>`;
                                tableBody.innerHTML += row;
                            });
                        }

                        // Add pesticide dealer data to the table
                        function addDealerData() {
                            const tableBody = document.getElementById('data-table');
                            dealers.forEach(dealer => {
                                const row = `<tr class="clickable-row" onclick="viewDetails('dealer', ${dealer.id})">
                                                <td>${dealer.id}</td>
                                                <td>Pesticide Dealer</td>
                                                <td>${dealer.name}</td>
                                                <td>${dealer.location}</td>
                                                <td><a href="javascript:void(0);">View</a></td>
                                            </tr>`;
                                tableBody.innerHTML += row;
                            });
                        }

                        // Function to show details of farmer/dealer when "View" is clicked
                        function viewDetails(type, id) {
                            let data;
                            if (type === 'farmer') {
                                data = farmers.find(f => f.id === id);
                            } else if (type === 'dealer') {
                                data = dealers.find(d => d.id === id);
                            }
                            if (data) {
                                alert(`Details of ${type}:\nName: ${data.name}\nLocation: ${data.location}\nContact: ${data.contact}`);
                            }
                        }

                        // Add all data to the table
                        addFarmerData();
                        addDealerData();
                    </script>
                </tbody>
            </table>
        </div>

        <h4 class="mt-4">Pesticide Dealers - City Wise</h4>
        <div class="tag-container">
            <a href="#" class="tag">Delhi</a>
            <a href="#" class="tag">Mumbai</a>
            <a href="#" class="tag">Kolkata</a>
            <a href="#" class="tag">Chennai</a>
            <a href="#" class="tag">Bangalore</a>
            <a href="#" class="tag">Hyderabad</a>
        </div>

        <h4 class="mt-4">Fertilizer Dealers - District Wise</h4>
        <div class="tag-container" id="fertilizer-districts">
            <!-- Dynamic district tags will be added here based on selected state -->
        </div>

        <h4 class="mt-4">Other Categories</h4>
        <div class="tag-container">
            <a href="#" class="tag">Fertilizer Dealers</a>
            <a href="#" class="tag">Seed Suppliers</a>
            <a href="#" class="tag">Pesticide Dealers</a> 
        </div>
    </div>

    <footer class="text-center mt-5 p-3 bg-light">
        <p>&copy; 2025 Pesticide Dealers. All Rights Reserved.</p>
        <p>Contact Us: support@pesticidedealers.com</p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>

    <script>
        // Populate the district select box based on the selected state
        document.getElementById('state-select').addEventListener('change', function () {
            const state = this.value;
            const districtSelect = document.getElementById('district-select');
            const areaSelect = document.getElementById('area-select');
            
            districtSelect.innerHTML = '<option selected>Select District</option>';
            areaSelect.innerHTML = '<option selected>Select Area</option>';

            if (state) {
                // Populate districts dynamically
                const districts = [
                    "District 1", "District 2", "District 3"
                ];
                districts.forEach(district => {
                    const option = document.createElement('option');
                    option.textContent = district;
                    option.value = district;
                    districtSelect.appendChild(option);
                });
            }
        });
    </script>
</body>
</html>
