<?php $this->view('layouts/head', $data); ?>
<?php $this->view('layouts/navbar'); ?>

    <!-- MAIN SECTION -->

    <section class="main-section">
      <h2>
        <?= $data['page_title']; ?>
      </h2>
      <div class="main-content-container">
        <table class="table">
          <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach ($data['all_ads'] as $ad) {
                echo 
                '<tr>' . 
                    '<td>' . htmlspecialchars($ad->id) . '</td>' . 
                    '<td>' . htmlspecialchars($ad->title) . '</td>' . 
                    '<td>' . htmlspecialchars($ad->username) . '</td>' .
                '</tr>';
            }
            ?>
        </table>
      </div>
    </section>

    <!-- MAIN SECTION ENDS -->

<?php $this->view('layouts/footer'); ?>
<?php $this->view('layouts/scripts'); ?>
