const evenSum = baris => {
  var a = 0;
  var b = 1;
  var c = 1;
  var deret = [];
  for (var i = 0; i < baris; i++) {
    c = a + b;
    a = b;
    b = c;
    deret.push(c);
  }
  var genap = 0;
  deret.forEach(val => {
    if (val % 2 == 0) {
      genap += val;
    }
  });
  console.log("Jumlah Penjumlahan Deret Genap Fibonacci : " + genap);
};

const oddSum = baris => {
  var a = 0;
  var b = 1;
  var c = 1;
  var deret = [];
  for (var i = 0; i < baris; i++) {
    c = a + b;
    a = b;
    b = c;
    deret.push(c);
  }
  var ganjil = 0;
  deret.forEach(val => {
    if (val % 2 == 1) {
      ganjil += val;
    }
  });
  console.log("Jumlah Penjumlahan Deret Ganjil Fibonacci : " + ganjil);
};

// Panggil Function Penjumlahan Deret Fibonacci Genap
evenSum(10); //Hasil 798

// Panggil Function Penjumlahan Deret Fibonacci Ganjil
oddSum(10); //Hasil 187
oddSum(15); //Hasil 1784
