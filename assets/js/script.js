document.querySelector("body").insertAdjacentHTML(
    "beforeend",
    `
    <div class="loader">
    <svg xmlns="http://www.w3.org/2000/svg" height="200px" width="200px" viewBox="0 0 200 200" class="pencil">
    <defs>
      <clipPath id="pencil-eraser">
        <rect height="30" width="30" ry="5" rx="5"></rect>
      </clipPath>
    </defs>
    <circle transform="rotate(-113,100,100)" stroke-linecap="round" stroke-dashoffset="439.82" stroke-dasharray="439.82 439.82" stroke-width="2" stroke="currentColor" fill="none" r="70" class="pencil__stroke"></circle>
    <g transform="translate(100,100)" class="pencil__rotate">
      <g fill="none">
        <circle transform="rotate(-90)" stroke-dashoffset="402" stroke-dasharray="402.12 402.12" stroke-width="30" stroke="hsl(223,90%,50%)" r="64" class="pencil__body1"></circle>
        <circle transform="rotate(-90)" stroke-dashoffset="465" stroke-dasharray="464.96 464.96" stroke-width="10" stroke="hsl(223,90%,60%)" r="74" class="pencil__body2"></circle>
        <circle transform="rotate(-90)" stroke-dashoffset="339" stroke-dasharray="339.29 339.29" stroke-width="10" stroke="hsl(223,90%,40%)" r="54" class="pencil__body3"></circle>
      </g>
      <g transform="rotate(-90) translate(49,0)" class="pencil__eraser">
        <g class="pencil__eraser-skew">
          <rect height="30" width="30" ry="5" rx="5" fill="hsl(223,90%,70%)"></rect>
          <rect clip-path="url(#pencil-eraser)" height="30" width="5" fill="hsl(223,90%,60%)"></rect>
          <rect height="20" width="30" fill="hsl(223,10%,90%)"></rect>
          <rect height="20" width="15" fill="hsl(223,10%,70%)"></rect>
          <rect height="20" width="5" fill="hsl(223,10%,80%)"></rect>
          <rect height="2" width="30" y="6" fill="hsla(223,10%,10%,0.2)"></rect>
          <rect height="2" width="30" y="13" fill="hsla(223,10%,10%,0.2)"></rect>
        </g>
      </g>
      <g transform="rotate(-90) translate(49,-30)" class="pencil__point">
        <polygon points="15 0,30 30,0 30" fill="hsl(33,90%,70%)"></polygon>
        <polygon points="15 0,6 30,0 30" fill="hsl(33,90%,50%)"></polygon>
        <polygon points="15 0,20 10,10 10" fill="hsl(223,10%,10%)"></polygon>
      </g>
    </g>
  </svg>
    </div>
    `
  );
  
  // Remove the loader when the window is fully loaded
  window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    if (loader) {
      loader.remove();
    }
  });

/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
};

/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const navLinks = document.querySelectorAll("[data-nav-link]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
};

addEventOnElem(navTogglers, "click", toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  overlay.classList.remove("active");
};

addEventOnElem(navLinks, "click", closeNavbar);

/**
 * header active when scroll down to 100px
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

const activeElem = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
};



const accordionContent = document.querySelectorAll(".accordion-content");

accordionContent.forEach((item, index) => {
  let header = item.querySelector("header");
  header.addEventListener("click", () => {
    item.classList.toggle("open");

    let description = item.querySelector(".description");
    if (item.classList.contains("open")) {
      description.style.height = `${description.scrollHeight}px`; //scrollHeight property returns the height of an element including padding , but excluding borders, scrollbar or margin
      item.querySelector("ion-icon").name = "remove";
    } else {
      description.style.height = "0px";
      item.querySelector("ion-icon").name = "add";
    }
    removeOpen(index); //calling the funtion and also passing the index number of the clicked header
  });
});

function removeOpen(index1) {
  accordionContent.forEach((item2, index2) => {
    if (index1 != index2) {
      item2.classList.remove("open");

      let des = item2.querySelector(".description");
      des.style.height = "0px";
      item2.querySelector("ion-icon").name = "add";
    }
  });
}

function paymentpopup() {
  var card = document.getElementsByClassName("paymentpopup");
  var continueBtn = document.getElementsByClassName("conitunue-btn");
  var paymentBtn = document.getElementsByClassName("payment-btn");

  // Loop through each card element and set display style to block
  for (var i = 0; i < card.length; i++) {
    card[i].style.display = "flex";
  }

  // Add event listener to each "Continue" button
  for (var i = 0; i < continueBtn.length; i++) {
    continueBtn[i].addEventListener("click", function () {
      var index = Array.prototype.indexOf.call(continueBtn, this);
      continueBtn[index].style.display = "none";
      paymentBtn[index].style.display = "block";
    });
  }
}



function changeimg() {
  var qr = document.getElementsByClassName("qr");
  var done = document.getElementsByClassName("done");
  
  // Loop through qr elements and set display to "none"
  for (var i = 0; i < qr.length; i++) {
    qr[i].style.display = "none";
  }
  
  // Loop through done elements and set display to "block"
  for (var i = 0; i < done.length; i++) {
    done[i].style.display = "block";
  }
  setTimeout(function() {
    var card = document.getElementsByClassName("paymentpopup");
    for (var i = 0; i < card.length; i++) {
      card[i].style.display = "none";
    }
  }, 2000);

}


addEventOnElem(window, "scroll", activeElem);
let profile = document.querySelector(".profile");

document.querySelector("#user-btn").onclick = () => {
  profile.classList.toggle("active");
  window.location.href = "#profile";
};

// window.onscroll = () => {
//   profile.classList.remove("active");
// };