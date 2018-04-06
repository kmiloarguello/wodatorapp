

//This is the "Offline page" service worker

//Install stage sets up the offline page in the cahche and opens a new cache
self.addEventListener('install', function(event) {
  var offlinePage = new Request('../welcome');
  event.waitUntil(
  fetch(offlinePage).then(function(response) {
    return caches.open('welcome').then(function(cache) {
      console.log('Cached offline page during Install'+ response.url);
      return cache.put(offlinePage, response);
    });
  }));
});

//If any fetch fails, it will show the offline page.
//Maybe this should be limited to HTML documents?
self.addEventListener('fetch', function(event) {
  event.respondWith(
    fetch(event.request).catch(function(error) {
        console.error( 'Network request Failed. Serving offline page ' + error );
        return caches.open('welcome').then(function(cache) {
          return cache.match('../welcome');
      });
    }));
});

//This is a event that can be fired from your page to tell the SW to update the offline page
self.addEventListener('refreshOffline', function(response) {
  return caches.open('welcome').then(function(cache) {
    console.log(' Offline page updated from refreshOffline event: '+ response.url);
    return cache.put(offlinePage, response);
  });
});