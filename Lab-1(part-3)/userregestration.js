const regestrationForm = document.getElementById("regestration-form");
const userTable = document.getElementById("user-table");

regestrationForm.onsubmit = (event) => {
  document.getElementById("tableData").style.display = "block";

  //create a new table row

  const newrow = userTable.insertRow(-1);
  const username = newrow.insertCell(0);
  const email = newrow.insertCell(1);

  //insert value
  username.innerHTML = document.getElementById("username").value;
  email.innerHTML = document.getElementById("email").value;

  return false;
};
