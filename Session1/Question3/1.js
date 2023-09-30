function sumObjectValues(object) {
	let sum = 0;
	for (let key in object) {
		if (typeof object[key] === "number" && object.hasOwnProperty(key)) {
			sum += object[key];
		}
	}
	return sum;
}

let object = { 0: 1, 1: "two", 2: 3.5, 3: 4 };
console.log(sumObjectValues(object));
