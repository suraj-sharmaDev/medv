<?php
if($_POST['custid']!=" "){
    header('location: ../cart');
  }
    else{
      echo "<script>
        $.magnificPopup.open({
                    items: {
                      src: '#test-popup',
                    },
                    type: 'inline',
                    mainClass: 'mfp-zoom-in'
                  });
      </script>";
      
    }
?>