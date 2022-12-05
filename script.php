<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script type="text/javascript">

  function submitData(action){
    $(document).ready(function(){
      var data = {
        action: action,
        id: $("#id").val(),
        name: $("#name").val(),
        dob: $("#dob").val(),
        gender: $("#gender").val(),
        pic : $("#pic").val(),
        subject: $("#sub").val(),
        address: $("#add").val(),
        email: $("#email").val(),
        password: $("#pass").val(),  
        mobile: $("#number").val(),
        check: $("#check").val(),
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Deleted Successfully"){
            $("#"+action).css("display", "none");
          }
        }
      });
    });
  }
</script>