function multiplyBy() {
  cement = document.getElementById("cement").value;
  bricks = document.getElementById("bricks").value;
  concrete = document.getElementById("concrete").value;
  tiles = document.getElementById("tiles").value;
  glass = document.getElementById("glass").value;
  document.getElementById("result").innerHTML = cement * cement;
  document.getElementById("result1").innerHTML = bricks * 0.82 + bricks * 23.45;
  document.getElementById("result2").innerHTML =
    concrete * 480 + concrete * 26.14;
  document.getElementById("result3").innerHTML = tiles * 18.33 + tiles * 0.023;
  document.getElementById("result4").innerHTML = glass * 1.735 + glass * 0.265;
}
