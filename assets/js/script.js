var $ = jQuery;

$(document).ready(function () {
  $(".tile").click(function () {
    var id_post = $(this).attr('post_id');
    console.log($(this).attr('post_id'));
    $.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?> ",
      data: {
        'post_id': id_post,
        'action': 'f711_get_post_content'
      },
      success: function (result) {

        console.log(result);
      },
      error: function () {
        console.log("error");
      }
    });

  });
});


var sCounter;

const searchBar = document.getElementsByClassName("searchBar")[0];
const searchCon = document.getElementsByClassName("searchCon")[0];
const showSearchBar = () => {
  if (sCounter == null || sCounter === 1) {
    searchBar.style.display = "block";
    searchCon.style.width = "200px";
    sCounter = 2;
    return sCounter;
  } else {
    searchBar.style.display = "none";
    searchCon.style.width = "0px";
    sCounter = 1;
    return sCounter;
  }
};

const searchBarDark = document.getElementsByClassName("searchDarkBar")[0];
const searchConDark = document.getElementsByClassName("darkSearchCon")[0];
const showDarkSearchBar = () => {
  if (sCounter == null || sCounter === 1) {
    searchBarDark.style.display = "block";
    searchConDark.style.width = "200px";
    sCounter = 2;
    return sCounter;
  } else {

    searchBarDark.style.display = "none";
    searchConDark.style.width = "0px";
    sCounter = 1;
    return sCounter;
  }
};

var fpCounter;
const seeFullCon = document.getElementById("seeFullCon");

const seeFullPost = () => {
  seeFullCon.style.width = "200px";
};
const hideFullPost = () => {
  seeFullCon.style.width = "45px";
};

const fullPostText = (e) => {
  e.nextElementSibling.style.width = "200px";
};
const hideFullPostText = (e) => {
  e.nextElementSibling.style.width = "45px";
};

// Burger menu elements
const dropdown = document.getElementsByClassName("burgerDropdown")[0];
var burgerButton = document.getElementsByClassName("hamburger")[0];
var ddCounter;
// On click of burger icon set the height of the menu
burgerButton.addEventListener("click", (e) => {
  // ddCounter determines whether the button has already been clicked
  if (ddCounter == undefined || ddCounter === 1) {
    dropdown.style.height = "300px";
    burgerButton.setAttribute(
      "class",
      "hamburger hamburger--collapse is-active"
    );
    // Setting the counter to 2 to show the menu has been clicked
    ddCounter = 2;
    return ddCounter;
  } else {
    dropdown.style.height = "0px";
    burgerButton.setAttribute("class", "hamburger hamburger--collapse");
    // Setting the counter back to 1 to show the menu has been clicked again
    ddCounter = 1;
    return ddCounter;
  }
});

// Function for compass icon - when clicked page scrolls down to initialContainer
const contentCon = document.getElementById("initialContainer");
const scrollDown = () => {
  // Scroll page down to initalContainer
  $("html, body").animate({
      scrollTop: $(contentCon).offset().top,
    },
    800
  );
};

const debounce = (fn) => {
  let frame;
  return (...params) => {
    if (frame) {
      cancelAnimationFrame(frame);
    }
    frame = requestAnimationFrame(() => {
      fn(...params);
    });
  };
};
const storeScroll = () => {
  document.documentElement.dataset.scroll = window.scrollY;
};

document.addEventListener("scroll", debounce(storeScroll), {
  passive: true,
});
storeScroll();


// Info Panel (where we are, days away and countries visited) show and hide panel functionalitity
const hidePanel = () => {
  var panel = document.getElementById("info-panel");
  panel.style.height = "25px";
  panel.style.width = "50px";
  var shown = document.getElementById('shown-panel');
  shown.style.display = "none";
  var hidden = document.getElementById('hidden-panel');
  hidden.style.display = "block";
}
const showPanel = () => {
  var panel = document.getElementById("info-panel");
  panel.style.height = "230px";
  panel.style.width = "200px";
  var hidden = document.getElementById('hidden-panel');
  hidden.style.display = "none";
  var shown = document.getElementById('shown-panel');
  shown.style.display = "flex";
}
// Making our days away up-to-date
// Setting our start date of our trip and the current date
var start = new Date(2020, 07, 11),
  now = new Date;
// How many days it's been from beginning date to now date
var days = Math.round((now - start) / (1000 * 60 * 60 * 24));
// Days-away element to display the days value so it up dates automatically 
const daysAway = document.getElementById("days-away")
if (daysAway) {
  daysAway.innerHTML = days;
}

const scrollTop = document.getElementById("scroll-top");

if (scrollTop) {
  window.addEventListener('scroll', (e) => {
    if (window.scrollY >= window.innerHeight) {
      scrollTop.style.display = "flex";
    } else {
      scrollTop.style.display = "none";
    }
  });
}
const scrollToTop = () => {
  if (scrollTop) {
    $("html, body").animate({
        scrollTop: document.body.scrollTop = 0
      },
      800
    );
  }
  if (window.scrollY >= window.innerHeight) {
    scrollTop.style.display = "flex";
  } else {
    scrollTop.style.display = "none";
  }
}