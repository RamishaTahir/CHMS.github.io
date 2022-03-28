<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>







<!-- seach code for first search bar ---->
<script>
      $(document).ready(function(){
          
          function fetchData(){
            var s = $("#inp").val();

            if (s == '') {
               $('#dropdo').css('display', 'none');
            }
            $.post("assets/auto_complet.php", 
                  {
                    s:s
                  },
                  function(data, status){
                      if (data != "not found") {
                        $('#dropdo').css('display', 'block');
                        $('#dropdo').html(data);
                      }
                  });
          }
           $('#inp').on('inp', fetchData);
           $("body").on('click', () => {
             $('#dropdo').css('display', 'none');
          });


      });
</script>

<!--- end ----->








