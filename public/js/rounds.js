
  (function rounds() {
  'use strict';


var plus = document.querySelector("#plus");
var minus = document.querySelector("#minus");
var reset = document.querySelector("#reset");
var total = document.querySelector("#total");


function moreRounds() {
  var sumatotal = parseInt(total.innerHTML);
  sumatotal++;
  document.querySelector("#total").innerHTML = sumatotal;
}

function minusRounds() {
  var restatotal = parseInt(total.innerHTML);
  restatotal--;
  document.querySelector("#total").innerHTML = restatotal;
}

function resetRounds() {
  var resettotal = total.innerHTML;
  resettotal = 0;
  document.querySelector("#total").innerHTML = resettotal;
}


plus.addEventListener("click", function() {
  moreRounds();
});

minus.addEventListener("click", function() {
  minusRounds();
});

reset.addEventListener("click", function() {
  resetRounds();
});


})();