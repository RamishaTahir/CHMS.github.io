<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>







<!-- seach code for first search bar ---->
<script>
      $(document).ready(function(){
          
          function fetchData(){
            var s = $("#input").val();

            if (s == '') {
               $('#dropdown').css('display', 'none');
            }
            $.post("assets/auto_complet.php", 
                  {
                    s:s
                  },
                  function(data, status){
                      if (data != "not found") {
                        $('#dropdown').css('display', 'block');
                        $('#dropdown').html(data);
                      }
                  });
          }
           $('#input').on('input', fetchData);
           $("body").on('click', () => {
             $('#dropdown').css('display', 'none');
          });


      });
</script>

<!--- end ----->






</div>


