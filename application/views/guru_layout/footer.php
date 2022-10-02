   <script>
     $('#artikel').DataTable();
     $('#tabel_ekskul').DataTable();
     $('#tabel_prestasi').DataTable();
     $('#materi').DataTable();
     $('#pengumuman').DataTable();
   </script>
   <script src=" <?= base_url('assets/ckeditor/') ?>ckeditor.js"></script>
   <script src="<?= base_url('assets/input.js') ?>"></script>
   <script>
     CKEDITOR.replace('tambah_artikel');
     CKEDITOR.replace('edit_artikel');
     CKEDITOR.replace('visi_misi');
     CKEDITOR.replace('visi_misi2');
     CKEDITOR.replace('profil');
     CKEDITOR.replace('about-text');
     CKEDITOR.replace('isi_pengumuman');
     CKEDITOR.replace('edit_pengumuman');
   </script>
   <script src="<?= base_url() ?>/assets/js/vendor-all.min.js"></script>
   <script src="<?= base_url() ?>/assets/js/plugins/bootstrap.min.js"></script>
   <script src="<?= base_url() ?>/assets/js/pcoded.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="<?= base_url('assets/sweetalert.js') ?>"></script>
   <script src="<?= base_url('assets/input.js') ?>"></script>
   <script src="<?= base_url('assets/tabs.js') ?>"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
   <script>
     function tambahArtikel() {
       $.get('<?= base_url('admin/form_tambah_artikel') ?>', function(data) {
         $("#konten").html(data);

       });
     }

     $('.edit').submit(function(e) {
       e.preventDefault();
       const href = $(this).attr('action')
       console.log(href)
       $.get(href, function(data) {
         $("#konten").html(data);

       });
     });
     $('.detail').submit(function(e) {
       e.preventDefault();
       const href = $(this).attr('action')
       console.log(href)
       $.get(href, function(data) {
         $("#konten").html(data);

       });
     });
     document.querySelector('.artikel_foto').addEventListener('change', function(e) {
       var fileName = document.getElementById("artikel_foto").files[0].name;
       var nextSibling = e.target.nextElementSibling
       nextSibling.innerText = fileName
     });
   </script>

   </body>

   </html>