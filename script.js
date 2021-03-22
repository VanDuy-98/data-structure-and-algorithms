function createArrayByInputValue(inputNumber, inputArray) {
  let n = prompt("Nhập vào số nguyên dương n: ");
  let a = [];

  for (let i = 0; i < n; i++) {
    a[i] = prompt("Nhập phần tử thứ " + (i + 1) + " của mảng: ");
  }
  inputNumber.textContent = n;
  inputArray.textContent = a;
  return a;
}

function printResult(output) {
  let result = document.createElement("p");
  result.textContent = "Kết quả: " + output;
  document.body.appendChild(result);
}

function createArrayFromInput(amountArray, elementArray, btnAddToArray, inputElementArray, inputArray) {
  amountArray = Number(amountArray);
  elementArray = Number(elementArray);
  let a = [];

  if (i === amountArray) {
    a.push(elementArray);
    btnAddToArray.disabled = true;
    inputElementArray.disabled = true;
    inputArray.textContent = "Mảng đã nhập: " + a;
  } else {
    a.push(elementArray);
  }
  i++;
  inputElementArray.value = "";
  inputElementArray.focus();
}

