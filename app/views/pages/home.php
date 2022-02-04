<?php $this->view('layouts/head', $data); ?>
<?php $this->view('layouts/navbar'); ?>

    <!-- MAIN SECTION -->

    <section class="main-section">
      <h2>
        <?= $data['page_title']; ?>
      </h2>
      <div class="main-content-container">
        Welcome to our system
      </div>
    </section>

    <!-- MAIN SECTION ENDS -->

<?php $this->view('layouts/footer'); ?>
<?php $this->view('layouts/scripts'); ?>
