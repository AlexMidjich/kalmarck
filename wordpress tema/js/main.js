
//Funktion för att få rätt kartvy till första sidan.
function initMap() {
  var klubben = {lat: 56.6855361, lng: 16.338548400000036};
  var map = new google.maps.Map(document.getElementById('karta'), {
    zoom: 15,
    scrollwheel:  false,
    center: klubben
  });
  var marker = new google.maps.Marker({
    position: klubben,
    map: map
  });
}

//Fixar menyn för small devices
const myBtn = document.getElementById('menubtn');
const menu = document.querySelector('.menulinks').classList;

myBtn.addEventListener('click', function(e){
  console.log('click');

  if(menu.contains('close')){
    menu.remove('close');
  }else{
    menu.add('close');
  }

  //document.querySelector('.menulinks').style.display = 'block';
});
/*
const sendBtn = document.querySelector('#skicka');

sendBtn.addEventListener('click', function(c){
  event.preventDefault();
  alert('Tack, ditt mail har skickats!');
})*/
