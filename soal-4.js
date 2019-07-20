function countDiscount(price, disc, tax) {
  if (tax) {
    var countTax = (5 / 100) * price;
    return (price - countTax) * (disc / 100);
  } else {
    return (disc / 100) * price;
  }
}

function countDistancePrice(distance) {
  var priceDistance = 0;
  if (distance <= 1.5) {
    return (priceDistance = 5000);
  } else if (distance > 1.5) {
    var farDistance = Math.round(distance - 1.5);
    return (priceDistance = farDistance * 3000 + 5000);
  }
}

const ruleDisc50 = 50000;
const ruleDisc25 = 25000;
const disc50 = 50000;
const disc60 = 30000;
var priceCount = 0;
const arkaFood = (price, voucher, distance, tax) => {
  switch (voucher) {
    case "ARKAFOOD5":
      var priceAfterDisc = countDiscount(price, 50, tax);
      if (priceAfterDisc >= ruleDisc50) {
        priceCount = price - disc50;
      } else if (priceAfterDisc < disc50) {
        priceCount = price - priceAfterDisc;
      }
      break;
    case "DITRAKTIRDEMY":
      var priceAfterDisc = countDiscount(price, 60, tax);
      if (priceAfterDisc >= ruleDisc25) {
        priceCount = price - disc60;
      } else if (priceAfterDisc < disc60) {
        priceCount = price - priceAfterDisc;
      }
      break;
    default:
      return "Maaf, Voucher Tidak Tersedia";
  }

  //Hitung Harga Barang + Biaya Pengiriman
  var priceSendProduct = countDistancePrice(distance);
  var finalPrice = priceCount + priceSendProduct;
  return console.log("Rp. " + finalPrice);
};

// Penggunaan Voucher ARKAFOOD5
arkaFood(75000, "ARKAFOOD5", 5, false);

// Penggunaan Voucher DITRAKTIRDEMY
arkaFood(75000, "DITRAKTIRDEMY", 5, false);
