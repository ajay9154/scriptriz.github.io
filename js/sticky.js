/* Sticky */
(function ($) {
    "use strict";
   var header = $("#header");
    $(window).scroll(function () {

  if ($(this).scrollTop() > 50) {
    header.addClass("sticky");
            $(".navbar").addClass("fixed");
  }
      else {
         header.removeClass("sticky");
            $(".navbar").removeClass("fixed");
      }
    });


  })(jQuery);


/*  ----------------------- Vanilla Js Scroll Animation -------------------------- */

  function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 25;

      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }

  window.addEventListener("scroll", reveal);




  function revealsecond() {
    var reveals = document.querySelectorAll(".reveal_second");

    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 25;

      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }

  window.addEventListener("scroll", revealsecond);




  function revealthird() {
    var reveals = document.querySelectorAll(".reveal_third");

    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 25;

      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }

  window.addEventListener("scroll", revealthird);


/* Copy Code Secction */


function copyCode() {
  const codeBlocks = document.getElementsByClassName("ml-auto");
  const codeText = codeBlocks[0].innerText;
  
  // Create a temporary textarea element
  const tempTextarea = document.createElement("textarea");
  tempTextarea.value = codeText;
  
  // Append the textarea element to the document
  document.body.appendChild(tempTextarea);
  
  // Select the text inside the textarea
  tempTextarea.select();
  
  // Copy the selected text to the clipboard
  document.execCommand("copy");
  
  // Remove the textarea element from the document
  document.body.removeChild(tempTextarea);
  
  // Provide visual feedback to the user
  alert("Code copied to clipboard!");
}


