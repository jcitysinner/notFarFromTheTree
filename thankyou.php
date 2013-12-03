<?php include("includes/header.php"); ?>

    <div class="wrapper">
      <section class="maincontent">
       <h1>Thank you!</h1>
       <?php
        $to = "snfj0014@humbermail.ca";
        $subject = "Message from contact form";
        $from = $_POST["email"];
        $message = $_POST["firstName"]." ".$_POST["lastName"]."\r\n";
        $message .= $_POST["cash"]."\r\n";
        $message .= $_POST["address"]." ".$_POST["province"]." ".$_POST["city"]."\r\n";
        $message .= $_POST["country"]." ".$_POST["postalCode"]." "."\r\n";
        $message .= $_POST["email"]." ".$_POST["phone"]."\r\n";
        $message .= $_POST["cardNumber"]."\r\n";
        $message .= $_POST["expireMonth"]." ".$_POST["expireYear"]."\r\n";
        mail($to,$subject,$from,$message);
       ?>

       <h2>Hi, <?php echo $_POST["firstName"]; ?> <?php echo $_POST["lastName"]; ?></h2>
       <p>Here is the information you entered...
        <br><?php echo $_POST["cash"]; ?>
        <br><?php echo $_POST["email"]; ?>
        <br><?php echo $_POST["phone"]; ?>
        <br><?php echo $_POST["address"]; ?>
        <br><?php echo $_POST["city"]; ?>
        <br><?php echo $_POST["province"]; ?>
        <br><?php echo $_POST["country"]; ?>
        <br><?php echo $_POST["postalcode"]; ?>
        <br><?php echo $_POST["cardNumber"]; ?>
        <br><?php echo $_POST["expireMonth"]; ?>
        <br><?php echo $_POST["expireYear"]; ?>
      </p>
      </section>

<?php include("includes/footer.php"); ?>