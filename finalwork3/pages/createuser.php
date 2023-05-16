<h1> User Create </h1>
<?php include('head.php')?>
<script>
    // the first function to be called when page is loaded
    window.onload = function() {
        handleSubmitForm();
    };
    function handleSubmitForm() {
      const form = document.getElementById('form');
      form.addEventListener('submit', function (e) {
        e.preventDefault();

        var namesurname = document.getElementById('namesurname').value
        var adress = document.getElementById('adress').value
        var salary = document.getElementById('salary').value

        const json = {
          namesurname: namesurname, 
          adress: adress, 
          salary: salary, 
        }

        fetch('http://localhost/finalwork3/pages/apicreate.php', 
        {
          headers: {
            'Content-type': 'application/json'
          },
          method: 'POST',
          body: JSON.stringify(json)
        })
        .then((res) => {
          return res.json()
        })
        .then((res) => {
          console.log(res)
        })
        .catch((error) => console.error(error))
      })
    }
</script>  

<form id="form"  method="post">
  <label> 
    Name Surname
    <input name='namesurname' id="namesurname" value='' type='text' required /> 
  </label>
  <br/> 

  <label> 
    Adress
    <input name='adress' id="adress" value='' type='text' /> 
  </label>
  <br/>
  
  <label> Salary
    <input name='salary' value='' id="salary" type='text' required/> 
  </label>
  <br/>

  
  <br/>

  <input type='submit'  value="Confirm" />
</form>