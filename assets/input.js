
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
function validasiFile(){
    var inputFile = document.getElementById('file');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
  if (!ekstensiOk.exec(pathFile)) {
    alert('Silakan upload file yang memiliki ekstensi .jpeg/.jpg/.png/.gif');
    inputFile.value = '';
    return false;
  }
};
  
function validasiGuru(){
    var inputFile = document.getElementById('foto_guru');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
  if (!ekstensiOk.exec(pathFile)) {
    alert('Silakan upload file yang memiliki ekstensi .jpeg/.jpg/.png/.gif');
    inputFile.value = '';
    return false;
  }
};

function validasiDokumentasi(){
    var inputFile = document.getElementById('foto_dokumentasi');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
  if (!ekstensiOk.exec(pathFile)) {
    alert('Silakan upload file yang memiliki ekstensi .jpeg/.jpg/.png/.gif');
    inputFile.value = '';
    return false;
  }
  };