function calculate(operation) {
	const num1 = parseFloat(document.getElementById("num1").value);
	const num2 = parseFloat(document.getElementById("num2").value);

	if (isNaN(num1) || isNaN(num2)) {
		alert("Please enter valid numbers.");
		return;
	}

	let result;

	switch (operation) {
		case "Add":
			result = num1 + num2;
			break;
		case "Subtract":
			result = num1 - num2;
			break;
		case "Multiply":
			result = num1 * num2;
			break;
		case "Divide":
			if (num2 === 0) {
				alert("Division by zero is not allowed.");
				return;
			}
			result = num1 / num2;
			break;
		default:
			alert("Invalid operation.");
			return;
	}

	document.getElementById("result").textContent = `Result: ${result}`;
}
