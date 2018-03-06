<html>
    <head>
        <meta charset="UTF-8">
        <title>RADEL Search</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @media(max-width:500px)
            {
                .radel-input
                {
                    width: 80%;
                    font-size: 20px;
                }
            }

            @media(min-width:501px)
            {
                .radel-input
                {
                    width: 300px;
                    font-size: 20px;
                }
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="text-center">
                <h2>DROPDOWN TYPE SEARCH</h2>
                <form name="search" action="" method="get">
                    <select class="form-control" style="width:180px; display: inline" name="document">
                        <option value="">Please select one</option>
                        <option value="quotation">Quotation</option>
                        <option value="invoice">Invoice</option>
                        <option value="dc">Delivery Challan</option>
                        <option value="po">Purchase Order</option>
                    </select>                  
                    <input class="form-control text-center" type="text" name="name" placeholder="S   E   A   R   C   H" style="width: 400px; display: inline"><br><br>
                    <input class="btn" type="submit" name="submit" value="SEARCH">
                </form>

            </div>
        </div>
    </body>
</html>
