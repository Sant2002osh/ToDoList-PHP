let n = [40,-50, -30, 7, -8, 22, 1];
function removeNegatives(arr) {
  return arr.filter(num => num >= 0);
}
console.log(removeNegatives(n));
