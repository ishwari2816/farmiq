<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 700px;
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 16px;
        }
        input, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input{
            height: 7px;
        }
        textarea{
            height: 20px;
        }
        button {
            width: 100%;
            padding: 14px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
            
        }
        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="container" style="padding-top: 70px;">
        <h1 >Farmer Registration</h1>
        <!-- <h2>Farmer Registration</h2> -->
        <form action="<?php echo base_url('admin_panel/farmer_dashboard/save') ?>" method="POST">
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" required>
            </div>
            
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" id="quantity" name="quantity" required>
            </div>
            
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" rows="4" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="postDate">Post Date</label>
                <input type="date" id="postDate" name="postDate" required>
            </div>
            
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="Discription">Discription</label>
                <textarea name="Discription" id="" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>
            
            <!-- <div class="form-group">
                <label for="tag">Tag</label>
                <input type="text" id="tag" name="tag" required>
            </div> -->
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
