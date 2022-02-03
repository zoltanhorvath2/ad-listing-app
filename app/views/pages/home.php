<?php $this->view('layouts/head', $data); ?>
<?php $this->view('layouts/navbar'); ?>

    <!-- MAIN SECTION -->

    <section>
      <?= $data['page_title']?>
    </section>

    <!-- MAIN SECTION ENDS -->

<?php $this->view('layouts/footer'); ?>
<?php $this->view('layouts/scripts'); ?>