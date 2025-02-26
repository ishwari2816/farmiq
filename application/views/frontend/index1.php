<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Data Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: green;
            color: black;
            font-weight: bolder;
        }

        h2 {
            padding-top: 10px;
            font-weight: bolder;
        }
    </style>
</head>

<body>
    <center>
        <h2>Market Data Table</h2>
    </center>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>State</th>
                <th>District</th>
                <th>Taluka</th>
                <th>Market</th>
                <th>Commodity</th>
                <th>Variety</th>
                <th>Max Price</th>
                <th>Min Price</th>
                <th>Avg Price</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($market_content as $index => $market_contents) : ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $market_contents->createdDate; ?></td>
                    <td><?php echo $market_contents->state; ?></td>
                    <td><?php echo $market_contents->district; ?></td>
                    <td><?php echo $market_contents->taluka; ?></td>
                    <td><?php echo $market_contents->market; ?></td>
                    <td><?php echo $market_contents->name; ?></td>
                    <td><?php echo $market_contents->variety; ?></td>
                    <td><?php echo $market_contents->max_price; ?></td>
                    <td><?php echo $market_contents->min_price; ?></td>
                    <td><?php echo $market_contents->avg_price; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="container" style="margin-top: 20px;margin-bottom:20px;">
        <center>
            <h2>Demo Video</h2>
        </center>
        <iframe width="1200" height="565" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
</body>


</html>