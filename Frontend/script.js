function signUp() {
    
    let age = document.getElementById("ageBtn").value;
    let birthday = document.getElementById("DOB").value;
    let email = document.getElementById("email").value;
    let phoneNumber = document.getElementById("phone-number").value;

    if (age < 13 || age > 16) {
        alert("Player must be 13-16 years old!");
    }
    

}
