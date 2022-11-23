<?php
include 'header.php';
?>
<div id="main-content">

    <h2>All Records</h2>

    <?php    

     include "config.php";

     $sql = "SELECT * FROM student s JOIN studentclass sc ON s.sclass = sc.cid";

     $result = mysqli_query($conn, $sql);

     if(mysqli_num_rows($result) > 0){

    ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>

        <?php 

        while($row = mysqli_fetch_assoc($result)){

        ?>

        <tbody>
            <tr>
                <td><?php echo $row["sid"]; ?></td>
                <td><?php echo $row["sname"]; ?></td>
                <td><?php echo $row["saddress"]; ?></td>
                <td><?php echo $row["class"]; ?></td>
                <td><?php echo $row["sphone"]; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
                </td>
            </tr>
        </tbody>

        <?php
           }
        ?>

    </table>

    <?php
           }
        ?>

</div>
</div>
</body>
</html>
