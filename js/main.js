let options=document.querySelectorAll(".navl");
 console.log(options);
 console.log(options.length);
options.forEach(a=> {
a.addEventListener("click",(e)=>{
   
    options.forEach(element=>{
        element.classList.remove("active");
    });
   
   a.classList.add("active");

});
});



// Get the button
let mybutton = document.getElementById("myBtn");
console.log(mybutton);
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
// $(function() {
//     $(".links  a").click(function(e) {
//         e.preventDefault(); //so the browser doesn't follow the link
//         $("#content").load(this.href, function() {
//             //execute here after load completed
//         });
//     });
// });


