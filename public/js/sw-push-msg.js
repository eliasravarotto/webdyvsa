firebase.initializeApp({
  apiKey: "AIzaSyChcPHdTMHnIsraLntqj0j1S7OSdVzM1vQ",
  projectId: "web---derka-y-va-1538676350230",
  messagingSenderId: "712801085814"
})

//const pushBtn   = document.getElementById('push-button'),
const ptoken   = document.getElementById('token')
const messaging = firebase.messaging()

let userToken    = null,
  isSubscribed = false

messaging.onMessage(payload => {
  console.log(payload)
})

// UPADTE SUBSCRIPTION BUTTON - 2
//function updateBtn() {
//
//  if (Notification.permission === 'denied') {
//      pushBtn.textContent = 'Subscription blocked'
//      pushBtn.disabled = true
//      return
//  }
//
//  if (isSubscribed) {
//    pushBtn.textContent = 'SUSCRITO'
//    pushBtn.disabled = true
//  } else{
//    pushBtn.disabled = false
//  }
//
//}

// UPDATE SUBSCRIPTION ON SERVER
function updateSubscriptionOnServer(token) {

  if (isSubscribed) {
      //unsubscribe
      $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
         type: 'POST',
         data: {_method: 'delete'},
         url:'/push-subscription/'+token,
         success:function(data){
            console.log(data);
         }
      });
  } else{
    //subscribe
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
         type:'GET',
         url:'/push-subscription/'+token,
         success:function(data){
            console.log(data);
         }
      });
  }
}

// SUBSCRIBE - 3
function subscribeUser() {
  messaging.requestPermission()
      .then(() => messaging.getToken())
      .then(token => {
          updateSubscriptionOnServer(token)
          isSubscribed = true
          userToken = token
          localStorage.setItem('pushToken', token)
          //updateBtn()
      })
      .catch(err => console.log('Denied', err))
}

// UNSUBSCRIBE - 3
function unsubscribeUser() {

  messaging.deleteToken(userToken)
      .then(() => {
          updateSubscriptionOnServer(userToken) // token === true
          isSubscribed = false
          userToken = null
          localStorage.removeItem('pushToken')
          //updateBtn()
      })
      .catch(err => console.log('Error unsubscribing', err))
}

// INIT PUSH - 1
function initializePush() {


  userToken = localStorage.getItem('pushToken')

  isSubscribed = userToken !== null

  var existe = cookieExist();

  //updateBtn();
  //ptoken.innerHTML=userToken;

  if (!existe) {
    if (!isSubscribed) {

      swal.fire({
          title: 'Suscríbete a Nuestra Web',
          text: "Al suscribirte recibiras las últimas novedades.",
          // type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonText: 'Más tarde',
          confirmButtonText: 'ACEPTAR'
        }).then((result) => {
          if (result.value) {
            if (isSubscribed) return unsubscribeUser()
            return subscribeUser()
          } 
        })
    }
  }

  // CHANGE SUBSCRIPTION ON CLICK
  //pushBtn.addEventListener('click', () => {
  //  pushBtn.disabled = true
  //  if (isSubscribed) return unsubscribeUser()
  //  return subscribeUser()
  //})
}

// REGISTER SW - 0
window.addEventListener('load', () => {

  if ('serviceWorker' in navigator) {

      navigator.serviceWorker.register('/firebase-messaging-sw.js')
          .then(registration => {

              messaging.useServiceWorker(registration)

              initializePush()

          })
          .catch(err => console.log('Service Worker Error', err))

  } else {
      console.log('Push not supported.');
  }
})


function cookieExist() {
  var existe;
  if (document.cookie.indexOf("visited=") >= 0) {
    existe = true;
  }
  else {
    // set a new cookie
    expiry = new Date();
    expiry.setTime(expiry.getTime()+(5*60*1000)); // Ten minutes

    // Date()'s toGMTSting() method will format the date correctly for a cookie
    document.cookie = "visited=yes; expires=" + expiry.toGMTString();

    existe = false;
  }
  
  return existe;
}