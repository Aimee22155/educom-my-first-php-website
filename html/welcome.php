<html>
<head>
         <title>Website Aimee</title>
         <link rel="stylesheet" href="../css/website.css"/>
    </head>
    <body> 
        <!-- begin header -->
        <header class="header">
            <div><h1>Aimee website</h1></div>
        </header>
        <!-- end header -->
            
        <br>
        
        <!-- begin content -->
        <section class="content">
            <div class="block-home"><a href="opdracht1HOME.html">HOME</a></div>
            <div class="block-home"><a href="opdracht1About.html">ABOUT</a></div>
            <div class="block-home"><a href="opdracht1Contact.php">CONTACT</a></div>
        </section>

        Welcome: <?php echo $_POST["Name"]; ?><br>
        Your email address is: <?php echo $_POST["Email"]; ?><br>
        Your message is: <?php echo $_POST["Message"]; ?><br>
        
        <!-- end content -->

        <!-- begin footer-->
        <footer class="footer">
            <div><p>&copy; 2025 Aimee Heusschen</p></div> 
         </footer>
         <!-- end footer-->
    </body>
</html>