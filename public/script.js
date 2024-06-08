let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;
 arrowParent.classList.toggle("showMenu");

 if (arrowParent.classList.contains("showMenu")) {
                sidebarNavLinks.style.overflow = "auto"; 
            } else {
                sidebarNavLinks.style.overflow = "hidden"; 
            }
  });
}
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-grid-alt", "Dashboard");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
}); 