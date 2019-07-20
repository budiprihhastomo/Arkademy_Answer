const isValidUsername = (_input)=> {
  var pattern = /^[^\d](?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{4,9}$/
  return pattern.test(_input) ? console.log("Username Is Valid") : console.log("Username Is Not Valid")
}

// merupakan kombinasi dari huruf kecil, huruf besar minimal satu karakter, angka minimal satu karakter, dan karakter spesial minimal satu karakter dan harus memiliki karakter simbol “=”  dan panjang minimal 8 karakter.

const isValidPassword = (_input)=> {
  var pattern = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.*[\=])(?=.{7,})")
  return pattern.test(_input) ? console.log("Password Is Valid") : console.log("Password Is Not Valid")
}

// Tidak Valid Karena Diawali Angka
isValidUsername("1sValidKah") 

// Valid Karena Mengandung Kombinasi Huruf Kecil, Huruf Besar, Angka dan Panjang Min 5 Max 9 Karakter
isValidUsername("IsValidK4h") 

// Tidak Valid Karena Hanya Mengandung Huruf Kecil Saja
isValidPassword("inipassword=")

// Valid Karena Mengandung Kombinasi Huruf Kecil, Huruf Besar, Angka, Symbol, dan Symbol Wajib '=' dan Panjang Min 8
isValidPassword("1niPa$$w0rd=")