function search_contacts() {
  let input = document.getElementById('searchBar').value
  input=input.toLowerCase();
  let x = document.getElementsByClassName('contacts');
    
  for (i = 0; i < x.length; i++) { 
      if (!x[i].innerHTML.toLowerCase().includes(input)) {
          x[i].style.display="none";
      }
      else {
          x[i].style.display="list-item";                 
      }
  }
}

function deleteContact() {
    console.log("called");
    document.getElementById("firstNameResult").innerHTML = ""; 
    document.getElementById("lastNameResult").innerHTML = ""; 
    document.getElementById("addressResult").innerHTML = ""; 
    document.getElementById("cityResult").innerHTML = ""; 
    document.getElementById("provinceResult").innerHTML = ""; 
    document.getElementById("postalCodeResult").innerHTML = ""; 
    document.getElementById("phoneNumberResult").innerHTML = ""; 
    document.getElementById("emailResult").innerHTML =""; 
    document.getElementById("notesResult").innerHTML = ""; 
}