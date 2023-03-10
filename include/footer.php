<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="footer" id="footer">

  <footer class="bg-dark text-center text-white">

    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {  ?>

    <?php } else { ?>
      
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Form -->
        <section class="">
          <form action="include/subscribe.php" method="post">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Sign up for our newsletter</strong>
                </p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline form-white mb-4">
                  <input type="email" name="email" class="form-control" placeholder="Email Address" style="background-color: rgb(220, 220, 220);" />
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-auto">
                <!-- Submit button -->
                <button type="submit" name="submit" class="mb-4 button">
                  Subscribe
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </form>
        </section>
        <!-- Section: Form -->
      </div>
      <!-- Grid container -->
    <?php }; ?>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © <script>
        document.write(new Date().getFullYear());
      </script> Copyright:
      <a class="text-white" href="index.php">moviehunter.com</a>
    </div>
    <!-- Copyright -->
  </footer>

</div>
<!-- End of .container -->