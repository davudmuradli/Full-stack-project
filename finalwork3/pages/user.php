<?php include('head.php');
require ('checklogin.php');
?>
<h1> User Page </h1>
<script>
    window.onload = function() {
        loadJson();
    };
    async function loadJson(){
        const response = await fetch('http://localhost/finalwork3/pages/apiuser.php')
        const json = await response.json()
       
        var table = document.getElementById('container')

        for(const users of json){
            var row = `<tr> `;
            row += ` <td> ${users.namesurname} </td>  `;
            row += ` <td> ${users.adress} </td>  `;
            row += ` <td> ${users.salaray} </td> `;
            row += ` <td> <a href='index.php?page=product_show&id=${users.id}'>Show</a> | <a href='index.php?page=product_edit&id=${product.id}'>Edit</a> | <a href='index.php?page=product_delete&id=${product.id}'>Delete</a>  </td> `;
            row += ` <tr> `;

            table.innerHTML += row
        }        
    }
</script>
<a href="index.php?page=product_create"> Add New Person </a>
<br/>

<table id="container">
  <tr>
    <th> Name Surname </th>
    <th> Adress </th>
    <th> Salary </th>
    <th> Actions </th>
  </tr>
</table> 

