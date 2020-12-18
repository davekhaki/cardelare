

function populateListbox(item, index, arr) {

      var curArray = item;
      var listBox = document.getElementById('offer_list');  
      var option = document.createElement('option');  
      var elemText = document.createTextNode(`OfferId: ${curArray[0]} , Brand: ${curArray[1]}, Model: ${curArray[2]}`);     
      option.appendChild(elemText);
      listBox.appendChild(option);
   
}

window.onload
{
      passedArray.forEach(populateListbox);
}


$('#offer_list').change(function(){
      //$('body').css({background:'blue'});
      var listBox = document.getElementById('offer_list');  
      var offer = passedArray[listBox.selectedIndex]
      document.getElementById('brand').value = offer[1];
      document.getElementById('model').value = offer[2];
      document.getElementById('city').value = offer[7];
      document.getElementById('distance').value = offer[4];
      document.getElementById('production_year').value = offer[3];
      document.getElementById('fuel').value = offer[6];
      document.getElementById('transmission').value = offer[5];
      document.getElementById('counter_offer').value = offer[8];
      var clientId = document.getElementById("client_id");
      clientId.value = offer[9]; //UserId
      var offerId = document.getElementById("offer_id");
      offerId.value = offer[0]; //OfferId
});

