
  (function stopwatch() {
  'use strict';

 
  var output = document.querySelector('#timer');
  var clear = document.querySelector('#clear');
  var toggle = document.querySelector('#toggle');

  var running = false;
  var paused = false;
  var timer;
  
  
  var then;

  var delay;
 
  var delayThen;

  
  
  var start = function() {
    delay = 0;
    running = true;
    then = Date.now();
    timer = setInterval(run,51);
    toggle.innerHTML = 'stop';
  };
  
  
  var parseTime = function(elapsed) {
    
    var d = [60000,1000,10];
    var time = [];
    var i = 0;

    while (i < d.length) {
      var t = Math.floor(elapsed/d[i]);

     
      elapsed -= t*d[i];

      
      t = (i > 0 && t < 10) ? '0' + t : t;
      time.push(t);
      i++;
    }
    
    return time;
  };
  
  
 
  var run = function() {
    
    var time = parseTime(Date.now()-then-delay);
    output.innerHTML = time[0] + ':' + time[1] + '.' + time[2];
  };
  
  
  var stop = function() {
    paused = true;
    delayThen = Date.now();
    toggle.innerHTML = 'resume';
    clear.dataset.state = 'visible';
    clearInterval(timer);

    
    run();
  };
  
  
 
  var resume = function() {
    paused = false;
    delay += Date.now()-delayThen;
    timer = setInterval(run,51);
    toggle.innerHTML = 'stop';
    clear.dataset.state = '';
  };
  
  
 
  var reset = function() {
    running = false;
    paused = false;
    toggle.innerHTML = 'start';
    output.innerHTML = '00:00.00';
    clear.dataset.state = '';
  };
  
  
  
  var router = function() {
    if (!running) start();
    else if (paused) resume();
    else stop();
  };
  
  toggle.addEventListener('click',router);
  clear.addEventListener('click',reset);
  
})();

