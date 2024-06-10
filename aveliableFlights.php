<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./asset/style/aviliableFlights.css">
</head>

<body>
    <div id="cont">
        <div id="flightcover"><!-- --></div>
        <div id="box">
            <div id="minibox">
                <table>
                    <thead>
                        <th>Flight Number</th> 
                        <th>Departure From</th>
                        <th>Destination </th>
                        <th>Departure Date</th>
                        <th>Price</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>20</td>
                            <td>Ethiopia</td>
                            <td>Dubai</td>
                            <td>2024/06/08</td>
                            <td>$2300</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <form action="./" method="post">
                <input type="number" name="flightNumber" id="flightNumber">
                <button type="submit">book</button>
            </form>
        </div>
    </div>
</body>
<script src="">
    document.getElementById("flightNum").style.width = document.getElementById("col1").offsetWidth + "px";
    document.getElementById("depFrom").style.width = document.getElementById("col2").offsetWidth + "px";
    document.getElementById("dest").style.width = document.getElementById("col3").offsetWidth + "px";
    document.getElementById("depDate").style.width = document.getElementById("col4").offsetWidth + "px";
    document.getElementById("price").style.width = document.getElementById("col5").offsetWidth + "px";
</script>

</html>