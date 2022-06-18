<!doctype html>
<html>

<head>
    <title>Spares And Wears</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        $('.carousel').carousel({
            interval: false,
        });
    </script>
</head>

<body style=" overflow-x: hidden;    background-color: #ececec;">

    <p id="demo" style="position:absolute;top:2%;left:2%;background-color:#000;color:#fff"></p>

    <script>
        var w = window.innerWidth;
        var h = window.innerHeight;

        var x = document.getElementById("demo");
        x.innerHTML = "Browser width: " + w + ", height: " + h;
    </script>


    <!--------------------------------------------------- Header --------------------------------------------------->

    <div id="header">
        <?php include('header.php');?>
    </div>

    <!--------------------------------------------------- Body content START --------------------------------------------------->

    <!--------------------------------------------------- Main Banner --------------------------------------------------->
        <!-- for css refer to "/*home page banner*/" -->
    <?php include('sections/home/main-banner.php');?>


    <!--------------------------------------------------- Trending Section --------------------------------------------------->

    <?php include('sections/home/trending.php');?>


    <!--------------------------------------------------- Deals Section --------------------------------------------------->

    <?php include('sections/home/deals.php');?>


    <!--------------------------------------------------- Save 10% on First Purchase --------------------------------------------------->

    <?php include('sections/home/first-purchase.php');?>


    <!--------------------------------------------------- Offers In Automotive --------------------------------------------------->

    <?php include('sections/home/offers-auto.php');?>


    <!--------------------------------------------------- Offers In Home & Garden --------------------------------------------------->

    <?php include('sections/home/offers-home.php');?>


    <!--------------------------------------------------- Offers In Electronics & Computers --------------------------------------------------->

    <?php include('sections/home/offers-elec.php');?>


    <!--------------------------------------------------- Offers In Sports & Fitness --------------------------------------------------->

    <?php include('sections/home/offers-sports.php');?>

    <!--------------------------------------------------- Bulk Buying Deals --------------------------------------------------->

    <?php include('sections/home/bulk-deals.php');?>



    <!--------------------------------------------------- If user is signed in then show "wishlist" section otherwise show "Sign in Button" Section --------------------------------------------------->

            <!--------------------------------------------------- Sign In Section --------------------------------------------------->

            <?php include('sections/home/signin-button.php');?>


            <!--------------------------------------------------- Wishlist Section --------------------------------------------------->
            <!--------------------------------------------------- To be shown only if the user is logged in --------------------------------------------------->
            <?php include('sections/home/wishlist.php');?>


    <!--------------------------------------------------- New Products --------------------------------------------------->

    <?php include('sections/home/new-products.php');?>


    <!--------------------------------------------------- 30 & 40 % off --------------------------------------------------->

    <?php include('sections/home/off.php');?>


    <!--------------------------------------------------- spares and wears benefits--------------------------------------------------->
    <!-- for css refer "/*benefits section*/" in home.css -->

    <?php include('sections/home/benefits.php');?>


    <!--------------------------------------------------- footer section --------------------------------------------------->

    <?php include('footer.php');?>

    
</body>

</html>