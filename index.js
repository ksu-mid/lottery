let btn = document.querySelector("#btn");
btn.addEventListener('click', validate);
function validate(e) {
  e.preventDefault()
  
  let number_1 = document.querySelector("#number_1").value;
  let number_2 = document.querySelector("#number_2").value;
  let number_3 = document.querySelector("#number_3").value;
  let number_4 = document.querySelector("#number_4").value;
  let number_5 = document.querySelector("#number_5").value;
  let number_6 = document.querySelector("#number_6").value;

  let td_1 = document.querySelector("#td_1");
  let td_2 = document.querySelector("#td_2");
  let td_3 = document.querySelector("#td_3");
  let td_4 = document.querySelector("#td_4");
  let td_5 = document.querySelector("#td_5");
  
  let arr = [number_1, number_2, number_3, number_4, number_5, number_6];
  let valueArr = arr.map(function (item) { return item });
  let isDuplicate = valueArr.some(function (item, idx) {
    return valueArr.indexOf(item) != idx
  });
  
  if (isDuplicate == true) {
    alert("Номера не должны повторятся!Проверьте правильность введения данных!");
    return false;
  } else if (number_1 == "") {
    alert("Заполните поле №1!");
    return false;
  } else if (number_2 == "") {
    alert("Заполните поле №2!");
    return false;
  }else if (number_3 == "") {
    alert("Заполните поле №3!");
    return false;
  } else if (number_3 == "") {
    alert("Заполните поле №3!");
    return false;
  }else if (number_4 == "") {
    alert("Заполните поле №4!");
    return false;
  }else if (number_5 == "") {
    alert("Заполните поле №5!");
    return false;
  }else if (number_6 == "") {
    alert("Заполните поле №6!");
    return false;
  }else if ((number_1 < 1 || number_1 > 52) || (number_2 < 1 || number_2 > 52) || (number_3 < 1 || number_3 > 52) || (number_4 < 1 || number_4 > 52) || (number_5 < 1 || number_5 > 52) || (number_6 < 1 || number_6 > 52)){
    alert("Введите число от 1 до 52!");
    return false;
  } else {
  const request = new XMLHttpRequest();
  const url = "action.php";
  const params = "number_1=" + number_1 + "&number_2=" + number_2 + "&number_3=" + number_3 + "&number_4=" + number_4 + "&number_5=" + number_5 + "&number_6=" + number_6;
  
  request.open("POST", url, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.addEventListener("readystatechange", () => {
    if(request.readyState === 4 && request.status === 200) {
    var data = JSON.parse(request.responseText);   
    td_5.innerHTML = data.result_5;
    td_4.innerHTML = data.result_4;
    td_3.innerHTML = data.result_3;
    td_2.innerHTML = data.result_2;
    td_1.innerHTML = data.result_1;
    }
  });
  request.send(params);
  }
}
