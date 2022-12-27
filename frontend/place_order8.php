

 <style>
    body{
background-image: url('images/background.jpg');
}
   fieldset {
  background-color:lightgray;
  width: 500;
}
.container{
    font-size: large;
}
#q{
    border-radius: 18px; 
    padding: 20px; 
    width: 200px;
    height: 15px;      
}
#p{
    border-radius: 18px;
    padding: 20px; 
    width: 200px;
    height: 15px;
}
    

#tt{
    border-radius: 18px;
    padding: 20px; 
    width: 200px;
    height: 15px;
}
#t{
    border-radius: 18px;
    border-width: 2pt;
}

</style>
<!-- place order-->
    <section class="place-order text-center">
        <center>
        <div class="container">
            <h1 class="text-center text-white"><i>Confirm your order<i></h1>
            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected food</legend>

                    <div class="description">
                    <img id="image" src="images/menu1.jpg" width="300" height="300" ><br><b>Tandoori Paneer Pizza<b><br>RS.200<br></div>
                        <br>
                        <div class="order-label">Quantity</div>
                        <input type="text" name="qty" id="q"  >
                        <div class="order-label">price</div>
                        <input type="text" name="price" id="p" >
                        <div class="order-label">total Price</div>
                        <input type="text" name="total" id="tt"  onkeyup="add()">
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Name</div>
                    <input type="text" name="name" placeholder="Eg Name" class="input-responsive" id="tt" required>

                    <div class="order-label">Contact Number</div>
                    <input type="text" name="phno" placeholder="1234567890" class="input-responsive" id="tt" required>

                    <div class="order-label">Email id</div>
                    <input type="text" name="mail" placeholder="asdf@gmail.com" class="input-responsive" id="tt"required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows ="10" cols="40" placeholder="layout,city,state" class="input-responsive" id="t"required></textarea>
                    <br> 
                    <input type="submit" name="submit" value="Place Order" class="btn btn-primary">
                </fieldset>
            </form>
        </center>
            <script>
function add() {
  var x = parseInt(document.getElementById("q").value);
  var y = parseInt(document.getElementById("p").value)
  document.getElementById("tt").value = x * y;
}
</script>
            <?php
            if (isset($_POST['submit'])) {
                $qty = $_POST["qty"];
                $cname = $_POST["name"];
                $contact = $_POST["phno"];
                $cadd = $_POST["address"];
                $email = $_POST["mail"];
                $price = $_POST["price"];
                $total = $_POST["total"];

                $conn = mysqli_connect("localhost", "root", "", "food");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $sql = "INSERT INTO order_tb VALUES($qty,$price,$total,$contact,'$email','$cname','$cadd')";
                if ($conn->query($sql) === TRUE) {
                    echo "your order has been placed successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

            }
           ?>
           
                
                
                    

        </div>
    </section>
</body>
    </head>
</html>
    <!-- End search food section-->

    