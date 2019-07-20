const mrBrulee = (opt, count, arr_index) => {
  var bilangan = [];
  for (var i = 1; i < count + 1; i++) {
    bilangan.push(i);
  }
  var bilString = bilangan.join("").split("");
  var operation = 1;
  arr_index.forEach(item => {
    switch (opt) {
      case "SUM":
        operation += parseInt(bilString[item - 1]) - 1;
        break;
      case "MUL":
        operation *= parseInt(bilString[item - 1]);
        break;
      case "SUB":
        operation -= parseInt(bilString[item - 1]) + 1;
        break;
      case "DIV":
        operation /= parseInt(bilString[item - 1]);
        break;
    }
  });
  console.log(operation);
};

// Panggil Function Tambah
mrBrulee("SUM", 20, [11, 13, 15]); // Output : 3

// Panggil Function Kurang
mrBrulee("MUL", 20, [12, 15, 17]); // Output : 6
