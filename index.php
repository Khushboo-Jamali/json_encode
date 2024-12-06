<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>
<style>
    /* General table styling */
    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-family: Arial, sans-serif;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Header styling */
    .styled-table thead {
        background-color: #2d3436;
        color: white;
        text-align: left;
    }

    /* Table cells */
    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
    }

    /* Alternate row colors */
    .styled-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Hover effect on rows */
    .styled-table tbody tr:hover {
        background-color: #ddd;
        cursor: pointer;
    }

    /* Table row styling */
    .styled-table tbody tr {
        transition: background-color 0.3s ease;
    }

    /* Table header styling */
    .styled-table th {
        font-size: 16px;
        font-weight: bold;
    }
</style>

<body>
    <div class="container">
        <div class="text-center text-white bg-dark my-4 py-3">
            <h3>PHP WITH AJAX & JSON</h3>
        </div>

        <div id="load-data"></div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="./jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "fetch-json.php",
                type: "POST",
                data: {
                    id: 3
                },
                dataType: "JSON",
                success: function(data) {
                    var table =
                        '<table border="1" cellpadding="10" cellspacing="0" class="styled-table" style="width:100%;">';
                    table +=
                        "<thead><tr><th>ID</th><th>Name</th><th>Email</th></tr></thead>";
                    table += "<tbody>";
                    // console.log(data);
                    $.each(data, function(key, value) {
                        table += "<tr>";
                        table += "<td>" + value.id + "</td>";
                        table += "<td>" + value.name + "</td>";
                        table += "<td>" + value.email + "</td>";
                        table += "</tr>";
                        // $('#load-data').append(value.id + " " + value.name + " " + value.email + "<br>");
                    });
                    table += "</tbody></table>";
                    $("#load-data").html(table);
                },
            });

            // $.getJSON("fetch-json.php", function (data) {
            //   var table =
            //     '<table border="1" cellpadding="10" cellspacing="0" class="styled-table" style="width:100%;">';
            //   table +=
            //     "<thead><tr><th>ID</th><th>Name</th><th>Email</th></tr></thead>";
            //   table += "<tbody>";
            //   // console.log(data);
            //   $.each(data, function (key, value) {
            //     table += "<tr>";
            //     table += "<td>" + value.id + "</td>";
            //     table += "<td>" + value.name + "</td>";
            //     table += "<td>" + value.email + "</td>";
            //     table += "</tr>";
            //     // $('#load-data').append(value.id + " " + value.name + " " + value.email + "<br>");
            //   });
            //   table += "</tbody></table>";

            //   // Append the table to the element with id 'load-data'
            //   $("#load-data").html(table);
            // });
        });
    </script>
</body>

</html>