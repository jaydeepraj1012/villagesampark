function formregopen() {
  const element = document.getElementById("formwindow");
  element.classList.remove("formwindowactive");  // Add newone class
  element.classList.toggle("formwindow");  // Remove mystyle class
}
function formregclose(){
  console.log("hello");
  const element = document.getElementById("formwindow");
  element.classList.toggle("formwindow"); 
}
function statusopen() {
  const element = document.getElementById("formstatus");
  console.log("hello");
  element.classList.remove("statuswindowactive");  // Add newone class
  element.classList.toggle("statuswindow");  // Remove mystyle class
}
// function formregclose(){
//   console.log("hello");
//   const element = document.getElementById("formwindow");
//   element.classList.toggle("formwindow"); 
// }

