const numbers = [2, 8, 4, 20, 10, 40];
let maxValue = 0;

for (let number in numbers) {
	if (numbers[number] > maxValue) {
		maxValue = numbers[number];
	}
}

console.log(maxValue);
