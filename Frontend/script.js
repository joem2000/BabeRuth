function signUp() {
    
    const playerFirstName = document.getElementById('first');
    const playerLastName = document.getElementById('last');
    const age = document.getElementById('ageBtn');
    const dob = document.getElementById('DOB');
    const parentFirstName = document.getElementById('parent-first');
    const parentLastName = document.getElementById('parent-last');
    const email = document.getElementById('email');
    const phoneNumber = document.getElementById('phone-number');

    if (age < 13 || age > 16) {
        alert("Player must be 13-16 years old!");
    }

    const player = [playerFirstName, playerLastName, age, dob, parentFirstName,
                    parentLastName, email, phoneNumber];

}
console.log(player);
console.log("hi");