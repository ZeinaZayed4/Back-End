function calculate(n1, n2) {
	function sum() {
		return n1 + n2;
	}
	function sub() {
		return n1 - n2;
	}
	function mul() {
		return n1 * n2;
	}
	function div() {
		return n1 / n2;
	}

	return { sum, sub, mul, div };
}

const calculator = calculate(8, 2);
console.log(calculator.sum());
console.log(calculator.sub());
console.log(calculator.mul());
console.log(calculator.div());
