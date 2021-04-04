<?php include 'inc/header.php' ?>
<?php include 'inc/footer.php' ?>
<?php include 'db.php' ?>

<div class="container">
    <div class="row justify-content-between align-items-center text-center">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xsm-12">
            <div class="card">
                <span>Input</span>

                <form action="" method="post">

                    <input type="text" name="name" id="" placeholder="Your Name" class="form-control mb-3">
                    <input type="email" name="email" id="" placeholder="Email" class="form-control mb-3">
                    <input type="number" name="phone" placeholder="Phone Number" id="" class="form-control mb-3">
                    <input type="text" name="address" placeholder="Address" id="" class="form-control mb-3">

                    <!-- <input type="radio" name="gender" value="male" id="male" class="mb-5">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="female" id="female" class="mb-5">
                    <label for="female">Female</label> -->
                    <!-- <input type="password" name="password" id="" placeholder="Password" class="form-control mb-3"> -->

                    <button name="clicked" type="submit" class="btn btn-success py-10">
                        Submit
                    </button>
                </form>


                <?php
                if (isset($_POST['clicked'])) {

                    $name =  $_POST['name'];
                    $email =  $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];

                    $InsertData = "INSERT INTO `students`(`Name`, `Email`, `Phone`, `Address`) 
                    VALUES ('$name', '$email', '$phone', '$address')";

                    mysqli_query($connect, $InsertData);

                    if ($InsertData) {
                        echo "inserted";
                    } else {
                        echo "Not";
                    }
                }
                ?>

            </div>
        </div>

        <div class="col-xxl-8 col-xl-8  col-lg-8 col-md-12 col-sm-12 col-xsm-12">
            <div class="card">
                <table class="table">
                    <tr>
                        <th>
                            SI
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Joining Date
                        </th>
                        <th>Action</th>
                    </tr>

                    <?php

                    $AllStudents = "SELECT * FROM students";
                    $StdData = mysqli_query($connect, $AllStudents);

                    while ($row = mysqli_fetch_assoc($StdData)) {


                        $si = $row['Si'];
                        $name = $row['Name'];
                        $email = $row['Email'];
                        $phone = $row['Phone'];
                        $address = $row['Address'];
                        $joining_date = $row['Joining_Date'];

                        echo "
                            <tr>
                                <td>$si</td>
                                <td>$name</td>
                                <td>$email</td>
                                <td>$phone</td>
                                <td>$address</td>
                                <td>$joining_date</td>
                                <td></td>
                            </tr>";
                    }

                    ?>


                </table>
            </div>
        </div>
    </div>
</div>