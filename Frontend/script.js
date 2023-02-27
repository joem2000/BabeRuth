function signUp() {
    let first = document.getElementById("first").value;
    let last = document.getElementById("last").value;
    let age = document.getElementById("ageBtn").value;
    let birthday = document.getElementById("DOB").value;
    let parentFirst = document.getElementById("parent-first").value;
    let parentLast = document.getElementById("parent-last").value; 
    let email = document.getElementById("email").value;
    let phoneNumber = document.getElementById("phone-number").value;

    if (age < 12 || age > 16) {
        alert("Player must be 12-16 years old!");
    }

}
