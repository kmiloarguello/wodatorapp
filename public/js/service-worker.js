/*
 *
 *  Air Horner
 *  Copyright 2015 Google Inc. All rights reserved.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License
 *
 */

// Version 0.6.2
let version = '0.6.2';

self.addEventListener('install', e => {
  let timeStamp = Date.now();
  e.waitUntil(
    caches.open('airhorner').then(cache => {
      return cache.addAll([
        `/`,
        `/css/vendor.min.css?timestamp=${timeStamp}`,
        `/css/styles.min.css?timestamp=${timeStamp}`,
        `/js/vendor.min.js?timestamp=${timeStamp}`,
        `/js/scripts.min.js?timestamp=${timeStamp}`,
        `/js/main.js?timestamp=${timeStamp}`,
        `/js/modernizr.min.js?timestamp=${timeStamp}`,
        `/js/cart.js?timestamp=${timeStamp}`,
        `/js/dropzone.js?timestamp=${timeStamp}`,
        `/js/iziToast.min.js?timestamp=${timeStamp}`,
      ])
      .then(() => self.skipWaiting());
    })
  )
});

self.addEventListener('activate',  event => {
  event.waitUntil(self.clients.claim());
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request, {ignoreSearch:true}).then(response => {
      return response || fetch(event.request);
    })
  );
});

// Listen for install event, set callback
self.addEventListener('install', function(event) {
    // Perform some task
});