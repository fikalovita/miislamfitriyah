 <div id="preloader" style="display: none;">
     <div class="loader-container done">
         <div class="progress-br float shadow done">
             <div class="progress__item"></div>
         </div>
     </div>
 </div>
 <div class="all-title-box">
     <div class="container text-center">
         <h1>Kelas Digital</h1>
     </div>
 </div>
 <div id="overviews" class="section wb">
     <div class="container">
         <div class="col-sm-12  mb-5 mx-auto">
             <div class="row">
                 <?php foreach ($kelas as $key => $value) : ?>
                     <div class="col-md-4 mt-3 ">
                         <a href="<?= base_url('home/materi') ?>">
                             <div class="card mb-3">
                                 <div class="text-center pt-2">
                                     <img width="80px" height="80px" src="https://cdn4.iconfinder.com/data/icons/modern-education-and-knowledge-power-1/512/500_classroom__teacher_board_education-256.png" alt="Card image cap">
                                 </div>
                                 <div class="card-body text-center">
                                     <h3><?= $value->isi_kelas ?></h3>
                                 </div>
                             </div>
                         </a>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
 </div>