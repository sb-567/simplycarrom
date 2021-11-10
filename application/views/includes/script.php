    <script src="<?php echo ASSETS; ?>assets/js/vendor/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="<?php echo ASSETS; ?>assets/js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="<?php echo ASSETS; ?>assets/js/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="<?php echo ASSETS; ?>assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="<?php echo ASSETS; ?>assets/js/main.js"></script>
    
    <script src="<?php echo ASSETS; ?>assets/js/custom.js"></script>
    
    <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>Common/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});

function mytogglefunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}



function shareVis() {
    //document.getElementById("mySharedown").className = "sharedown-content show";
    document.getElementById("mySharedown").classList.add("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.sharebtn')) {

        var sharedowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < sharedowns.length; i++) {
            var openSharedown = sharedowns[i];
            if (openSharedown.classList.contains('show')) {
                openSharedown.classList.remove('show');
            }
        }
    }
}

document.getElementById("mySharedown").addEventListener('click',function(event){
    event.stopPropagation();
});
</script>