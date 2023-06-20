// function myFunction() {
//     var input, filter, table, tr, td, i, txtValue;
//     input = document.getElementById("Search");
//     filter = input.value.toUpperCase();
//     table = document.getElementById("myTable");
//     tr = table.getElementsByTagName("tr");
//     for (i = 0; i < tr.length; i++) {
//       td = tr[i].getElementsByTagName("td")[1];
//       if (td) {
//         txtValue = td.textContent || td.innerText;
//         if (txtValue.toUpperCase().indexOf(filter) > -1) {
//           tr[i].style.display = "";
//         } else {
//           tr[i].style.display = "none";
//         }
//       }       
//     }
//   }

  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("Search");
    filter = input.value;
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }

  function myFunction2(){

    let filter = document.getElementById('Search').value;
    let myTable = document.getElementById('myTable');
    let tr = myTable.getElementsByTagName('tr');
    for(var i=0; i<tr.length; i++)
    {
      let td = tr[i].getElementsByTagName('td')[0];
      if(td)
      {
        let textValue = td.textContent || td.innerHTML;
       if(+textValue >= +filter  )
       {
 
         tr[i].style.display = "";
 
       }
       else 
       {
         tr[i].style.display = "none";
       
       }
 
      }
 
    }
 
 
 }

 function idnasab(val) {
  // alert("You pressed a key inside the input field");
  // console.log("You pressed a key inside the input field");
  document.getElementById("pid").innerHTML = val+1;
  document.getElementById("pid").setAttribute('value',val + 1);
}