    <script>
      function getParam(name) {
          name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
          var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
              results = regex.exec(location.search);
          return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
          }
          var error = getParam('error');

          document.getElementById("error").innerHTML=error;

      console.log(error);



  </script>

<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script src="../assets/js/materialize.min.js"></script>

  <script>
   
   $(document).ready(function () {
 
  $('.dropdown-trigger').dropdown({
    constrainWidth:false,
  }); 
  });
  
  
</script>

    </body>
  </html>
        