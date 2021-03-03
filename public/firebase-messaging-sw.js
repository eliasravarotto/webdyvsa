importScripts('https://www.gstatic.com/firebasejs/5.7.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/5.7.1/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
firebase.initializeApp({
   'messagingSenderId': '712801085814'
});

const messaging = firebase.messaging();

//Manejador de mensajes cuando la app está en 2do plano.
messaging.setBackgroundMessageHandler(function(payload) {

  // Customize notification here
  var obj = JSON.parse(payload.data.notification);
  const notificationTitle = obj.title;
  const notificationOptions = {
    body: obj.body,
    icon: obj.icon,
    data: obj.click_action,
  };

  return self.registration.showNotification(notificationTitle,notificationOptions);
});

self.addEventListener('notificationclick', function(event) {
  var href = event.notification.data;

  event.notification.close();

  event.waitUntil(
    clients.openWindow(href)
  );
});