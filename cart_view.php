<?php include 'header.php'; ?>
<!-- good_view.php -->

  <!--Main layout-->
  <main class="mt-5 pt-4" style="flex: auto">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">
        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">
          <?php
            if(!$results['empty'])
              include 'cart_table.php';
            else
              echo "<h2> Вы не выбрали товары </h2>";
          ?>
          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
 
    </div>
  </main>
  <!--Main layout-->

<?php include 'footer.php'; ?>