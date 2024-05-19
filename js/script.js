document.addEventListener('DOMContentLoaded', function() {
  var menuIcon = document.getElementById('menu_icon');
  var navLinks = document.querySelector('.nav_links');

  menuIcon.addEventListener('click', function() {
      // Alt menüyü seç
      var subMenu = document.querySelector('.nav_links');

      // Alt menü görünüyorsa gizle, görünmüyorsa göster
      if (subMenu.style.display === 'none') {
          subMenu.style.display = 'block';
      } else {
          subMenu.style.display = 'none';
      }
  });
});

window.onload = function() {
  adjustCardHeights();
  window.addEventListener('resize', adjustCardHeights);
};

function adjustCardHeights() {
  var cards = document.querySelectorAll(".card");
  var maxHeight = 0;
  cards.forEach(function(card) {
    var cardBody = card.querySelector('.card-body');
    if (cardBody) {
      cardBody.style.height = 'auto';
      if (cardBody.offsetHeight > maxHeight) {
        maxHeight = cardBody.offsetHeight;
      }
    }
  });
  cards.forEach(function(card) {
    var cardBody = card.querySelector('.card-body');
    if (cardBody) {
      cardBody.style.height = maxHeight + 'px';
    }
  });
}


window.addEventListener("scroll", function() {
  var navbar = document.querySelector("header");
  navbar.classList.toggle("sticky", window.scrollY > 0);
});

const slides = document.querySelectorAll('.slide');
const slider = document.querySelector('.slider');
let counter = 1;

setInterval(() => {
  counter++;
  if (counter >= slides.length) counter = 0;
  slider.style.transform = `translateX(${-counter * 100}%)`;
}, 3000);


let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  if (slides[slideIndex - 1]) {
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
}



/*---------JAVASCRİPT---------*/



function clearForm() {
  document.getElementsByName('isimSoyisim')[0].value = '';
  document.getElementsByName('email')[0].value = '';
  document.getElementsByName('mesaj')[0].value = '';
  document.getElementById('message').innerText = '';
}





document.getElementById("pokemon_form").addEventListener("submit", function(event) {
  event.preventDefault(); // Sayfanın yeniden yüklenmesini engellemek için form submit olayını durdur

  var pokemonName = document.getElementById("pokemon_name").value;

  var xhr = new XMLHttpRequest();
  xhr.open("GET", "pokemon.php?pokemon_name=" + pokemonName, true);
  xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
          document.getElementById("pokemon_info").innerHTML = xhr.responseText;
      }
  };
  xhr.send();
});

document.getElementById("country_form").addEventListener("submit", function(event) {
  event.preventDefault(); // Sayfanın yeniden yüklenmesini engellemek için form submit olayını durdur

  var countryName = document.getElementById("country_name").value;

  var xhr = new XMLHttpRequest();
  xhr.open("GET", "get_country_info.php?country_name=" + countryName, true);
  xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
          document.getElementById("country_info").innerHTML = xhr.responseText;
      }
  };
  xhr.send();
});