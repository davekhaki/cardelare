
function myFunction(item, index, arr) {

      var curArray = item;
      var listBox = document.getElementById('offer_list');  
      var option = document.createElement('option');  
      var elemText = document.createTextNode(`Email: ${curArray[0]} , Brand: ${curArray[1]}, Model: ${curArray[2]}`);     
      option.appendChild(elemText);
      listBox.appendChild(option);
   
}

window.onload
{
      passedArray.forEach(myFunction);
}