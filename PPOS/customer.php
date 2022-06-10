<?php
    include_once "include/dbh.inc.php";
    include_once "header.php";
?><!-- TIG LILINK KAINI YUNG HEADER.PHP KUNG SAIN NYAON DUMAN SU KAPUTOL KANI-->
        <form action="include/customer.inc.php" action="include/menu.inc.php" method="post">

            <div class="banner">
                <h1>Customer Information</h1>
            </div>
            <div class="item">
                <br>
                <h2>Name</h2>
                <label>First Name:</label>
                <input type="text" name="first_name" placeholder="First name">
                <label>Last Name:</label>
                <input type="text" name="last_name" placeholder="Last name">
                <h2>Address</h2>
                <label>Street:</label>
                <input type="text" name="street" placeholder="Street">
                <label>Barangay:</label>
                <input type="text" name="barangay" placeholder="Barangay">
                <label>City:</label>
                <input type="text" name="city" placeholder="City/Municipality">
                <label>Province:</label>
                <input type="text" name="province" placeholder="Province">
                <h2>Contact</h2>
                <label>Mobile number:</label>
                <input type="text" name="contact" placeholder="Mobile number">
            </div>
            <div class="btn-block">
                <button type="submit" name="cust_next_btn">Next</button>
                <button type="submit" name="cust_cancel_btn">Cancel</button>
            </div>
        </form>
        
   </div>
</body>
</html>
