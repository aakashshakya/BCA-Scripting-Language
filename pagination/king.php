<?php

    $con = mysqli_connect('127.0.0.1','root','!!#elloWorld!!','sweethome');
    if(!$con){die("Cannot Connect To Database");}

    $currentPage = 0;
    $searchlimit = 10;

    if(isset($_GET['page'])){
        if($_GET['page']<=0 || !is_numeric($_GET['page'])){
            $currentPage = 0;
        }else{
        $currentPage = ($_GET['page']-1)*$searchlimit;
        }
    }
    
    /* SQL QUERY to get total number of data in databse */
    $result = mysqli_query($con,"SELECT `id`, `sortname`, `name` FROM `countries`");
    /*246*/ 
    $totalResult = mysqli_num_rows($result);
    /* if data count is not less than 0 */
    if($totalResult>0){
        
        /* if data count is not less than 0 */
        $pagination = ceil($totalResult / $searchlimit);

        /* kati ota pagination links banauney bhanera  */
        $sql="SELECT `id`, `sortname`, `name` FROM `countries` LIMIT  $currentPage,$searchlimit";
        echo "<h1>".$sql."</h1><br>";
        $result2 = mysqli_query($con,$sql);

    }else{
        die("No Data Found");
    }

?>

<html>
    <head>

        <style>

            *{
                background-color:black;
                color:white;
            }
            table, td,th{
                border:2px solid white;
                border-collapse:collapse;
                padding : .8rem;
                font-size: 1rem;
                text-align: center;
            }
            table{
                border:2px solid black;
                border-collapse:collapse;
                margin-top : 3rem;
            }

            .pagination{
                display: flex;
                gap: 2rem;
                text-decoration: none;
                font-size: 1.5rem;
                padding: 1rem;
            }            
            .pagination{
                text-decoration: none;
            }

        </style>

    </head>
<body>


<span style="font-size:2.5rem;">Total Data <?php echo mysqli_num_rows($result ); ?></span>

    <div class="pagination">
        <?php for($i=1;$i<=$pagination;$i++){
            echo '<a href="king.php?page='.$i.'">'.$i.'</a>';
        }?>
    </div>

    <table>
    
        <tr>
            <th>SN</th>
            <th>SHORTCODE</th>
            <th>COUNRTY NAME</th>
        </tr>  

            <?php
                while($row = mysqli_fetch_assoc($result2)) {
                    echo "  <tr>
                            <td>".$row["id"]."</td>
                            <td>".$row["sortname"]."</td>
                            <td>".$row["name"]."</td>
                            </tr>
                        ";
                }
            ?>


    </table>

</body>
</html>

<?php
mysqli_close($con);
?>