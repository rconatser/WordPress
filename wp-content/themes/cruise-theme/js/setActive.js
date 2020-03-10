"use strict";

// breaks up URL into usable pieces
let splitItem = window.location.pathname.split("/").filter(str => str.length > 0);
console.log(splitItem);

let numParts = splitItem.length;
let desiredItem = splitItem[numParts - 1] === "phpsite" ? 'index.php' : splitItem[numParts - 1]
// If ending is phpsite it will give desiredItem a value of index.php, all others will grab the end value
console.log('Desired Item ==> ' + desiredItem);

// gets all list items to manipulate
let getItem = document.querySelectorAll("ul#main li a");
console.log('Got Item ==> ' + getItem);

// cycles through list items and finds one associated to URL - assigns active class
for(let i = 0; i <= getItem.length; i++){
   let page = getItem[i].parentNode.getAttribute("href");
   console.log('Page URL ' + i + ' ==> ' + page);

   if(desiredItem === page){
      getItem[i].parentNode.classList.toggle("current-menu-item");
      getItem[i].parentNode.parentNode.parentNode.classList.toggle("current-menu-parent");
   }
}
